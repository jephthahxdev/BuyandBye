<?php

namespace App\Http\Controllers;

use App\Services\SmartyRenderer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProfileController extends Controller
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
                'avatar' => $user->avatar,
                'twitter_handle' => $user->twitter_handle,
                'facebook_handle' => $user->facebook_handle,
                'linkedin_handle' => $user->linkedin_handle,
            ],
            'profile_slug' => $user->profile_slug,
            'profile_url' => $user->profile_url,
            'base_url' => url('/'),
            'csrf_token' => csrf_token(),
            'is_logged_in' => Auth::check(),
        ];

        $content = $this->smarty->render('profile.tpl', $data);
        return response($content);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect('/login');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'twitter_handle' => 'nullable|string|max:255',
            'facebook_handle' => 'nullable|string|max:255',
            'linkedin_handle' => 'nullable|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user->name = $request->name;
        $user->twitter_handle = $request->twitter_handle;
        $user->facebook_handle = $request->facebook_handle;
        $user->linkedin_handle = $request->linkedin_handle;

        // Handle avatar upload
        if ($request->hasFile('avatar')) {
            // Delete old avatar if exists
            if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
                Storage::disk('public')->delete($user->avatar);
            }

            $avatar = $request->file('avatar');
            $filename = 'avatars/' . time() . '_' . Str::random(10) . '.' . $avatar->getClientOriginalExtension();
            
            // Store the file in the public disk
            $avatar->storeAs('public', $filename);
            $user->avatar = $filename;
        }
        
        /** @var User $user */

        $user->save();

        return redirect('/account/profile')->with('success', 'Profile updated successfully!');
    }
}
