<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * 
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        
    ];

    /**
     * 
     */
    public function boot(): void
    {
        $this->registerPolicies();

        
    }
}
