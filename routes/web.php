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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/ip', 'DuktekController@rekamip')->name('ip');
Route::post('/ipstore', 'DuktekController@storeip')->name('storeip');
Route::post('/ipupdate/{dataip}', 'DuktekController@updateip')->name('updateip');