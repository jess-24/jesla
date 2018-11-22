<?php

//ruta de autenticación
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

//CRUD productos
Route::get('/admin/productos','ProductoController@index');
Route::resource('producto','ProductoController');
Route::resource('proveedor','ProveedorController');
Route::get('/admin/productos/create','ProductoController@create');//devuelve el formulario
Route::post('/admin/productos','ProductoController@store');//guarda los datos de usuario del formulario
