<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\SmartyRenderer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class AllUsersController extends Controller
{
    protected $smarty;

    public function __construct(SmartyRenderer $smarty)
    {
        $this->smarty = $smarty;
    }

    public function index(Request $request)
    {
        // Check if user is authenticated as admin
        $admin = Auth::guard('admin')->user();
        if (!$admin) {
            return redirect('/admin/login');
        }

        // Get all users with pagination
        $users = User::with(['orders', 'billingAddresses'])
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        // Convert users for Smarty
        $usersArray = collect($users->items())->map(function($user) {
            return [
                'id' => $user->id,
                'name' => $user->name ?? 'N/A',
                'email' => $user->email ?? 'N/A',
                'created_at' => $user->created_at,
                'orders_count' => $user->orders ? $user->orders->count() : 0,
                'total_spent' => $user->orders ? $user->orders->sum('total') : 0,
                'last_order_date' => $user->orders ? $user->orders->sortByDesc('created_at')->first()?->created_at : null,
                'avatar' => $user->avatar ?? null,
                'twitter_handle' => $user->twitter_handle ?? null,
                'facebook_handle' => $user->facebook_handle ?? null,
                'linkedin_handle' => $user->linkedin_handle ?? null,
                'billing_addresses_count' => $user->billingAddresses ? $user->billingAddresses->count() : 0,
                'status' => $user->email_verified_at ? 'verified' : 'unverified'
            ];
        })->toArray();

        $data = [
            'user' => [
                'name' => $admin->name,
                'email' => $admin->email,
            ],
            'users' => $usersArray,
            'pagination' => [
                'current_page' => $users->currentPage(),
                'last_page' => $users->lastPage(),
                'per_page' => $users->perPage(),
                'total' => $users->total(),
                'has_more_pages' => $users->hasMorePages(),
                'next_page_url' => $users->nextPageUrl(),
                'prev_page_url' => $users->previousPageUrl(),
            ],
            'base_url' => url('/'),
            'csrf_token' => csrf_token(),
            'is_logged_in' => Auth::guard('admin')->check(),
        ];

        $content = $this->smarty->render('admin/all-users.tpl', $data);
        return response($content);
    }

    // Method to view single user details
    public function show(Request $request, $userId)
    {
        // Check if user is authenticated as admin
        $admin = Auth::guard('admin')->user();
        if (!$admin) {
            return redirect('/admin/login');
        }

        // Find the user with all related data
        $user = User::with(['orders', 'billingAddresses', 'paymentMethods'])
            ->findOrFail($userId);

        // Format user data for the template
        $userData = [
            'id' => $user->id,
            'name' => $user->name ?? 'N/A',
            'email' => $user->email ?? 'N/A',
            'created_at' => $user->created_at ? $user->created_at->format('m/d/Y') : 'N/A',
            'email_verified_at' => $user->email_verified_at ? $user->email_verified_at->format('m/d/Y H:i') : 'Not verified',
            'avatar' => $user->avatar ?? null,
            'twitter_handle' => $user->twitter_handle ?? null,
            'facebook_handle' => $user->facebook_handle ?? null,
            'linkedin_handle' => $user->linkedin_handle ?? null,
            'orders_count' => $user->orders ? $user->orders->count() : 0,
            'total_spent' => $user->orders ? $user->orders->sum('total') : 0,
            'billing_addresses_count' => $user->billingAddresses ? $user->billingAddresses->count() : 0,
            'payment_methods_count' => $user->paymentMethods ? $user->paymentMethods->count() : 0,
            'status' => $user->email_verified_at ? 'verified' : 'unverified',
            'orders' => $user->orders ? $user->orders->map(function($order) {
                return [
                    'id' => $order->id,
                    'order_number' => $order->order_number ?? 'N/A',
                    'created_at' => $order->created_at,
                    'total' => $order->total ?? 0,
                    'status' => $order->status ?? 'unknown',
                    'payment_status' => $order->payment_status ?? 'pending'
                ];
            })->toArray() : [],
            'billing_addresses' => $user->billingAddresses ? $user->billingAddresses->map(function($address) {
                return [
                    'id' => $address->id,
                    'address_line_1' => $address->address_line_1 ?? 'N/A',
                    'address_line_2' => $address->address_line_2 ?? '',
                    'city' => $address->city ?? 'N/A',
                    'state' => $address->state ?? 'N/A',
                    'postal_code' => $address->postal_code ?? 'N/A',
                    'country' => $address->country ?? 'N/A',
                    'is_default' => $address->is_default ?? false
                ];
            })->toArray() : []
        ];

        $data = [
            'user' => [
                'name' => $admin->name,
                'email' => $admin->email,
            ],
            'user_data' => $userData,
            'base_url' => url('/'),
            'csrf_token' => csrf_token(),
            'is_logged_in' => Auth::guard('admin')->check(),
        ];

        $content = $this->smarty->render('admin/user-single.tpl', $data);
        return response($content);
    }
} 