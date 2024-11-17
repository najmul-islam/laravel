<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'FrontController@index')->name('home');
    Route::get('/contact', 'FrontController@contact')->name('contact');
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('/create', 'FrontController@contact');
    Route::get('/lists', 'FrontController@contact');
    Route::get('/dashboard', 'FrontController@contact');
    Route::get('/users/1', 'FrontController@contact');
});