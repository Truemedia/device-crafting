<?php

/*
|--------------------------------------------------------------------------
| Device crafting package routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

 Route::group(['middleware' => 'web'], function() {
    Route::group(['namespace' => 'Wadepenistone\Devicecrafting\Http\Controllers'], function() {
        Route::group(['middleware' => 'auth'], function() {
            Route::get('/my-account', 'AccountController@index')->name('my_account');
        });
    });
});
