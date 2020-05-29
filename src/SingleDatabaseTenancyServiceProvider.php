<?php

namespace IAmKevinMcKee\SingleDatabaseTenancy;

use IAmKevinMcKee\SingleDatabaseTenancy\Commands\PublishStubs;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class SingleDatabaseTenancyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'single-database-tenancy');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'single-database-tenancy');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('single-database-tenancy.php'),
            ], 'config');

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/single-database-tenancy'),
            ], 'assets');*/

            // Registering package commands.
             $this->commands([
                 PublishStubs::class,
             ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
//        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'single-database-tenancy');

        // Register the main class to use with the facade
        $this->app->singleton('single-database-tenancy', function () {
            return new SingleDatabaseTenancy;
        });

        Event::subscribe(SetTenantInSessionSubscriber::class);
    }
}
