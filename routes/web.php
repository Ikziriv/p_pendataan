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
Route::get('/registrasi/rt', 'AuthFrontController@getRtRegister')->name('regis-rt');
Route::get('/registrasi/rw', 'AuthFrontController@getRwRegister')->name('regis-rw');
Route::post('/registrasi/rt/send', 'AuthFrontController@storeRt')->name('send-regis-rt');
Route::post('/registrasi/rw/send', 'AuthFrontController@storeRw')->name('send-regis-rw');
Route::post('/login', 'AuthFrontController@login')->name('front.login');
Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('auth')->group(function(){
Route::get('/dashboard/rt', 'HomeController@index_rt')->name('index.dash.rt');
Route::get('/dashboard/rw', 'HomeController@index_rw')->name('index.dash.rw');
Route::get('/dashboard/admin', 'HomeController@index_admin')->name('index.dash.admin');
	Route::resource('warga', 'WargaController');
	Route::resource('galeri', 'GaleriController');
	Route::resource('kk', 'KartuKeluargaController');
	Route::resource('mutasi', 'MutasiController');
	Route::resource('user', 'UserController');
});
