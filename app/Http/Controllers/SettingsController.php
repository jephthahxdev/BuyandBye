<?php

namespace App\Http\Controllers;

use App\Services\SmartyRenderer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class SettingsController extends Controller
{
    protected $smarty;

    public function __construct(SmartyRenderer $smarty)
    {
        $this->smarty = $smarty;
    }

    public function show()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect('/login');
        }

        $data = [
            'user' => [
                'name' => $user->name,
                'email' => $user->email,
            ],
            'base_url' => url('/'),
            'csrf_token' => csrf_token(),
            'is_logged_in' => Auth::check(),
        ];

        $content = $this->smarty->render('settings.tpl', $data);
        return response($content);
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect('/login');
        }

        $request->validate([
            'current_password' => ['required', 'string'],
            'new_password' => [
                'required', 
                'string', 
                'min:8',
                'confirmed',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
            ],
            'new_password_confirmation' => ['required', 'string'],
        ], [
            'new_password.min' => 'The new password must be at least 8 characters.',
            'new_password.confirmed' => 'The password confirmation does not match.',
            'new_password.mixed' => 'The new password must contain at least one uppercase and one lowercase letter.',
            'new_password.numbers' => 'The new password must contain at least one number.',
            'new_password.symbols' => 'The new password must contain at least one special character.',
        ]);

        // Check if current password is correct
        if (!Hash::check($request->current_password, $user->password)) {
            $data = [
                'user' => [
                    'name' => $user->name,
                    'email' => $user->email,
                ],
                'error_message' => 'The current password is incorrect.',
                'base_url' => url('/'),
                'csrf_token' => csrf_token(),
                'is_logged_in' => Auth::check(),
            ];

            $content = $this->smarty->render('settings.tpl', $data);
            return response($content);
        }

        // Update password
        $user->password = Hash::make($request->new_password);
        /** @var User $user */
        $user->save();

        $data = [
            'user' => [
                'name' => $user->name,
                'email' => $user->email,
            ],
            'success_message' => 'Password changed successfully!',
            'base_url' => url('/'),
            'csrf_token' => csrf_token(),
            'is_logged_in' => Auth::check(),
        ];

        $content = $this->smarty->render('settings.tpl', $data);
        return response($content);
    }
} 