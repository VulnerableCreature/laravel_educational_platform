<?php

namespace App\Providers;

use App\Service\User\UserService;
use App\Contracts\User\UserContract;
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
        $this->app->bind(UserContract::class, UserService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
