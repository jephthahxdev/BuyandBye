<?php

namespace App\Http\Controllers;

use App\Services\SmartyRenderer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\BillingAddress;
use App\Models\User;

class CheckoutController extends Controller
{
    protected $smarty;

    public function __construct(SmartyRenderer $smarty)
    {
        $this->smarty = $smarty;
    }

    public function show()
    {        
        /** @var User $user */

        // Get cart from session
        $cart = session()->get('cart', []);
        
        // Clean up cart to ensure proper structure
        $cart = $this->cleanupCart($cart);
        session(['cart' => $cart]);
        
        $cart_count = count($cart);
        
        // Calculate totals
        $cart_subtotal = 0;
        foreach ($cart as $item) {
            $price = $item['price'] ?? 0;
            $quantity = $item['quantity'] ?? 0;
            $cart_subtotal += $price * $quantity;
        }
        $cart_total = $cart_subtotal;

        $data = [
            'csrf_token' => csrf_token(),
            'is_logged_in' => Auth::check(),
            'user' => Auth::user(),
            'cart' => $cart,
            'cart_count' => $cart_count,
            'cart_subtotal' => $cart_subtotal,
            'cart_total' => $cart_total,
        ];

        // If user is logged in, get their billing addresses
        if (Auth::check()) {
            /** @var User $user */
            
            $user = Auth::user();
            $data['billing_addresses'] = $user->billingAddresses()->orderBy('is_default', 'desc')->get();
        } else {
            $data['billing_addresses'] = collect();
        }

        $content = $this->smarty->render('checkout.tpl', $data);
        return response($content);
    }

    public function processCheckout(Request $request)
    {
        $user = Auth::user();
        
        // If user is not logged in, create account
        if (!$user) {
            $user = $this->createUserFromCheckout($request);
        }

        // Check if user selected an existing address
        if ($request->has('billing_address_id') && $request->billing_address_id) {
            $billingAddress = BillingAddress::where('id', $request->billing_address_id)
                ->where('user_id', $user->id)
                ->first();
            
            if ($billingAddress) {
                // Use existing address
                session([
                    'checkout_data' => [
                        'user_id' => $user->id,
                        'billing_address_id' => $billingAddress->id,
                        'name' => $billingAddress->name,
                        'email' => $user->email, // Use user's primary email
                        'address' => $billingAddress->address,
                        'city' => $billingAddress->city,
                        'state' => $billingAddress->state,
                        'zip' => $billingAddress->zip,
                        'phone' => $billingAddress->phone,
                        'country' => $billingAddress->country,
                        'company' => $billingAddress->company,
                    ]
                ]);

                return redirect('/payment');
            }
        }

        // Validate form data for new address
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:500',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip' => 'required|string|max:20',
            'phone_number' => 'required|string|max:20',
            'country' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
        ]);

        // Save billing address
        $billingAddress = $this->saveBillingAddress($request, $user);

        // Store checkout data in session for payment step
        session([
            'checkout_data' => [
                'user_id' => $user->id,
                'billing_address_id' => $billingAddress->id,
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'zip' => $request->zip,
                'phone' => $request->phone_number,
                'country' => $request->country ?? 'Nigeria',
                'company' => $request->company,
            ]
        ]);

        return redirect('/payment');
    }

    private function createUserFromCheckout(Request $request)
    {
        // Generate a random password for the user
        $password = bcrypt(Str::random(12));
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
        ]);

        // Log the user in
        Auth::login($user);

        return $user;
    }

    private function saveBillingAddress(Request $request, $user)
    {
        // If this is the first address, make it default
        /** @var User $user */
        $isDefault = $user->billingAddresses()->count() === 0;

        return BillingAddress::create([
            'user_id' => $user->id,
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'country' => $request->country ?? 'Nigeria',
            'phone' => $request->phone_number,
            'company' => $request->company,
            'is_default' => $isDefault,
        ]);
    }

    /**
     * Clean up cart to ensure all items have proper structure
     */
    private function cleanupCart($cart)
    {
        if (!is_array($cart)) {
            return [];
        }

        $cleanedCart = [];
        
        foreach ($cart as $productId => $item) {
            // Skip if product ID is not valid
            if (!is_numeric($productId)) {
                continue;
            }
            
            // Ensure item is an array
            if (!is_array($item)) {
                continue;
            }
            
            // Check if this item has the minimum required structure
            if (!isset($item['id']) || !isset($item['name']) || !isset($item['price'])) {
                continue;
            }
            
            // Ensure quantity exists and is valid
            if (!isset($item['quantity']) || !is_numeric($item['quantity']) || $item['quantity'] <= 0) {
                $item['quantity'] = 1;
            }
            
            // Add to cleaned cart
            $cleanedCart[$productId] = $item;
        }
        
        return $cleanedCart;
    }

    public function payment()
    {
        $checkoutData = session('checkout_data');
        $cart = session('cart', []);

        if (empty($checkoutData) || empty($cart)) {
            // If there's no checkout data or cart is empty, redirect back to cart
            return redirect('/cart')->with('error', 'Your session has expired. Please start again.');
        }

        // Recalculate totals to be safe
        $cart_subtotal = 0;
        foreach ($cart as $item) {
            $price = $item['price'] ?? 0;
            $quantity = $item['quantity'] ?? 0;
            $cart_subtotal += $price * $quantity;
        }

        $tax = $cart_subtotal * 0.075;
        $cart_total = $cart_subtotal + $tax;

        $data = [
            'csrf_token' => csrf_token(),
            'is_logged_in' => Auth::check(),
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
}