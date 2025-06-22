<?php

namespace App\Http\Controllers;

use App\Services\SmartyRenderer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\BillingAddress;

class BillingController extends Controller
{
    protected $smarty;

    public function __construct(SmartyRenderer $smarty)
    {
        $this->smarty = $smarty;
    }

    public function show()
    {
        /** @var User $user */

        $user = Auth::user();
        if (!$user) {
            return redirect('/login');
        }

        // Get real billing addresses from database
        $billing_addresses = $user->billingAddresses()->orderBy('is_default', 'desc')->get();

        // Example payment methods (replace with real data when implementing payment methods)
        $payment_methods = [
            [
                'id' => 1,
                'brand' => 'Mastercard',
                'last4' => '1234',
                'is_default' => true,
            ],
            [
                'id' => 2,
                'brand' => 'Mastercard',
                'last4' => '5678',
                'is_default' => false,
            ],
        ];

        $data = [
            'billing_addresses' => $billing_addresses,
            'payment_methods' => $payment_methods,
            'base_url' => url('/'),
            'csrf_token' => csrf_token(),
            'is_logged_in' => Auth::check(),
            'user' => [
                'name' => $user->name,
                'email' => $user->email,
            ],
            'account' => [
                'name' => $user->name,
                'email' => $user->email,
                'address' => $user->address ?? '123 Main St, City',
                'phone' => $user->phone ?? '555-1234',
                'avatar' => $user->avatar ?? null,
            ]
        ];

        $content = $this->smarty->render('billing.tpl', $data);
        return response($content);
    }

    public function addBillingAddress(Request $request)
    {
        /** @var User $user */

        $user = Auth::user();
        if (!$user) {
            return redirect('/login');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:500',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip' => 'required|string|max:20',
            'phone' => 'required|string|max:20',
            'country' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'is_default' => 'nullable|boolean',
        ]);

        // If this address is set as default, remove default from other addresses
        if ($request->has('is_default') && $request->is_default) {
            $user->billingAddresses()->update(['is_default' => false]);
        }

        // If this is the first address, make it default
        $isDefault = $request->has('is_default') && $request->is_default || $user->billingAddresses()->count() === 0;

        $billingAddress = BillingAddress::create([
            'user_id' => $user->id,
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'country' => $request->country ?? 'United States',
            'phone' => $request->phone,
            'company' => $request->company,
            'is_default' => $isDefault,
        ]);

        return redirect('/account/billing')->with('success', 'Billing address added successfully!');
    }
}