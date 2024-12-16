<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CustomInstance; 

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('customKeyName', function ($app){return new CustomInstance();});
    }

    public function boot(): void
    {
        //
    }
}
