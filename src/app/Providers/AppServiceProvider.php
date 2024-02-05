<?php

namespace App\Providers;

use App\Service\User\UserService;
use App\Contracts\User\UserContract;
use Illuminate\Support\ServiceProvider;
use App\Service\Register\RegisterService;
use App\Service\Auth\AuthorizationService;
use App\Contracts\Register\RegisterContract;
use App\Contracts\Auth\AuthorizationContract;
use TallStackUi\Facades\TallStackUi;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AuthorizationContract::class, AuthorizationService::class);
        $this->app->singleton(UserContract::class, UserService::class);
        $this->app->bind(RegisterContract::class, RegisterService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        TallStackUi::personalize()
            ->tab()
            ->block('wrapper', 'w-full bg-transparent');
    }
}
