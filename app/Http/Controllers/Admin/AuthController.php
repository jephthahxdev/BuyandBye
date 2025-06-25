<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\SmartyRenderer;

class AuthController extends Controller
{
    protected $smarty;

    public function __construct(SmartyRenderer $smarty)
    {
        $this->smarty = $smarty;
    }

    public function showLoginForm(Request $request)
    {
        $data = [
            'base_url' => url('/admin'),
            'csrf_token' => csrf_token(),
            'error_message' => session('error_message'),
            'form_data' => session('form_data', []),
        ];
        $content = $this->smarty->render('admin/auth/login.tpl', $data);
        return response($content);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->filled('remember_me');
        if (Auth::guard('admin')->attempt($credentials, $remember)) {
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect()->back()
            ->with('error_message', 'Invalid credentials')
            ->with('form_data', ['email' => $request->email, 'remember_me' => $remember]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}