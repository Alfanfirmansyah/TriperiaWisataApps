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


Route::resource('/','FrontController');

Route::get('frontwisata','FrontController@wisata');
Route::get('detail/wisata/{id}','FrontController@show');
Route::get('destination/wisata/{id}','FrontController@destination');
Route::get('detail/event/{id}','FrontController@event');
Route::get('/menu/event','FrontController@eventmenu');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');

Route::resource('dashboard','DashboardController');
Route::resource('manageuser','ManageUserController');
Route::resource('kategori','KategoriWisataController');

Route::resource('wisata','ManageWisataController');
Route::post('insert/wisata','ManageWisataController@store');
Route::get('destroywisata/{id}','ManageWisataController@destroy');
Route::get('editdata/wisata/{id}','ManageWisataController@edit');
Route::post('update/wisata','ManageWisataController@update');

Route::get('destroykategori/{id}','KategoriWisataController@destroy');
Route::post('insert/kategori','KategoriWisataController@store');
Route::get('editdata/kategori/{id}','KategoriWisataController@edit');
Route::post('update/kategori','KategoriWisataController@update');

Route::get('destroy/{id}','ManageUserController@destroy');
Route::post('insert/user','ManageUserController@store');

Route::resource('galeri','GaleriController');
Route::post('insert/galeri','GaleriController@store');
Route::get('destroygaleri/{id}','GaleriController@destroy');
Route::get('editdata/galeri/{id}','GaleriController@edit');
Route::post('update/galeri','GaleriController@update');

Route::resource('event','EventController');
Route::post('insert/event','EventController@store');
Route::get('destroyevent/{id}','EventController@destroy');
Route::get('editdata/event/{id}','EventController@edit');
Route::post('update/event','EventController@update');
