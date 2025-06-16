<?php

namespace App\Http\Controllers;

use App\Services\SmartyRenderer;
use Illuminate\Http\Request;

class SmartyController extends Controller
{
    protected $smarty;
    
    public function __construct(SmartyRenderer $smarty)
    {
        $this->smarty = $smarty;
    }
    
    public function index()
    {
        $data = [
            'title' => 'Welcome to Laravel + Smarty',
            'message' => 'This is rendered with Smarty template engine!',
            'users' => ['John', 'Jane', 'Bob']
        ];
        
        $content = $this->smarty->render('welcome.tpl', $data);
        
        return response($content);
    }
}