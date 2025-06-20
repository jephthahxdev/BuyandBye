<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\SmartyRenderer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $smarty;

    public function __construct(SmartyRenderer $smarty)
    {
        $this->smarty = $smarty;
    }

    public function show(Request $request)
    {
        $data = [
            'form_data' => [
                'email' => old('email', ''),
                'remember_me' => old('remember_me', false),
            ],
            'error_message' => session('error_message', ''),
            'base_url' => url('/'),
            'assets_url' => asset(''),
            'csrf_token' => csrf_token(),
        ];
        $content = $this->smarty->render('auth/login.tpl', $data);
        return response($content);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $remember = $request->has('remember_me');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect('dashboard.tpl'); // or wherever you want to redirect after login
        }

        return redirect()->back()
            ->withInput($request->only('email', 'remember_me'))
            ->with('error_message', 'Invalid credentials.');
    }
}