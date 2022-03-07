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

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function(){
            
        Route::get('/','DashboardController@index')
            ->name('dashboard');
        Route::get('/petugas','PetugasController@index')
            ->name('Petugas');
        Route::get('/anggota','anggotaController@index')
            ->name('Anggota');
        Route::get('/buku','bukuController@index')
            ->name('Buku');
});

