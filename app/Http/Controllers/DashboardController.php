<?php

namespace App\Http\Controllers;

use App\Services\SmartyRenderer;
use Illuminate\Support\Facades\Auth;
use App\Models\BillingAddress;
use App\Models\Order;

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

        /** @var User $user */
        $defaultAddress = $user->billingAddresses()->where('is_default', true)->first();
        $orders = $user->orders()->with('items')->orderBy('created_at', 'desc')->get();

        // Filter out any null orders and convert to array for Smarty
        $ordersArray = $orders->filter(function($order) {
            return $order !== null;
        })->map(function($order) {
            return [
                'id' => $order->id,
                'order_number' => $order->order_number ?? 'N/A',
                'created_at' => $order->created_at,
                'total' => $order->total ?? 0,
                'status' => $order->status ?? 'unknown',
                'items' => $order->items ? $order->items->map(function($item) {
                    return [
                        'name' => $item->name ?? 'Unknown Item',
                        'quantity' => $item->quantity ?? 0,
                        'price' => $item->price ?? 0
                    ];
                })->toArray() : []
            ];
        })->values()->toArray();

        // Calculate order status counts
        $processingCount = $orders->where('status', 'processing')->count();
        $completedCount = $orders->where('status', 'completed')->count();
        $cancelledCount = $orders->where('status', 'cancelled')->count();

        // Filter active orders (non-completed, non-cancelled)
        $activeOrders = array_filter($ordersArray, function($order) {
            return !in_array($order['status'], ['completed', 'cancelled']);
        });

        // Limit active orders to 10 for dashboard display
        $limitedActiveOrders = array_slice($activeOrders, 0, 5);
        $hasMoreActiveOrders = count($activeOrders) > 5;

        $data = [
            'user' => [
                'name' => $user->name ?? 'Unknown User',
                'email' => $user->email ?? 'No Email',
            ],
            'account' => [
                'name' => $user->name ?? 'Unknown User',
                'email' => $user->email ?? 'No Email',
                'address' => $defaultAddress ? $defaultAddress->address : 'No address provided',
                'phone' => $defaultAddress ? $defaultAddress->phone : 'No phone provided',
                'avatar' => $user->avatar ?? null,
            ],
            'stats' => [
                'total_orders' => count($ordersArray),
                'orders_processing' => $processingCount,
                'orders_completed' => $completedCount,
                'orders_cancelled' => $cancelledCount,
            ],
            'active_orders' => array_values($limitedActiveOrders), // Limited to 10 orders
            'has_more_active_orders' => $hasMoreActiveOrders,
            'total_active_orders' => count($activeOrders),
            'base_url' => url('/'),
            'csrf_token' => csrf_token(),
            'is_logged_in' => Auth::check(),
        ];

        $content = $this->smarty->render('dashboard.tpl', $data);
        return response($content);
    }
}