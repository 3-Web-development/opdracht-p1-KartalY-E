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
Route::get('/scan', function () {
    return view('scan');
});
 
Route::get('/home', 'HomeController@index')->name('home');


Route::resource('participants','ParticipantsController');

// Route::get('/participants', 'ParticipantsController@index');

// Route::get('/participants/{participant}','ParticipantsController@show');

Route::post('/scan', 'ParticipantsController@store');

// Route::get('/participants/{participant}/edit','ParticipantsController@edit');

// route::patch('/participants/{participant}','ParticipantsController@update');

// route::delete('/participants/{participant}','ParticipantsController@destroy');


Auth::routes();