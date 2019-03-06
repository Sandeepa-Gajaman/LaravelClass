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

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'UsersController@index')->name('user.index');
Route::get('/add-user', 'UsersController@create')->name('user.create');
Route::get('/add-data', 'FormController@create')->name('form.create');

Route::post('/store-user', 'UsersController@store')->name('user.store');
Route::post('/form-submit', 'FormController@store')->name('form.store');
