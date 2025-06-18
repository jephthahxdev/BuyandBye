<?php

namespace App\Http\Controllers;

use App\Services\SmartyRenderer;
use Illuminate\Http\Request;

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
        $cart_count = count($cart);

        // Pass cart and count to Smarty
        $data = [
            'cart' => $cart,
            'cart_count' => $cart_count,
            // Add csrf_token if you need AJAX in cart.tpl
            'csrf_token' => csrf_token(),
        ];

        $content = $this->smarty->render('cart.tpl', $data);
        return response($content);
    }
}