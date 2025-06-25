<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\SmartyRenderer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order;
use Carbon\Carbon;

class OrderSingleController extends Controller
{
    protected $smarty;

    public function __construct(SmartyRenderer $smarty)
    {
        $this->smarty = $smarty;
    }

    public function show(Request $request, $orderId)
    {
        // Check if user is authenticated as admin
        $admin = Auth::guard('admin')->user();
        if (!$admin) {
            return redirect('/admin/login');
        }

        // Find the order with all related data
        $order = Order::with(['items', 'user'])
            ->findOrFail($orderId);

        // Format order data for the template
        $orderData = [
            'id' => $order->id,
            'number' => $order->order_number ?? 'N/A',
            'date_of_sale' => $order->created_at ? $order->created_at->format('m/d/Y') : 'N/A',
            'account_number' => $order->user ? $order->user->id : 'N/A',
            'customer_name' => $order->shipping_name ?? ($order->user ? $order->user->name : 'N/A'),
            'customer_phone' => $order->shipping_phone ?? 'N/A',
            'customer_address' => $order->shipping_address ?? 'N/A',
            'city' => $order->shipping_city ?? 'N/A',
            'province' => $order->shipping_state ?? 'N/A',
            'postal_code' => $order->shipping_zip ?? 'N/A',
            'payment_status' => $order->payment_status ?? 'pending',
            'order_status' => $order->status ?? 'pending',
            'subtotal' => $order->subtotal ?? 0,
            'shipping' => 'Free', // You can make this dynamic based on your shipping logic
            'vat' => $order->tax ?? 0,
            'total' => $order->total ?? 0,
            'items' => $order->items ? $order->items->map(function($item) {
                return [
                    'id' => $item->id,
                    'name' => $item->name ?? 'Unknown Item',
                    'price' => $item->price ?? 0,
                    'quantity' => $item->quantity ?? 1,
                    'image' => $item->image ?? '/images/placeholder.jpg',
                    'total' => ($item->price ?? 0) * ($item->quantity ?? 1)
                ];
            })->toArray() : []
        ];

        $data = [
            'user' => [
                'name' => $admin->name,
                'email' => $admin->email,
            ],
            'order' => $orderData,
            'base_url' => url('/'),
            'csrf_token' => csrf_token(),
            'is_logged_in' => Auth::guard('admin')->check(),
        ];

        $content = $this->smarty->render('admin/orders-single.tpl', $data);
        return response($content);
    }

    // Method to update order status via AJAX
    public function updateOrderStatus(Request $request, $orderId)
    {
        $request->validate([
            'status' => 'required|in:pending,processing,shipped,delivered,cancelled',
            'payment_status' => 'required|in:pending,paid,failed,refunded',
        ]);
        
        $order = Order::findOrFail($orderId);
        $order->status = $request->status;
        $order->payment_status = $request->payment_status;
        $order->save();
        
        return response()->json([
            'success' => true, 
            'status' => $order->status,
            'payment_status' => $order->payment_status,
            'message' => 'Order updated successfully'
        ]);
    }

    // Method to cancel order via AJAX
    public function cancelOrder(Request $request, $orderId)
    {
        $order = Order::findOrFail($orderId);
        
        // Check if order can be cancelled (not already delivered or cancelled)
        if (in_array($order->status, ['delivered', 'cancelled', 'completed'])) {
            return response()->json([
                'success' => false,
                'message' => 'Order cannot be cancelled in its current status'
            ], 400);
        }
        
        // Update order status to cancelled
        $order->status = 'cancelled';
        
        // If payment was made, update payment status to refunded
        if ($order->payment_status === 'paid') {
            $order->payment_status = 'refunded';
        }
        
        $order->save();
        
        return response()->json([
            'success' => true,
            'status' => $order->status,
            'payment_status' => $order->payment_status,
            'message' => 'Order cancelled successfully'
        ]);
    }
} 