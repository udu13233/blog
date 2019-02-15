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






Route::get('/', 'PageController@index')->name('index');

Auth::routes();

Route::get('page/{slug}', 'PageController@page')->name('page');

Route::get('/home', 'HomeController@index')->name('home');
