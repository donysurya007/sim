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
Route::get('/logins', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');

Route::group(['middleware' => 'auth'], function () {
    //mahasiswa//
Route::get('/mahasiswa', 'MahasiswaController@index');
Route::post('/mahasiswa/create', 'MahasiswaController@create');
Route::get('/mahasiswa/{id}/edit', 'MahasiswaController@edit');
Route::post('/mahasiswa/{id}/update', 'MahasiswaController@update');
Route::get('/mahasiswa/{id}/delete', 'MahasiswaController@delete');

            //admin//
Route::get('/dashboardadmin','AdminController@dashboard');
Route::get('/boardmahasiswa', 'AdminController@mahasiswa');
Route::post('/boardmahasiswa/create', 'AdminController@createmhs');
Route::get('/boardmahasiswa/{id}/editmhs', 'AdminController@editmhs');
Route::post('/boardmahasiswa/{id}/updatemhs', 'AdminController@updatemhs');
Route::get('/boardmahasiswa/{id}/deletemhs', 'AdminController@deletemhs');
Route::get('/dashboard', 'DashboardController@index');


Route::get('/logout', 'AuthController@logout');
});
