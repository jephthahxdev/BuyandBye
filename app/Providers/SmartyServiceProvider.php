<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Smarty\Smarty;

class SmartyServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('smarty', function ($app) {
            $smarty = new Smarty();
            
            // Set Smarty directories
            $smarty->setTemplateDir(resource_path('views/smarty'));
            $smarty->setCompileDir(storage_path('framework/smarty/compile'));
            $smarty->setCacheDir(storage_path('framework/smarty/cache'));
            $smarty->setConfigDir(resource_path('config/smarty'));
            
            // Create directories if they don't exist
            if (!file_exists(storage_path('framework/smarty'))) {
                mkdir(storage_path('framework/smarty'), 0755, true);
                mkdir(storage_path('framework/smarty/compile'), 0755, true);
                mkdir(storage_path('framework/smarty/cache'), 0755, true);
            }
            
            if (!file_exists(resource_path('views/smarty'))) {
                mkdir(resource_path('views/smarty'), 0755, true);
            }
            
            return $smarty;
        });
    }
}