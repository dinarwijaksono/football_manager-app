<?php

namespace App\Providers;

use App\Services\User_service;
use Illuminate\Support\ServiceProvider;

class User_serviceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(User_service::class, function ($app) {
            return new User_service();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
