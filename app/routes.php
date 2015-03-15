<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function () {
    return View::make('index');
});

Route::group(['prefix' => 'admin'], function () {

    //login controller
    Route::get('/', 'LoginController@index');
    Route::post('/', 'LoginController@login');
    Route::get('/logout', 'LoginController@logout');
    Route::get('/admin_settings', 'LoginController@changePassword');
    Route::post('/admin_settings', 'LoginController@updateUserPassword');

    //Dashboard controller
    Route::get('/dashboard', 'DashBoardController@index');

    Route::get('/properties', 'PropertiesController@index');
    Route::get('/add_property', 'PropertiesController@insert');
});
