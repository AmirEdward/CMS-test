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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', 'AdminController@index')->name('index')->middleware('isAdmin');
    Route::get('login', 'AdminController@showLoginForm')->name('login')->middleware('guest');
    Route::resource('news', 'NewsController')->middleware('isAdmin');
    Route::resource('categories', 'CategoryController')->middleware('isAdmin');
    Route::post('login', 'AdminController@login');
    Route::post('logout', 'AdminController@logout')->name('logout');
});
