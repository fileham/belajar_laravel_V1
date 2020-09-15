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
//route CRUD
Route::get('/pegawai','PegawaiController@index');

Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');

Route::get('/input','MalasngodingController@input');
Route::post('/proses','MalasngodingController@proses');

Route::get('/employer','EmployerController@index');
Route::get('/employer/tambah','EmployerController@tambah');
Route::post('/employer/store','EmployerController@store');
Route::get('/employer/edit/{id}', 'EmployerController@edit');
Route::put('/employer/update/{id}', 'EmployerController@update');
Route::get('/employer/hapus/{id}', 'EmployerController@delete');

Route::get('/guru', 'GuruController@index');
Route::get('/guru/hapus/{id}', 'GuruController@hapus');
Route::get('/guru/trash', 'GuruController@trash');
Route::get('/guru/kembalikan/{id}', 'GuruController@kembalikan');
Route::get('/guru/kembalikan_semua', 'GuruController@kembalikan_semua');
Route::get('/guru/hapus_permanen/{id}', 'GuruController@hapus_permanen');
Route::get('/guru/hapus_permanen_semua', 'GuruController@hapus_permanen_semua');
