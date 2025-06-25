<?php

namespace App\Http\Controllers;

use App\Services\SmartyRenderer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order;

class OrdersController extends Controller
{
    protected $smarty;

    public function __construct(SmartyRenderer $smarty)
    {
        $this->smarty = $smarty;
    }

    public function index(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect('/login');
        }

        $perPage = 10;
        $page = $request->input('page', 1);

        /** @var User $user */
        $orders = $user->orders()
            ->with('items')
            ->orderBy('created_at', 'desc')
            ->paginate($perPage, ['*'], 'page', $page);

        // Convert orders for Smarty
        $ordersArray = collect($orders->items())->map(function($order) {
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
        })->toArray();

        $data = [
            'user' => [
                'name' => $user->name ?? 'Unknown User',
                'email' => $user->email ?? 'No Email',
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

        $content = $this->smarty->render('orders.tpl', $data);
        return response($content);
    }
} 