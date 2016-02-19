<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('admin','FrontController@admin');

Route::resource('usuario','UsuarioController');
Route::resource('product','ProductController');
Route::resource('entries','EntriesController');


Route::get('logout','LogController@logout');
Route::resource('log','LogController');
