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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar', 'PagesController@daftar');
Route::get('/login', 'PagesController@login');
Route::post('/kader/store', 'KaderController@store');
Route::post('/kader/login', 'KaderController@login');

Route::get('/kader/daftar_ortu', 'OrtuController@daftarOrtu');
Route::post('/kader/daftar_ortu/store', 'OrtuController@storeOrtu');
Route::get('/kader/daftar_anak/{id}', 'OrtuController@daftarAnak');

Route::get('/kader', 'KaderController@index');
Route::get('/kader/periksa', 'KaderController@periksa');
Route::get('/kader/hasil', 'KaderController@hasil');
Route::get('/kader/data', 'KaderController@data');
Route::get('/kader/admin', 'KaderController@admin');

