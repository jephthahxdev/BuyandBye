<?php

namespace App\Http\Controllers;

use App\Services\SmartyRenderer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    protected $smarty;

    public function __construct(SmartyRenderer $smarty)
    {
        $this->smarty = $smarty;
    }

    public function show()
    {
        // You can calculate subtotal/total here and pass to the view
        $data = [
            'subtotal' => '$609.98',
            'total' => '$609.98',
            'csrf_token' => csrf_token(),
            'is_logged_in' => Auth::check(),
            'user' => Auth::user(),
        ];
        $content = $this->smarty->render('payment.tpl', $data);
        return response($content);
    }
}