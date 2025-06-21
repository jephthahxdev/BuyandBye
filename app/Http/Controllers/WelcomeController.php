<?php

namespace App\Http\Controllers;

use App\Services\SmartyRenderer;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

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
        $products = Product::with('images')->inRandomOrder()->limit(3)->get();

        $data = [
            'csrf_token' => csrf_token(),
            'is_logged_in' => Auth::check(),
            'user' => Auth::user(),
            'products' => $products,
        ];

        $content = $this->smarty->render('welcome.tpl', $data);

        return response($content);
    }

    public function addToCart(Request $request): JsonResponse
    {
        Log::info('Add to cart request received', $request->all());
        try {
            // Validate request
            $data = $request->validate([
                'product_id' => 'required|integer|exists:products,id',
                'product_name' => 'required|string|max:255',
                'quantity' => 'sometimes|integer|min:1',
                'size' => 'nullable|string',
            ]);

            $product = Product::find($data['product_id']);

            // Get current cart from session
            $cart = session()->get('cart', []);
            
            // Ensure quantity is always set
            $quantity = isset($data['quantity']) ? (int)$data['quantity'] : 1;

            // Check if product is already in cart
            if (isset($cart[$data['product_id']])) {
                // Update quantity - ensure quantity key exists
                if (!isset($cart[$data['product_id']]['quantity'])) {
                    $cart[$data['product_id']]['quantity'] = 0;
                }
                $cart[$data['product_id']]['quantity'] += $quantity;
            } else {
                // Add new product to cart
                $cart[$data['product_id']] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => $quantity,
                    'size' => $data['size'] ?? null,
                    'image' => $product->images->first()?->image_path,
                    'added_at' => now()->toISOString()
                ];
            }

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
            
            $totalQuantity = 0;
            foreach ($cart as $item) {
                $totalQuantity += $item['quantity'] ?? 0;
            }

            return response()->json([
                'success' => true,
                'count' => $totalQuantity
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
