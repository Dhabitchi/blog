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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tpq', 'TPQController@index')->name('TPQ');

Route::get('/tpq/create', 'TPQController@create')->name('create');
Route::post('/tpq', 'TPQController@store')->name('dhabit');
Route::get('/tpq/delete/{tpq}', 'TPQController@destroy')->name('delete');
Route::get('/tpq/{tpq}/edit', 'TPQController@edit')->name('edit');
Route::patch('/tpq/{tpq}', 'TPQController@update')->name('update');

Route::get('/tpq/santri', 'SantriController@index')->name('santri');
Route::get('/tpq/santri/create', 'SantriController@create')->name('create.santri');
Route::post('/tpq/santri/store', 'SantriController@store')->name('store');
Route::get('/tpq/santri/delete/{data}', 'SantriController@destroy')->name('delete.santri');
Route::get('/tpq/santri/edit/{santri}', 'SantriController@edit')->name('edit.santri');
Route::patch('/tpq/santri/update/{santri}', 'SantriController@update')->name('update.santri');

Route::get('/tpq/kelas', 'KelasController@index')->name('kelas');
Route::get('/tpq/kelas/create', 'KelasController@create')->name('create.kelas');
Route::post('/tpq/kelas/store', 'KelasController@store')->name('store.kelas');
Route::get('/tpq/kelas/delete/{kelas}', 'KelasController@destroy')->name('delete.kelas');
Route::get('/tpq/kelas/edit/{kelas}', 'KelasController@edit')->name('edit.kelas');
Route::patch('/tpq/kelas/update/{kelas}', 'KelasController@update')->name('update.kelas');

Route::get('/home/ustads', 'ustadController@index')->name('ustad');
Route::get('home/ustads/tambah', 'ustadController@create')->name('create.ustad');
Route::post('/home/ustads/store', 'ustadController@store')->name('store.ustad');

Route::get('/home/user', 'MbohController@index')->name('user');



