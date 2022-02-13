<?php

namespace App\Facades;

class ShopFacade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Shop';
    }
}
