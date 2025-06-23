<?php

namespace App\Http\Controllers;

use App\Services\SmartyRenderer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Binkode\Paystack\Support\Charge;
use Binkode\Paystack\Support\Transaction;
use App\Models\PaymentMethod;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Str;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    protected $smarty;

    public function __construct(SmartyRenderer $smarty)
    {
        $this->smarty = $smarty;
    }

    public function show()
    {
        $cart = session('cart', []);
        $checkoutData = session('checkout_data', []);

        if (empty($cart) || empty($checkoutData)) {
            return redirect('/cart')->with('error', 'Your session has expired. Please start again.');
        }

        // Calculate totals
        $cart_subtotal = 0;
        foreach ($cart as $item) {
            $cart_subtotal += $item['price'] * $item['quantity'];
        }
        $tax = $cart_subtotal * 0.075;
        $cart_total = $cart_subtotal + $tax;

        $data = [
            'csrf_token' => csrf_token(),
            'islogged_in' => Auth::check(),
            'user' => Auth::user(),
            'cart' => $cart,
            'checkout_data' => $checkoutData,
            'cart_subtotal' => $cart_subtotal,
            'tax' => $tax,
            'cart_total' => $cart_total,
        ];

        $content = $this->smarty->render('payment.tpl', $data);
        return response($content);
    }

    public function redirectToGateway(Request $request)
    {
        // Validate required fields
        $request->validate([
            'email' => 'required|email',
            'card_number' => 'required|string',
            'cvv' => 'required|string|min:3|max:4',
            'expiry_month' => 'required|string|size:2',
            'expiry_year' => 'required|string|size:4',
            'cardholder' => 'required|string',
        ]);

        $cart = session('cart', []);
        $checkoutData = session('checkout_data', []);

        if (empty($cart) || empty($checkoutData)) {
            return response()->json(['message' => 'Your session has expired. Please start again.'], 400);
        }

        $cart_subtotal = 0;
        foreach ($cart as $item) {
            $cart_subtotal += $item['price'] * $item['quantity'];
        }
        $tax = $cart_subtotal * 0.075;
        $cart_total = $cart_subtotal + $tax;
        $amount_in_kobo = round($cart_total * 100);

        DB::beginTransaction();
        try {
            $order = Order::create([
                'user_id' => $checkoutData['user_id'] ?? null,
                'order_number' => 'ORD-' . strtoupper(uniqid()),
                'email' => $request->email,
                'subtotal' => $cart_subtotal,
                'tax' => $tax,
                'total' => $cart_total,
                'status' => 'pending',
                'payment_status' => 'pending',
                'shipping_name' => $checkoutData['name'],
                'shipping_email' => $request->email,
                'shipping_phone' => $checkoutData['phone'],
                'shipping_address' => $checkoutData['address'],
                'shipping_city' => $checkoutData['city'],
                'shipping_state' => $checkoutData['state'],
                'shipping_zip' => $checkoutData['zip'],
                'shipping_country' => $checkoutData['country'] ?? 'Nigeria',
            ]);

            foreach ($cart as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item['id'],
                    'name' => $item['name'],
                    'price' => $item['price'],
                    'quantity' => $item['quantity'],
                    'size' => $item['size'] ?? null,
                    'image' => $item['image'] ?? null,
                ]);
            }

            $payment = PaymentMethod::create([
                'order_id' => $order->id,
                'user_id' => $checkoutData['user_id'] ?? null,
                'transaction_reference' => time() . Str::random(8),
                'amount' => $cart_total,
                'currency' => 'NGN',
                'status' => 'pending',
                'gateway' => 'paystack',
            ]);

            // Store payment reference in session for OTP verification
            session(['payment_reference' => $payment->transaction_reference]);

            $chargeData = [
                'amount' => $amount_in_kobo,
                'email' => $request->email,
                'reference' => $payment->transaction_reference,
                'callback_url' => route('payment.callback'),
                'card' => [
                    'number' => str_replace(' ', '', $request->card_number),
                    'cvv' => $request->cvv,
                    'expiry_month' => $request->expiry_month,
                    'expiry_year' => $request->expiry_year,
                ],
                'metadata' => [
                    'order_id' => $order->id,
                    'payment_id' => $payment->id,
                ]
            ];

            DB::commit();

            // Attempt to charge the card
            try {
                $chargeResponse = (object) Charge::create($chargeData);

                // Convert data to array if it's an object for consistent access
                $responseData = is_object($chargeResponse->data) ? (array) $chargeResponse->data : $chargeResponse->data;
                // Check for 3DS or authorization URL redirect
                if ($chargeResponse->status && isset($responseData['url'])) {
                    return response()->json(['redirectUrl' => $responseData['url']]);
                }

                if ($chargeResponse->status && isset($responseData['authorization_url'])) {
                    return response()->json(['redirectUrl' => $responseData['authorization_url']]);
                }

                // Handle successful payment
                if (
                    $chargeResponse->status && isset($responseData['status']) &&
                    (string)$responseData['status'] === 'success'
                ) {

                    // Update payment and order status
                    $payment->update([
                        'status' => 'success',
                        'gateway_reference' => $responseData['id'] ?? null,
                        'authorization_code' => $responseData['authorization']['authorization_code'] ?? null,
                        'card_type' => $responseData['authorization']['card_type'] ?? null,
                        'last4' => $responseData['authorization']['last4'] ?? null,
                        'gateway_response' => json_encode($responseData),
                    ]);

                    $order->update([
                        'payment_status' => 'paid',
                        'status' => 'processing'
                    ]);

                    // Save payment method for future use if user is logged in
                    if (Auth::check()) {
                        $this->savePaymentMethod($responseData);
                    }

                    session()->forget(['cart', 'checkout_data', 'payment_reference']);

                    return response()->json([
                        'success' => true,
                        'redirectUrl' => route('payment.success', ['order' => $order->id])
                    ]);
                }

                // Alternative success check - handle wrapped response structure
                if (
                    $chargeResponse->status && isset($responseData) &&
                    $chargeResponse->message === 'Charge attempted' &&
                    isset($responseData['status']) && $responseData['status'] === 'success'
                ) {

                    // Update payment and order status
                    $payment->update([
                        'status' => 'success',
                        'gateway_reference' => $responseData['id'] ?? null,
                        'authorization_code' => $responseData['authorization']['authorization_code'] ?? null,
                        'card_type' => $responseData['authorization']['card_type'] ?? null,
                        'last4' => $responseData['authorization']['last4'] ?? null,
                        'gateway_response' => json_encode($responseData),
                    ]);

                    $order->update([
                        'payment_status' => 'paid',
                        'status' => 'processing'
                    ]);

                    // Save payment method for future use if user is logged in
                    if (Auth::check()) {
                        $this->savePaymentMethod($responseData);
                    }

                    session()->forget(['cart', 'checkout_data', 'payment_reference']);

                    return response()->json([
                        'success' => true,
                        'redirectUrl' => route('payment.success', ['order' => $order->id])
                    ]);
                }

                // Handle pending payment (awaiting verification)
                if (
                    $chargeResponse->status && isset($responseData['status']) &&
                    (string)$responseData['status'] === 'pending'
                ) {

                    $payment->update([
                        'gateway_reference' => $responseData['id'] ?? null,
                        'gateway_response' => json_encode($responseData),
                    ]);

                    return response()->json([
                        'success' => true,
                        'redirectUrl' => route('payment.success', ['order' => $order->id])
                    ]);
                }

                // Handle failed payment
                if (!$chargeResponse->status || (isset($responseData['status']) &&
                    (string)$responseData['status'] === 'failed')) {
                    $payment->update([
                        'status' => 'failed',
                        'gateway_response' => json_encode($responseData ?? null),
                    ]);

                    $order->update([
                        'status' => 'failed',
                        'payment_status' => 'failed'
                    ]);

                    $errorMessage = $chargeResponse->message ?? 'Payment failed';

                    Log::error('Paystack charge failed', [
                        'chargeResponse' => $chargeResponse,
                        'data' => $responseData ?? null,
                    ]);

                    return response()->json(['message' => 'Payment failed: ' . $errorMessage], 422);
                }

                return response()->json([
                    'message' => 'Payment processing incomplete. Please contact support.'
                ], 500);
            } catch (HttpException $e) {
                // Don't immediately mark as failed - let webhook/callback handle it
                Log::error('Paystack HTTP Exception', [
                    'error' => $e->getMessage(),
                    'reference' => $payment->transaction_reference
                ]);

                return response()->json([
                    'message' => 'Payment is being processed. Please wait for confirmation.',
                    'reference' => $payment->transaction_reference
                ], 200);
            } catch (\Exception $e) {
                // Only mark as failed for genuine processing errors
                Log::error('Payment processing exception', [
                    'error' => $e->getMessage(),
                    'reference' => $payment->transaction_reference
                ]);

                return redirect()->route('payment.success', ['order' => $order->id]);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'An error occurred: ' . $e->getMessage()], 500);
        }
    }

    public function handleGatewayCallback($reference = null)
    {
        $reference = $reference ?? request()->reference;
        if (!$reference) {
            return redirect('/payment')->with('error', 'Payment reference not found.');
        }

        try {
            $paymentDetails = (object) Transaction::verify($reference);

            $payment = PaymentMethod::where('transaction_reference', $reference)->firstOrFail();
            $order = $payment->order;

            if ($paymentDetails && $paymentDetails->status && $paymentDetails->data->status === 'success') {
                $payment->update([
                    'status' => 'success',
                    'gateway_reference' => $paymentDetails->data->id ?? null,
                    'authorization_code' => $paymentDetails->data->authorization->authorization_code ?? null,
                    'card_type' => $paymentDetails->data->authorization->card_type ?? null,
                    'last4' => $paymentDetails->data->authorization->last4 ?? null,
                    'gateway_response' => json_encode($paymentDetails->data),
                ]);

                $order->update([
                    'payment_status' => 'paid',
                    'status' => 'processing'
                ]);

                // Save payment method for future use if user is logged in
                if (Auth::check()) {
                    $this->savePaymentMethod($paymentDetails->data);
                }

                session()->forget(['cart', 'checkout_data', 'payment_reference']);

                return redirect()->route('payment.success', ['order' => $order->id]);
            }

            $payment->update([
                'status' => 'failed',
                'gateway_response' => json_encode($paymentDetails->data ?? null),
            ]);

            $order->update([
                'payment_status' => 'failed',
                'status' => 'failed'
            ]);

            return redirect('/payment')->with('error', 'Payment failed. Please try again.');
        } catch (\Exception $e) {
            return redirect('/payment')->with('error', 'Payment verification failed.');
        }
    }

    private function handleSuccessfulPayment($paymentData)
    {
        return DB::transaction(function () use ($paymentData) {
            $paymentSessionData = session('payment_data');

            if (!$paymentSessionData) {
                throw new \Exception('Payment session data not found');
            }

            $checkoutData = $paymentSessionData['checkout_data'];
            $cart = $paymentSessionData['cart'];

            // Create order
            $order = Order::create([
                'user_id' => Auth::id(),
                'order_number' => 'ORD-' . strtoupper(uniqid()),
                'email' => $paymentSessionData['email'],
                'subtotal' => $paymentSessionData['cart_subtotal'],
                'tax' => $paymentSessionData['tax'],
                'total' => $paymentSessionData['cart_total'],
                'status' => 'processing',
                'payment_status' => 'paid',
                'shipping_name' => $checkoutData['shipping_name'] ?? $checkoutData['name'],
                'shipping_email' => $checkoutData['shipping_email'] ?? $paymentSessionData['email'],
                'shipping_phone' => $checkoutData['shipping_phone'] ?? null,
                'shipping_address' => $checkoutData['shipping_address'] ?? $checkoutData['address'],
                'shipping_city' => $checkoutData['shipping_city'] ?? $checkoutData['city'],
                'shipping_state' => $checkoutData['shipping_state'] ?? $checkoutData['state'],
                'shipping_zip' => $checkoutData['shipping_zip'] ?? $checkoutData['zip'],
                'shipping_country' => $checkoutData['shipping_country'] ?? 'Nigeria',
            ]);

            // Create order items
            foreach ($cart as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item['id'] ?? null,
                    'name' => $item['name'],
                    'price' => $item['price'],
                    'quantity' => $item['quantity'],
                    'size' => $item['size'] ?? null,
                    'image' => $item['image'] ?? null,
                ]);
            }

            // Create payment record
            PaymentMethod::create([
                'order_id' => $order->id,
                'user_id' => Auth::id(),
                'transaction_reference' => $paymentData->reference,
                'gateway_reference' => $paymentData->gateway_response->reference ?? $paymentData->reference,
                'amount' => $paymentSessionData['cart_total'],
                'currency' => 'NGN',
                'status' => 'success',
                'gateway' => 'paystack',
                'card_type' => $paymentData->authorization->card_type ?? null,
                'last4' => $paymentData->authorization->last4 ?? null,
                'authorization_code' => $paymentData->authorization->authorization_code ?? null,
                'gateway_response' => json_encode($paymentData),
            ]);

            /** @var User $user */
            $saved = PaymentMethod::where('user_id', $user->id)
                ->whereNull('order_id')
                ->where('authorization_code', $paymentData->authorization->authorization_code)
                ->first();

            if (!$saved) {
                PaymentMethod::create([
                    'order_id' => null,
                    'user_id' => $user->id,
                    'authorization_code' => $paymentData->authorization->authorization_code,
                    'card_type' => $paymentData->authorization->card_type ?? null,
                    'last4' => $paymentData->authorization->last4 ?? null,
                    'exp_month' => $paymentData->authorization->exp_month ?? null,
                    'exp_year' => $paymentData->authorization->exp_year ?? null,
                    'bin' => $paymentData->authorization->bin ?? null,
                    'bank' => $paymentData->authorization->bank ?? null,
                    'is_default' => $user->paymentMethods()->whereNull('order_id')->count() === 0,
                    'status' => 'success',
                    'gateway' => 'paystack',
                ]);
            }

            // Save payment method for future use
            $this->savePaymentMethod($paymentData);

            // Clear session data
            session()->forget(['cart', 'checkout_data', 'payment_data']);

            return $order;
        });
    }

    private function savePaymentMethod($paymentData)
    {
        // Convert to array if it's an object for consistent access
        $data = is_object($paymentData) ? (array) $paymentData : $paymentData;

        if (isset($data['authorization']) && Auth::check()) {
            /** @var User $user */
            $user = Auth::user();
            $authorization = is_object($data['authorization']) ? (array) $data['authorization'] : $data['authorization'];

            // Check if payment method already exists
            $existingMethod = PaymentMethod::where('user_id', $user->id)
                ->whereNull('order_id') // Only check saved payment methods
                ->where('authorization_code', $authorization['authorization_code'])
                ->first();

            if (!$existingMethod) {
                // Make other payment methods not default if this is the first one
                if ($user->paymentMethods()->whereNull('order_id')->count() === 0) {
                    $isDefault = true;
                } else {
                    $isDefault = false;
                    // Optionally make this the default
                    // $user->paymentMethods()->whereNull('order_id')->update(['is_default' => false]);
                    // $isDefault = true;
                }

                PaymentMethod::create([
                    'user_id' => $user->id,
                    'order_id' => null, // Saved payment method, not tied to specific order
                    'authorization_code' => $authorization['authorization_code'],
                    'card_type' => $authorization['card_type'],
                    'last4' => $authorization['last4'],
                    'exp_month' => $authorization['exp_month'],
                    'exp_year' => $authorization['exp_year'],
                    'bin' => $authorization['bin'],
                    'bank' => $authorization['bank'],
                    'is_default' => $isDefault,
                    'status' => 'success',
                    'gateway' => 'paystack',
                ]);
            }
        }
    }

    public function showSuccess(Order $order)
    {
        // Ensure user can only view their own orders
        if (Auth::check() && $order->user_id !== Auth::id()) {
            abort(403);
        }

        // Load order relationships
        $order->load(['items', 'payment']);

        $data = [
            'order' => $order,
            'payment' => $order->payment,
            'user' => Auth::user(),
        ];

        $content = $this->smarty->render('payment-success.tpl', $data);
        return response($content);
    }

    public function paymentSuccess(Order $order)
    {
        $order->load('items', 'payment');

        $data = [
            'order' => $order,
            'payment' => $order->payment,
            'user' => Auth::user(),
            'islogged_in' => Auth::check(),
        ];

        $content = $this->smarty->render('payment-success.tpl', $data);
        return response($content);
    }

    public function downloadOrderPdf(Order $order)
    {
        // Ensure user can only download their own orders
        if (Auth::check() && $order->user_id !== Auth::id()) {
            abort(403);
        }

        // Load order relationships
        $order->load(['items', 'payment']);

        $data = [
            'order' => $order,
            'payment' => $order->payment,
        ];

        $pdf = Pdf::loadView('pdf.order-details', $data);

        $filename = 'order-' . ($order->order_number ?? 'ORD-' . $order->id) . '.pdf';

        return $pdf->download($filename);
    }
}
