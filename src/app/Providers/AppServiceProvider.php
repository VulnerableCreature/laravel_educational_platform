<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service\Auth\AuthorizationService;
use App\Contracts\Auth\AuthorizationContract;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AuthorizationContract::class, AuthorizationService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
