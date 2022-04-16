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



Route::get('/', 'TaskController@index')->name('index');
Route::post('/task', 'TaskController@create')->name('create');
Route::delete('/task/{taskId}', 'TaskController@delete')->name('delete');
