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


Route::get('main', function () {
    return view('main');
});

Route::get('user_registration', function () {
    return view('user_registration');
});

Route::get('/', function () {
    return view('welcome');
});
