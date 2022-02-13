<?php

namespace App\Providers;

use App\Services\Shop;
use Illuminate\Support\ServiceProvider;

class ShopServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('Shop',function ($app){
            return new Shop();
        });
    }

    public function boot()
    {
        //
    }
}
