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


Route::resource('students','StudentController');
Route::resource('rayons','RayonController');
Route::resource('teachers','TeacherController');
Route::resource('kejadians','KejadianController');
Route::resource('kasuses','KasusController');

Auth::routes();


Route::get('native/login','AuthNativeController@index');
Route::get('export-pdf','KejadianController@exportPDF');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/laporans', 'LaporanController@index')->name('laporans');
Route::get('/laporans/cari', 'LaporanController@cari');
Route::get('/laporans/print', 'LaporanController@print')->name('laporans.print');
Route::get('/logout','auth\LoginController@logout');
