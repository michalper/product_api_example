<?php

namespace App\Providers;

use App\Service\Product\ProductRepository;
use App\Service\Product\ProductRepositoryInterface;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
            ProductRepositoryInterface::class,
            ProductRepository::class
        );

        $this->app->bind(
            ResponseFactory::class,
            \Illuminate\Routing\ResponseFactory::class
        );
    }
}
