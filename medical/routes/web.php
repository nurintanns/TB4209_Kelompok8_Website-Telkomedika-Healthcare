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

// Route::get('/', function () {
//     return view('home');
// });

// Menampilkan data artitek di halaman utama
Route::get('/', 'HomeController@index');

Auth::routes();

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard')->middleware('auth');
Route::get('/konsultasi', 'HomeController@konsultasi')->name('konsultasi');


Route::get('/dokter', 'DokterController@index')->name('dokter');
Route::get('dokter/add',
            [
                'uses'=>'DokterController@add',
                'as'=>'dokter.add'
            ]);
Route::post('dokter/create',
            [
                'uses'=>'DokterController@create',
                'as'=>'dokter.create'
            ]);


Route::get('/pasien', 'PasienController@index')->name('pasien');


Route::get('/jadwalkonsul', 'JadwalKonsulController@jadwalkonsul')->name('jadwalkonsul');
Route::get('jadwalkonsul/add',
            [
                'uses'=>'JadwalKonsulController@add',
                'as'=>'jadwalkonsul.add'
            ]);
Route::post('jadwalkonsul/create',
            [
                'uses'=>'JadwalKonsulController@create',
                'as'=>'jadwalkonsul.create'
            ]);


//menampilkan data konsultasi pasien (punya pasien)
Route::get('/datakonsultasi', 'KonsultasiController@index')->name('datakonsultasiku');

//menampilkan data pasein di dashboard ??
Route::get('/datakonsultasipasien', 'KonsultasiController@datakonsulpasien');
Route::get('/datakonsultasipasien/{id}/{jadwal_id}/updatestatus','KonsultasiController@updatestatus');
Route::get('/datakonsultasipasien/{id}/edit','KonsultasiController@editresep');
Route::post('/datakonsultasipasien/{id}/update','KonsultasiController@updateresep');

//admin melihat data konsultasi yang sudah selesai untuk menginputkan total pembayaran
Route::get('/seluruhdatakonsul', 'KonsultasiController@seluruhdatakonsul');

//admin input total pembayaran
Route::get('/datakonsultasipasien/{id}/inputtotalpembayaran','KonsultasiController@inputtotalpembayaran');
Route::post('/datakonsultasipasien/{id}/inputtotalpembayaranupdate','KonsultasiController@inputtotalpembayaranupdate');

//pasien input bukti pembayaran
Route::get('/datakonsultasipasien/{id}/inputbuktipembayaran','KonsultasiController@inputbuktipembayaran');
Route::post('/datakonsultasipasien/{id}/inputbuktipembayaranupdate','KonsultasiController@inputbuktipembayaranupdate');

//admin melalukan update status pengiriman
Route::get('/datakonsultasipasien/{id}/updatepengiriman','KonsultasiController@updatepengiriman');

Route::get('/datakonsultasiselesai', 'KonsultasiController@datakonsultasiselesai');


//input data konsultasi
Route::post('/konsultasi/create','KonsultasiController@addkonsultasi');



Route::get('/logout','HomeController@logout');




//artikel master berada di dashboard admin
Route::get('/artikel', 'ArtikelController@index')->middleware('auth');
// route untuk menampilkan form tambah data
Route::get('artikel/add',
            [
                'uses'=>'ArtikelController@add',
                'as'=>'artikel.add'
            ]);
// route untuk memasukkan data artikel kedalam database
Route::post('artikel/create',
            [
                'uses'=>'ArtikelController@create',
                'as'=>'artikel.create'
            ]);
// route untuk update status artikel pending atau publish
Route::get('/artikel/{id}/updatestatus','ArtikelController@updatestatus');
// route untuk update status artikel populer atau tidak
Route::get('/artikel/{id}/updatestatuspopuler','ArtikelController@updatestatuspopuler');
// route untuk menampilkan form edit data artikel
Route::get('/artikel/{id}/edit','ArtikelController@edit');
// route untuk melakukan update data artikel 
Route::post('/artikel/{id}/update','ArtikelController@update');
// route untuk menghapus data artikel
Route::get('/artikel/{id}/delete','ArtikelController@delete');
// detail dari artikel
Route::get('/artikel/{id}/detail','ArtikelController@detail');
//artikel di halaman utama
Route::get('/artikelhome','ArtikelController@artikelhome');





//menampilkan data frofil dokter dan admin
Route::get('/profil/{id}/detailprofil1','DokterController@detail');

//menampilkan data frofil pasien
Route::get('/profil/{id}/detailprofil','PasienController@detail');






