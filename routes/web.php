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

Route::resource('todo','HomeController');

// Route::post('todo', 'HomeController@store');

// Route::get('todo', 'HomeController@index');

// Route::get('todo/create', 'HomeController@create');
