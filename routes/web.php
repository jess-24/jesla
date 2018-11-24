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
Route::get('/admin/productos/{id}/edit','ProductoController@edit');//Formulario de edicion
Route::post('/admin/productos/{id}/edit','ProductoController@update');//actualizar

//CRUD categorias
Route::get('/admin/categorias','CategoriaController@index');
Route::resource('categoria','CategoriaController');
Route::get('/admin/categorias/create','CategoriaController@create');//devuelve el formulario
Route::post('/admin/categorias','Categoriaontroller@store');//guarda los datos de usuario del formulario
