<?php

namespace App\Http\Controllers;

use App\Services\SmartyRenderer;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    protected $smarty;

    public function __construct(SmartyRenderer $smarty)
    {
        $this->smarty = $smarty;
    }

    public function show()
    {
        // Pass any needed data to the checkout template
        $data = [
            'csrf_token' => csrf_token(),
            'is_logged_in' => Auth::check(),
            'user' => Auth::user(),
        ];
        $content = $this->smarty->render('checkout.tpl', $data);
        return response($content);
    }

    public function payment()
    {
        $data = [
            'csrf_token' => csrf_token(),
        ];
        $content = $this->smarty->render('payment.tpl', $data);
        return response($content);
    }
}