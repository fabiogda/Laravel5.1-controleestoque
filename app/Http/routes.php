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

Route::resource('users','UsersController');
Route::resource('products','ProductsController');
Route::resource('entries','EntriesController');
Route::resource('entrielist','EntriesController@entrielist');
Route::resource('outputs','OutputsController');
Route::resource('categories','CategoriesController');


Route::get('logout','LogController@logout');
Route::resource('log','LogController');
