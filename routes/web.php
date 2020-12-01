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

/*Route::resource('doctors','DoctorController');*/

Route::resource('appointment', 'AppointmentController');
Route::resource('doctors', 'DoctorController'); 
Route::resource('my-files', 'MyFileController'); 

Route::resource('chat', 'ChatController'); 
Route::resource('video-call', 'VideoCallController'); 
Route::resource('my-account', 'MyAccountController'); 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
