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
    Route::get('/logout', 'Auth\\LoginController@logout')->name('auth.logout');
});

Route::group(['prefix' => 'news'], function() {
    Route::get('/', 'NewsController@index')->name('news.index');
});
Route::group(['prefix' => 'faq'], function() {
    Route::get('/', 'FaqController@index')->name('faq.index');
});
Route::group(['prefix' => 'contact'], function() {
    Route::get('/', 'ContactController@index')->name('contact.index');
});

Route::group(['prefix' => 'profile', 'middleware' => 'auth'], function() {
    Route::get('/', 'ProfileController@index')->name('profile.index');
    Route::get('/favorite', 'ProfileController@favorite')->name('profile.favorite');
});

Route::group(['prefix' => 'ranking'], function () {
    Route::get('/', 'RankController@index')->name('ranking.index');
});

Route::group(['prefix' => 'store'], function () {
    Route::get('/', 'StoreController@index')->name('store.index');
});

Route::group(['prefix' => 'admin', 'middleware' => 'check.admin', 'namespace' => 'Admin'], function() {
    Route::get('/', 'AdminController@index');
});
