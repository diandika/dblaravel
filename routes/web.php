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

Route::get('hero', 'SelectHero@all');
Route::post('select', 'QueryController@start');

Route::get('select', 'QueryRoute@viewSelect');
Route::get('update', 'QueryRoute@viewUpdate');
Route::get('delete', 'QueryRoute@viewDelete');
