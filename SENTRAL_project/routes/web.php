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
//Route::get('/login', 'AuthController@login');
Route::post('/postlogin', 'AuthController@postlogin');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/anak', 'KaderController@showAnak');
Route::get('/daftar_ortu', 'OrtuController@daftarOrtu');
Route::post('/daftar_ortu/store', 'OrtuController@storeOrtu');
Route::get('/daftar_anak/{id}', 'OrtuController@daftarAnak');
Route::post('/daftar_anak/{id}/store', 'OrtuController@storeAnak');
Route::post('/cek/{id}', 'OrtuController@storeAnak');

Route::get('/kader', 'KaderController@admin');
Route::get('/periksa/{id}', 'KaderController@periksa');
Route::get('/hasil', 'KaderController@hasil');
Route::get('/gizi', 'KaderController@dataPeriksa');
Route::get('/admin', 'KaderController@admin');
Route::get('/data', 'KaderController@data');



