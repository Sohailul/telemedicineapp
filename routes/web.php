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
    return view('auth.login');
});

Route::get('my-files', function () {
    return view('admin.pages.my-files');  
})->name('my-files');

Route::get('chat', function () {
    return view('admin.pages.chat');  
})->name('chat');

Route::get('video-call', function () {
    return view('admin.pages.video-call');  
})->name('video-call');

Route::get('my-account', function () {
    return view('admin.pages.my-account');  
})->name('my-account');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
