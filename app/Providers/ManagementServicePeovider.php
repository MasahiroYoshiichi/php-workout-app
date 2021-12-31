<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ManagementService;

class ManagementServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ManagementService::class, ManagementService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}