<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\Sample\SampleService;
use App\Services\Sample\SampleServiceInterface;

class SampleServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            SampleServiceInterface::class,
            SampleService::class
        );
    }
}
