<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\SmartyRenderer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;

class AdminDashboardController extends Controller
{
    protected $smarty;

    public function __construct(SmartyRenderer $smarty)
    {
        $this->smarty = $smarty;
    }

    public function show(Request $request)
    {
        // You may want to add admin authentication/authorization here
        $admin = Auth::user();
        if (!$admin /* || !$admin->is_admin */) {
            return redirect('/login');
        }

        // Stats
        $today = Carbon::today();
        $newOrders = Order::whereDate('created_at', $today)->count();
        $ordersProcessing = Order::where('status', 'processing')->count();
        $ordersCompleted = Order::where('status', 'completed')->count();
        $usersCount = User::count();

        // Recent/active orders (paginated)
        $orders = Order::with('items', 'user')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        // Convert orders for Smarty
        $ordersArray = collect($orders->items())->map(function($order) {
            return [
                'id' => $order->id,
                'order_number' => $order->order_number ?? 'N/A',
                'created_at' => $order->created_at,
                'total' => $order->total ?? 0,
                'status' => $order->status ?? 'unknown',
                'user' => $order->user ? [
                    'name' => $order->user->name,
                    'email' => $order->user->email,
                ] : null,
                'items' => $order->items ? $order->items->map(function($item) {
                    return [
                        'name' => $item->name ?? 'Unknown Item',
                        'quantity' => $item->quantity ?? 0,
                        'price' => $item->price ?? 0
                    ];
                })->toArray() : []
            ];
        })->toArray();

        $data = [
            'user' => [
                'name' => $admin->name,
                'email' => $admin->email,
            ],
            'stats' => [
                'new_orders' => $newOrders,
                'orders_processing' => $ordersProcessing,
                'orders_completed' => $ordersCompleted,
                'users_count' => $usersCount,
            ],
            'active_orders' => $ordersArray,
            'pagination' => [
                'current_page' => $orders->currentPage(),
                'last_page' => $orders->lastPage(),
                'per_page' => $orders->perPage(),
                'total' => $orders->total(),
                'has_more_pages' => $orders->hasMorePages(),
                'next_page_url' => $orders->nextPageUrl(),
                'prev_page_url' => $orders->previousPageUrl(),
            ],
            'base_url' => url('/'),
            'csrf_token' => csrf_token(),
            'is_logged_in' => Auth::check(),
        ];

        $content = $this->smarty->render('admin/dashboard.tpl', $data);
        return response($content);
    }

    // You can add an endpoint for AJAX order status update here
    public function updateOrderStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:pending,processing,shipped,delivered,cancelled,completed,failed',
        ]);
        $order->status = $request->status;
        $order->save();
        return response()->json(['success' => true, 'status' => $order->status]);
    }
}