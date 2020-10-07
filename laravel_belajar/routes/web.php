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
Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});
Route::get('blog', function () {
	return view('blog');
});
Route::get('dosen','DosenController@index');
Route::get('/formulir','PegawaiController@formulir');
Route::post('/formulir/proses','PegawaiController@proses');

//blog
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

//route CRUD
Route::get('/pegawai','PegawaiController@index');

Route::get('/pengguna', 'PenggunaController@index');
Route::get('/article', 'WebController@index');
Route::get('/anggota', 'DikiController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/enkripsi','IlhamController@enkripsi');
Route::get('/hash','IlhamController@hash');

//upload file
Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
//hapus file
Route::get('/upload/hapus/{id}', 'UploadController@hapus');

//session
Route::get('/session/tampil','TesController@tampilkanSession');
Route::get('/session/buat','TesController@buatSession');
Route::get('/session/hapus','TesController@hapusSession');

//Session Flash
Route::get('/pesan','NotifController@index');
Route::get('/pesan/sukses','NotifController@sukses');
Route::get('/pesan/peringatan','NotifController@peringatan');
Route::get('/pesan/gagal','NotifController@gagal');

// error handling
Route::get('/malasngoding','MalasngodingController@index');