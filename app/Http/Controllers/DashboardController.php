<?php

namespace App\Http\Controllers;

use App\Services\SmartyRenderer;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    protected $smarty;

    public function __construct(SmartyRenderer $smarty)
    {
        $this->smarty = $smarty;
    }

    public function show()
    {
        // Ensure the user is authenticated
        $user = Auth::user();
        if (!$user) {
            return redirect('/login');
        }

        // Example stats and account data (replace with real queries as needed)
        $data = [
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
            ],
            'stats' => [
                'total_orders' => 5,
                'favorite_products' => 3,
                'reviews_added' => 2,
                'returns' => 1,
            ],
            'active_orders' => [],
            'base_url' => url('/'),
            'csrf_token' => csrf_token(),
            'is_logged_in' => Auth::check(),
            'user' => Auth::user(),
        ];

        $content = $this->smarty->render('dashboard.tpl', $data);
        return response($content);
    }
}