<?php

namespace devrabbi\Crudpackage;

use Illuminate\Support\ServiceProvider;

class CrudpackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Load views from the package
        $this->loadViewsFrom(__DIR__.'/Views', 'crudpackage');

        // Load routes
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publish views
        $this->publishes([
            __DIR__.'/Views' => resource_path('views/crudpackage'),
        ], 'views');

        // Publish config
        $this->publishes([
            __DIR__.'/../config/crudpackage.php' => config_path('crudpackage.php'),
        ], 'config');
    }
}
