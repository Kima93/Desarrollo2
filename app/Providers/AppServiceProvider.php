<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UFService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * 
     *
     * @return void
     */
    public function register()
    {
        
        $this->app->singleton(UFService::class, function ($app) {
            
            return new UFService();
        });
    }

    /**
     * 
     *
     * @return void
     */
    public function boot()
    {
        
    }
}

