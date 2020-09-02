<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MoviesController@index')->name('movies.index');
Route::get('/Tv/{id}', 'MoviesController@show')->name('movies.show');
Route::get('/list', 'MoviesController@list')->name('movies.list');


// Route::view('/show', 'show');

