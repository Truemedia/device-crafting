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

Route::group(['namespace' => 'Wadepenistone\Devicecrafting\Http\Controllers'], function() {
    Route::get('/my-account', 'InitialController@index');
});
