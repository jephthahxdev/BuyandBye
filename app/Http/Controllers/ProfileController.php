<?php

namespace App\Http\Controllers;

use App\Services\SmartyRenderer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        // Example data - replace with real data from your database
        $data = [
            'user' => [
                'name' => $user->name,
                'email' => $user->email,
            ],
            'account' => [
                'name' => $user->name,
                'email' => $user->email,
                'address' => '123 Frontend St, Dev City',
                'phone' => '+1 (555) 123-4567',
                'avatar' => null, // or a path to an avatar image
            ],
            'active_orders' => [
                [
                    'id' => '#3066',
                    'date' => 'Dec 1, 2023',
                    'price' => '$150.00',
                    'status' => 'in_transit'
                ],
                [
                    'id' => '#2984',
                    'date' => 'Nov 25, 2023',
                    'price' => '$55.00',
                    'status' => 'preorder'
                ],
            ],
            'company_name' => 'Sisyphus Ventures',
            'company_slug' => 'sisyphus',
            'branding_reports' => true,
            'branding_emails' => true,
            'twitter_handle' => 'sisyphusvc',
            'facebook_handle' => 'sisyphusvc',
            'linkedin_handle' => 'sisyphusvc',
            'base_url' => url('/'),
            'csrf_token' => csrf_token(),
            'is_logged_in' => Auth::check(),
            'user' => Auth::user(),
        ];

        $content = $this->smarty->render('profile.tpl', $data);
        return response($content);
    }
}
