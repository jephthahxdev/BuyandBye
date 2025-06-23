<?php

namespace App\Services;

use Smarty;

class SmartyRenderer
{
    protected $smarty;
    
    public function __construct()
    {
        $this->smarty = app('smarty');
    }
    
    public function render($template, $data = [])
    {
        // Assign data to Smarty
        foreach ($data as $key => $value) {
            $this->smarty->assign($key, $value);
        }
        
        // Return rendered template
        return $this->smarty->fetch($template);
    }
    
    public function display($template, $data = [])
    {
        foreach ($data as $key => $value) {
            $this->smarty->assign($key, $value);
        }
        
        $this->smarty->display($template);
    }
}