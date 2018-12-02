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
    return view('auth/login');
});

Route::get('/dashboard','PagesController@home');
Route::get('/icons','PagesController@icons');
Route::get('/maps','PagesController@maps');
Route::get('/notifications','PagesController@notifications');
Route::get('/table','PagesController@table');
Route::get('/typography','PagesController@typography');
Route::get('/profile','PagesController@user');

Route::resource('/dashboard','PostsController');
Route::resource('/profile','UserController');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
