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
    // Custom structuring
    Route::group(['namespace' => 'Wadepenistone\Devicecrafting\Http\Controllers'], function() {
        Route::get('/', 'LeaderboardController@index')->name('leaderboard');
        Route::group(['middleware' => 'auth'], function() {
            Route::get('/my-account', 'AccountController@index')->name('my_account');
            Route::get('/fight', 'BattleController@choose')->name('fight.choose');
        });
    });
    // Resources
    Route::group(['namespace' => 'Wadepenistone\Devicecrafting\Http\Controllers\Resources', 'middleware' => 'auth'], function() {
        // Robots
        Route::resource('robot', 'RobotController', ['only' => [
            'index', 'store', 'update', 'destroy'
        ]]);
        Route::post('robot/import', 'RobotController@import')->name('robot.import');
    });
});
