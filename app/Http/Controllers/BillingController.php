<?php

namespace App\Http\Controllers;

use App\Services\SmartyRenderer;
use Illuminate\Support\Facades\Auth;

class BillingController extends Controller
{
    protected $smarty;

    public function __construct(SmartyRenderer $smarty)
    {
        $this->smarty = $smarty;
    }

    public function show()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect('/login');
        }

        // Example billing data; replace with real user billing info as needed
        $billing_addresses = [
            [
                'id' => 1,
                'name' => 'Wassim Samad',
                'company' => 'Companyname',
                'address' => '128 Rue de Vaugirard',
                'city' => 'Paris',
                'zip' => '75015',
                'country' => 'France',
                'is_default' => true,
            ],
            // ... more addresses
        ];

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
}