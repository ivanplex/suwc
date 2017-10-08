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

Route::get('/about', function () {
    return view('about');
});

Route::get('/sessions', function () {
    return view('session-list');
});

Route::get('/sessions/1', function () {
    return view('session-detail');
});

Route::get('/sessions/1/register', function () {
    return view('register');
});


