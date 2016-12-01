<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'ShopsController@index')->name('shopIndex');


//Product Route//
Route::get('productList', 'ProductsController@index')->name('productList');
Route::get('productCreate', 'ProductsController@create')->name('productCreate');
Route::post('productPost', 'ProductsController@store')->name('productPost');
Route::resource('products', 'ProductsController');
//End Product Route//