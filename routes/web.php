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

Route::get('/show', 'WordController@show')->name('show');
Route::post('/check', 'WordController@check')->name('check');

Route::get('/add', 'WordController@create')->name('word_add');
Route::post('/add', 'WordController@store')->name('store');

