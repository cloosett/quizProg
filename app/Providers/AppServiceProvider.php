<?php

namespace App\Providers;

use App\Repositories\UserAuthSocialRepository;
use App\Services\SocialAuthService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(SocialAuthService::class);
        $this->app->singleton(UserAuthSocialRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
