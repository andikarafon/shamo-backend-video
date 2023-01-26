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



Route::get('products', 'App\Http\Controllers\API\ProductController@all');
Route::get('categories', 'App\Http\Controllers\API\ProductCategoryController@all');


Route::post('register', 'App\Http\Controllers\API\UserController@register');
Route::post('login', 'App\Http\Controllers\API\UserController@login');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', 'App\Http\Controllers\API\UserController@fetch');
    Route::post('user', 'App\Http\Controllers\API\UserController@updateProfile');
    Route::post('logout', 'App\Http\Controllers\API\UserController@logout');

    Route::get('transaction', 'app\Http\Controllers\API\TransactionController@all');


});



