<?php

namespace App\Providers;

use App\Contracts\Course\Material\MaterialContract;
use App\Contracts\File\UploadContract;
use App\Service\Course\Material\MaterialService;
use App\Service\Upload\UploadService;
use App\Service\User\UserService;
use App\Contracts\User\UserContract;
use TallStackUi\Facades\TallStackUi;
use App\Service\Course\CourseService;
use Illuminate\Support\ServiceProvider;
use App\Contracts\Course\CourseContract;
use App\Service\Register\RegisterService;
use App\Service\Auth\AuthorizationService;
use App\Contracts\Register\RegisterContract;
use App\Contracts\Auth\AuthorizationContract;

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
        $this->app->bind(CourseContract::class, CourseService::class);
        $this->app->bind(MaterialContract::class, MaterialService::class);
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
