<?php

namespace App\Providers;

use App\Services\Player_service;
use Illuminate\Support\ServiceProvider;

class Player_ServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Player_service::class, function () {
            return new Player_service();
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
