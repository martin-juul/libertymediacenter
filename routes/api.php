<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/movies', 'MovieController@index');
Route::get('/movies/search', 'MovieSearchController@index');
Route::get('/movies/{slug}', 'MovieController@show');


Route::get('/stream/{type}/{slug}', 'StreamController@show')->name('player');
