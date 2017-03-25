<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('pengguna/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

Route::get('Dosen/awal','DosenController@awal');
Route::get('Dosen/tambah', 'DosenController@tambah');

Route::get('Mahasiswa/awal','MahasiswaController@awal');
Route::get('Mahasiswa/tambah', 'MahasiswaController@tambah');

Route::get('Matakuliah','MatakuliahController@awal');
Route::get('Matakuliah/tambah', 'MatakuliahController@tambah');
Route::get('Matakuliah/{matakuliah}', 'MatakuliahController@lihat');
Route::post('Matakuliah/simpan', 'MatakuliahController@simpan');
Route::get('Matakuliah/edit/{matakuliah}', 'MatakuliahController@edit');
Route::post('Matakuliah/edit/{matakuliah}', 'MatakuliahController@update');
Route::get('Matakuliah/hapus/{matakuliah}', 'MatakuliahController@hapus');

Route::get('Dosen_matakuliah/awal','Dosen_matakuliahController@awal');
Route::get('Dosen_matakuliah/tambah', 'Dosen_matakuliahController@tambah');


Route::get('Ruangan','RuanganController@awal');
Route::get('Ruangan/tambah', 'RuanganController@tambah');
Route::post('Ruangan/simpan', 'RuanganController@simpan');
Route::get('Ruangan/{ruangan}','RuanganController@lihat');
Route::get('Ruangan/edit/{ruangan}', 'RuanganController@edit');
Route::post('Ruangan/edit/{ruangan}', 'RuanganController@update');
Route::get('Ruangan/hapus/{ruangan}', 'RuanganController@hapus');

Route::get('jadwal_matakuliah/awal','Jadwal_matakuliahController@awal');
Route::get('jadwal_matakuliah/tambah', 'Jadwal_matakuliahController@tambah');