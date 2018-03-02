<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');
// Product routes
// Routus su kintamaisiais dėti į apačią/žemiau
Route::post('/products', 'ProductController@store')->name('products.store')->middleware('auth');
Route::get('/products/create', 'ProductController@create')->name('products.create')->middleware('auth');
Route::get('/products/{id}/edit', 'ProductController@edit')->name('products.edit')->middleware('auth');
Route::get('/products/{id}', 'ProductController@show')->name('products.show');
Route::put('/products/{id}', 'ProductController@update')->name('products.update')->middleware('auth');
Route::delete('/products/{id}', 'ProductController@destroy')->name('products.destroy')->middleware('auth');

// Sukuria 7 routus, kuriuos galime panaudoti kuriant CRUD'ą
Route::resource('categories', 'CategoryController');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
