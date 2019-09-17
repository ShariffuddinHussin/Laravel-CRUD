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
Route::get('/register', function () {
  return view('register');
});

Route::get('/mail', function () {
  return view('mail');
});

Route::get('auth', 'authController@create')->name('auth.register');
Route::post('auth', 'authController@create')->name('auth.store');
