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


Route::get('/home', function () {
    return view('home');
});

Route::get('/master', function () {
    return view('front.master');
});

Route::resource('test','CRUDcontroller');


Route::get('users/show', 'usercontroller@show')->name('show');

Route::get('users/delete/{id}','usercontroller@delete');

Route::resource('posts','PostController');