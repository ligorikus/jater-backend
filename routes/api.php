<?php

use Illuminate\Http\Request;

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

Route::post('register','Auth\RegisterController@create');

Route::group([
    'prefix' => 'auth'
], function () {

    Route::post('signin', 'AuthController@login');
    Route::post('signout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
});

Route::get('products', 'ProductController@index');
Route::get('products/{product}', 'ProductController@show');
Route::get('categories', 'CategoryController@index');

Route::group(['middleware' => 'jwt.auth',], function () {
    Route::group(['namespace' => ''], function () {
        Route::post('products', 'ProductController@store');
        Route::put('products/{product}', 'ProductController@update');
        Route::delete('products/{product}', 'ProductController@delete');
    });

    Route::get('me', 'AuthController@me');
});
