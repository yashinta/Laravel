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

Route::get('/', 'GetController@retrieve');

Route::get('/create', 'GetController@create');
Route::post('/creates', 'PostController@create');

Route::get('/update', 'GetController@update');
Route::post('/update/{id}', 'PostController@update');

Route::get('/destroy/{id}', 'GetController@destroy');