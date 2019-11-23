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
Route::get('/','ParticipantsController@showWelcome');

Route::get('/welcome','ParticipantsController@showWinners');

Route::get('/scan', function () {
    return view('scan');
});
 
Route::post('/scan', 'ParticipantsController@store');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/settings', 'SettingsController@index')->middleware('auth');

Route::post('/settings', 'SettingsController@store')->middleware('auth');

Route::resource('participants','ParticipantsController')->middleware('auth');

Route::resource('settings','SettingsController')->middleware('auth');

// Route::get('/participants', 'ParticipantsController@index');

// Route::get('/participants/{participant}','ParticipantsController@show');


// Route::get('/participants/{participant}/edit','ParticipantsController@edit');

// route::patch('/participants/{participant}','ParticipantsController@update');

// route::delete('/participants/{participant}','ParticipantsController@destroy');

Auth::routes();