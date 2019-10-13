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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Them sua xoa san pham
Route::get('/add_product','ProductController@create')->name('add_product');
Route::post('/add_product','ProductController@store')->name('add_product');
Route::get('/list_product','ProductController@index')->name('list_product');
Route::get('/home_product','ProductController@home')->name('home_product');