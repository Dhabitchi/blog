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

Route::get('/tpq/create', 'TPQController@create')->middleware('auth','admin')->name('create');
Route::post('/tpq', 'TPQController@store')->middleware('auth','admin')->name('dhabit');
Route::get('/tpq/delete/{tpq}', 'TPQController@destroy')->middleware('auth','admin')->name('delete');
Route::get('/tpq/{tpq}/edit', 'TPQController@edit')->middleware('auth','admin')->name('edit');
Route::patch('/tpq/{tpq}', 'TPQController@update')->middleware('auth','admin')->name('update');

Route::get('/tpq/santri', 'SantriController@index')->name('santri');
Route::get('/tpq/santri/create', 'SantriController@create')->middleware('auth','admin')->name('create.santri');
Route::post('/tpq/santri/store', 'SantriController@store')->middleware('auth','admin')->name('store');
Route::get('/tpq/santri/delete/{data}', 'SantriController@destroy')->middleware('auth','admin')->name('delete.santri');
Route::get('/tpq/santri/edit/{santri}', 'SantriController@edit')->middleware('auth','admin')->name('edit.santri');
Route::patch('/tpq/santri/update/{santri}', 'SantriController@update')->middleware('auth','admin')->name('update.santri');

Route::get('/tpq/kelas', 'KelasController@index')->name('kelas');
Route::get('/tpq/kelas/create', 'KelasController@create')->middleware('auth','admin')->name('create.kelas');
Route::post('/tpq/kelas/store', 'KelasController@store')->middleware('auth','admin')->name('store.kelas');
Route::get('/tpq/kelas/delete/{kelas}', 'KelasController@destroy')->middleware('auth','admin')->name('delete.kelas');
Route::get('/tpq/kelas/edit/{kelas}', 'KelasController@edit')->middleware('auth','admin')->name('edit.kelas');
Route::patch('/tpq/kelas/update/{kelas}', 'KelasController@update')->middleware('auth','admin')->name('update.kelas');

Route::get('/home/ustadz', 'ustadController@index')->name('ustad');
Route::get('home/ustadz/tambah', 'ustadController@create')->middleware('auth','admin')->name('create.ustad');
Route::post('/home/ustadz/store', 'ustadController@store')->middleware('auth','admin')->name('store.ustad');
Route::get('/home/ustadz/delete/{data}', 'ustadController@destroy')->middleware('auth','admin')->name('delete.ustad');
Route::get('/home/ustadz/edit/{data}', 'ustadController@edit')->middleware('auth','admin')->name('edit.ustad');
Route::patch('/home/ustadz/update/{data}', 'ustadController@update')->middleware('auth','admin')->name('update.ustad');


Route::get('/home/user', 'MbohController@index')->middleware('auth','admin')->name('user');



