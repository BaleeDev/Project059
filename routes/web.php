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

// // CRUD
// Route::get('/ujian', 'UjianController@index');
// Route::get('/ujian/{ujian}/edit', 'UjianController@edit');
// Route::patch('/ujian/{ujian}', 'UjianController@update');
// Route::post('/ujian', 'UjianController@store');
// Route::delete('/ujian/{ujian}', 'UjianController@destroy');
// Route::get('/ujian/add', 'UjianController@create');


// uts
Route::get('/mid', 'UtsController@index');
Route::get('/mid/{mid}/edit', 'UtsController@edit');
Route::post('/mid', 'UtsController@store');
Route::delete('/mid/{midsemester}', 'UtsController@destroy');
Route::get('/mid/add', 'UtsController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
