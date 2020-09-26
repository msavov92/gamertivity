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
})->name('home');

Route::group(['prefix' => 'auth'], function() {
    Route::get('/login', 'Auth\\LoginController@index')->name('auth.login');
    Route::post('/authorize', 'Auth\\LoginController@authorizeUser')->name('auth.login.authorize');
    Route::get('/register', 'Auth\\RegisterController@index')->name('auth.register');
    Route::post('/register', 'Auth\\RegisterController@createAccount')->name('auth.register.store');
});
