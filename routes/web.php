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

Route::resource('/peliculas', 'PeliculasController');

Route::get('/lista', function () {
    return view('welcome');
});
Route::get('/peli','PeliculasController@lista');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


