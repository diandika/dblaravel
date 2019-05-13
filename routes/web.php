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

Route::get('add','StageGirlController@create');
Route::post('add','StageGirlController@store');
Route::get('stagegirl','StageGirlController@index');
Route::get('edit/{id}','StageGirlController@edit');
Route::post('edit/{id}','StageGirlController@update');
Route::delete('{id}','StageGirlController@destroy');
Route::post('select','StageGirlController@select');
