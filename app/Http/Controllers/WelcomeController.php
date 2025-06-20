<?php

namespace App\Http\Controllers;

use App\Services\SmartyRenderer;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends BaseController
{
    protected $smarty;

    public function __construct(SmartyRenderer $smarty)
    {
        $this->smarty = $smarty;

        $this->middleware('web');
    }

    public function index()
    {
        $data = [
            'csrf_token' => csrf_token(),
            'is_logged_in' => Auth::check(),
            'user' => Auth::user(),
        ];

        $content = $this->smarty->render('welcome.tpl', $data);

        return response($content);
    }

    public function addToCart(Request $request): JsonResponse
    {
        try {
            // Validate request
            $request->validate([
                'product' => 'required|string|max:255'
            ]);

            $product = $request->input('product');

            // Get current cart from session
            $cart = session()->get('cart', []);

            // Add product to cart (you might want to add quantity, ID, etc.)
            $cart[] = [
                'name' => $product,
                'added_at' => now()->toISOString()
            ];

            // Save cart back to session
            session(['cart' => $cart]);

            return response()->json([
                'success' => true,
                'message' => 'Product added to cart successfully',
                'count' => count($cart)
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid product data',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            Log::error('Error adding to cart: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while adding the product to cart'
            ], 500);
        }
    }

    public function cartCount(): JsonResponse
    {
        try {
            $cart = session()->get('cart', []);

            return response()->json([
                'success' => true,
                'count' => count($cart)
            ]);
        } catch (\Exception $e) {
            Log::error('Error getting cart count: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'count' => 0
            ], 500);
        }
    }
}
