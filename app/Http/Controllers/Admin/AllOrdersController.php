<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\SmartyRenderer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;

class AllOrdersController extends Controller
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

        // Get all orders with pagination
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
            'is_logged_in' => Auth::guard('admin')->check(),
        ];

        $content = $this->smarty->render('admin/all-orders.tpl', $data);
        return response($content);
    }

    // Method to update order status via AJAX
    public function updateOrderStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:pending,processing,shipped,delivered,cancelled,completed,failed',
        ]);
        
        $order->status = $request->status;
        $order->save();
        
        return response()->json([
            'success' => true, 
            'status' => $order->status,
            'message' => 'Order status updated successfully'
        ]);
    }
} 