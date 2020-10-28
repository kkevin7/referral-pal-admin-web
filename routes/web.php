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
    return redirect('/index');
});

Auth::routes();

Route::prefix('front')->group(function () {
    Route::get('/home', 'Front\FrontController@index')->name("front.home");
});

Route::prefix('auth')->group(function () {
    // Auth Actions
    Route::get('/login', 'Front\FrontController@login')->name("front.login");
    Route::get('/register', 'Front\FrontController@register')->name("front.register");
    Route::get('/termOfService', 'Front\FrontController@termOfService')->name("front.termOfService");
});

Route::get('pages-login', 'VeltrixController@index');
Route::get('pages-login-2', 'VeltrixController@index');
Route::get('pages-register', 'VeltrixController@index');
Route::get('pages-register-2', 'VeltrixController@index');
Route::get('pages-recoverpw', 'VeltrixController@index');
Route::get('pages-recoverpw-2', 'VeltrixController@index');
Route::get('pages-lock-screen', 'VeltrixController@index');
Route::get('pages-lock-screen-2', 'VeltrixController@index');
Route::get('pages-404', 'VeltrixController@index');
Route::get('pages-500', 'VeltrixController@index');
Route::get('pages-maintenance', 'VeltrixController@index');
Route::get('pages-comingsoon', 'VeltrixController@index');


Route::get('{any}', 'HomeController@index');
