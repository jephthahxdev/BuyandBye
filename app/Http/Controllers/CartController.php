<?php

namespace App\Http\Controllers;

use App\Services\SmartyRenderer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    protected $smarty;

    public function __construct(SmartyRenderer $smarty)
    {
        $this->smarty = $smarty;
    }

    public function show()
    {
        // Get cart from session (default to empty array)
        $cart = session()->get('cart', []);
        
        // Clean up cart to ensure proper structure
        $cart = $this->cleanupCart($cart);
        
        // Save cleaned cart back to session
        session(['cart' => $cart]);
        
        $cart_count = count($cart);

        // Calculate totals
        $cart_subtotal = 0;
        foreach ($cart as $item) {
            $price = $item['price'] ?? 0;
            $quantity = $item['quantity'] ?? 0;
            $cart_subtotal += $price * $quantity;
        }
        $cart_total = $cart_subtotal; // No discount applied yet

        // Pass cart and count to Smarty
        $data = [
            'cart' => $cart,
            'cart_count' => $cart_count,
            'cart_subtotal' => $cart_subtotal,
            'cart_total' => $cart_total,
            // Add csrf_token if you need AJAX in cart.tpl
            'csrf_token' => csrf_token(),
            'is_logged_in' => Auth::check(),
            'user' => Auth::user(),
        ];

        $content = $this->smarty->render('cart.tpl', $data);
        return response($content);
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

    public function updateQuantity(Request $request)
    {
        try {
            $data = $request->validate([
                'product_id' => 'required|integer',
                'change' => 'required|integer|in:-1,1'
            ]);

            $cart = session()->get('cart', []);
            $productId = $data['product_id'];

            if (isset($cart[$productId])) {
                $newQuantity = $cart[$productId]['quantity'] + $data['change'];
                
                if ($newQuantity <= 0) {
                    // Remove item if quantity becomes 0 or negative
                    unset($cart[$productId]);
                } else {
                    $cart[$productId]['quantity'] = $newQuantity;
                }

                session(['cart' => $cart]);

                return response()->json([
                    'success' => true,
                    'cart' => $cart
                ]);
            }

            return response()->json([
                'success' => false,
                'message' => 'Product not found in cart'
            ], 404);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating quantity'
            ], 500);
        }
    }

    public function removeItem(Request $request)
    {
        try {
            $data = $request->validate([
                'product_id' => 'required|integer'
            ]);

            $cart = session()->get('cart', []);
            $productId = $data['product_id'];

            if (isset($cart[$productId])) {
                unset($cart[$productId]);
                session(['cart' => $cart]);

                return response()->json([
                    'success' => true,
                    'cart' => $cart
                ]);
            }

            return response()->json([
                'success' => false,
                'message' => 'Product not found in cart'
            ], 404);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error removing item'
            ], 500);
        }
    }

    public function clearCart()
    {
        try {
            session()->forget('cart');

            return response()->json([
                'success' => true,
                'message' => 'Cart cleared successfully'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error clearing cart'
            ], 500);
        }
    }

    /**
     * Get cart info for debugging (development only)
     */
    public function getCartInfo()
    {
        if (!app()->environment('local')) {
            return response()->json(['error' => 'Not available in production'], 403);
        }

        $cart = session()->get('cart', []);
        
        return response()->json([
            'cart' => $cart,
            'cart_count' => count($cart),
            'session_id' => session()->getId(),
            'is_array' => is_array($cart),
            'cart_keys' => is_array($cart) ? array_keys($cart) : []
        ]);
    }
}