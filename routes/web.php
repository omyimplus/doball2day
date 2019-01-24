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

Route::get('/live', function () {
    return view('liveBall');
});

Route::get('/program', function () {
    return view('program');
});


Route::get('/login','UIViewController@ShowLogin');

Route::post('/login-process','UserController@LoginProcess');

Route::get('/admin','AdminUIViewController@ShowAdmin')->name('admin-panel');
