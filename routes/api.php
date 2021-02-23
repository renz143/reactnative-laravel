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

// Persons API
Route::get('/persons', 'PersonController@index');
Route::get('/persons/{person}', 'PersonController@show');
Route::post('/persons', 'PersonController@store');
Route::put('/persons/{person}', 'PersonController@update');
Route::delete('/persons/{person}', 'PersonController@destroy');
