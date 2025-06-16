<?php

namespace App\Services;

class SmartyHelpers
{
    public static function registerAssetFunctions($smarty)
    {
        // Register asset function
        $smarty->registerPlugin('function', 'asset', function($params, $smarty) {
            $path = $params['path'] ?? '';
            return asset($path);
        });
        
        // Register url function
        $smarty->registerPlugin('function', 'url', function($params, $smarty) {
            $path = $params['path'] ?? '';
            return url($path);
        });
        
        // Register route function
        $smarty->registerPlugin('function', 'route', function($params, $smarty) {
            $name = $params['name'] ?? '';
            $parameters = $params['params'] ?? [];
            return route($name, $parameters);
        });
        
        // Register csrf_token function
        $smarty->registerPlugin('function', 'csrf_token', function($params, $smarty) {
            return csrf_token();
        });
        
        // Register csrf_field function
        $smarty->registerPlugin('function', 'csrf_field', function($params, $smarty) {
            return '<input type="hidden" name="_token" value="' . csrf_token() . '">';
        });
    }
}