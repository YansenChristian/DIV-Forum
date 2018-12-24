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

Auth::routes();

Route::get('/home', 'ForumController@index')->name('home');

Route::get('/inbox', 'MessageController@show');
Route::delete('/inbox/{id}', 'MessageController@destroy');

Route::get('/forum/create', 'ForumController@create');
