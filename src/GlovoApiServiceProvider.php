<?php

namespace Konectdigital\GlovoApi;

use Illuminate\Support\ServiceProvider;

class GlovoApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('glovo-api.php'),
            ], 'config');

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'glovo-api');

        // Register the main class to use with the facade
        $this->app->singleton('glovo-api', function () {
            return new GlovoApi;
        });
    }
}
