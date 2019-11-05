<?php

Route::resource('/peliculas', 'PeliculasController');


//Accede a la lista de peliculas
Route::get('/lista', function () {
    return view('welcome');
});
//Borrar peliculas


Route::get('/peli','PeliculasController@lista');
Route::delete('/borrar/{_id}','PeliculasController@borrar');
Route::post('/agregar','PeliculasController@agregar');
Route::get('/insert','PeliculasController@insert');
Route::post('/list','PeliculasController@crear');
//Route::resource ('peliculas', 'PeliculasController', ['except' => 'show', 'create', 'edit']);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


