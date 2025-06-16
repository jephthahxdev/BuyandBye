<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\SmartyHelpers;
use Smarty\Smarty;

class SmartyServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('smarty', function ($app) {
            $smarty = new Smarty();
            
            // Set directories
            $smarty->setTemplateDir(resource_path('views/smarty'));
            $smarty->setCompileDir(storage_path('framework/smarty/compile'));
            $smarty->setCacheDir(storage_path('framework/smarty/cache'));
            $smarty->setConfigDir(resource_path('config/smarty'));
            
            // Create directories
            $this->ensureDirectoryExists(storage_path('framework/smarty/compile'));
            $this->ensureDirectoryExists(storage_path('framework/smarty/cache'));
            $this->ensureDirectoryExists(resource_path('views/smarty'));
            
            // Register Laravel helper functions
            SmartyHelpers::registerAssetFunctions($smarty);
            
            // Assign global variables
            $smarty->assign('app_name', config('app.name'));
            $smarty->assign('app_url', config('app.url'));
            
            return $smarty;
        });
    }
    
    private function ensureDirectoryExists($path)
    {
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }
    }
}