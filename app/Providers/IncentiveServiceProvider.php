<?php

namespace App\Providers;

use App\Services\IncentiveService;
use Illuminate\Support\ServiceProvider;

class IncentiveServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('incentives', IncentiveService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
