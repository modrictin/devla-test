<?php

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



Route::group(['middleware' => ['auth:sanctum','abilities:admin'],'name' => 'admin.'],function (){
    #We can use resource if we want, we can also add ->except()
    Route::post('/product',[\App\Http\Controllers\ProductsController::class,'store'])->name('add-product');

});

Route::group(['middleware' => ['auth:sanctum']],function (){

});
