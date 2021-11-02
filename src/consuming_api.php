<?php

namespace Bonevian\Consume_Api;

use Illuminate\Support\ServiceProvider;

class consuming_api extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // register our controller
        $this->app->make('Bonevian\Consume_Api\Http\Controllers\api_consume_controller');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        
        $this->loadViewsFrom(__DIR__.'/views', 'consume_api');

        $this->publishes([
            __DIR__ . '/views' => resorces_path('views/vendor/api')
        ]);
    }
}
