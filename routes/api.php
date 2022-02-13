<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'index']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('products', [\App\Http\Controllers\ProductsController::class, 'index'])->name('get-products');
    Route::get('product/{product}', [\App\Http\Controllers\ProductsController::class, 'single'])->name('get-product');

    Route::controller(\App\Http\Controllers\OrdersController::class)->prefix('/order/')
        ->group(function () {
            Route::post('add-product', 'addProduct')->name('add-product-to-cart');
            Route::post('checkout', 'checkout')->name('checkout');
            Route::post('complete', 'complete')->name('complete');
            Route::get('all', 'orders')->name('all-orders');
        });

    Route::group(['middleware' => ['abilities:' . User::TYPE_SHOP_ADMIN], 'name' => 'admin.'], function () {
        Route::post('/products', [\App\Http\Controllers\ProductsController::class, 'store'])->name('add-product');
    });

});
