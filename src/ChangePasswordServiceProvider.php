<?php

namespace Mao\ChangePassword;

use Illuminate\Support\ServiceProvider;

class ChangePasswordServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'ChangePassword');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Mao\ChangePassword\Controllers\ChangePasswordController');
    }
}