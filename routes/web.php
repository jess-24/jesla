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
Route::post('/admin/productos/{id}/update','ProductoController@update');//actualizar
Route::get('/admin/productos/{id}/delete','ProductoController@destroy');//eliminar

//CRUD categoria
Route::get('/admin/categorias','CategoriaController@index');
Route::resource('categoria','CategoriaController');
Route::get('/admin/categorias/create','CategoriaController@create');//devuelve el formulario
Route::post('/admin/categorias','CategoriaController@store');//guarda los datos de usuario del formulario
Route::get('/admin/categorias/{id}/edit','CategoriaController@edit');//Formulario de edicion
Route::post('/admin/categorias/{id}/update','CategoriaController@update');//actualizar
Route::get('/admin/categorias/{id}/delete','CategoriaController@destroy');//eliminar

//CRUD provedores
Route::get('/admin/proveedores','ProveedorController@index');
Route::resource('proveedor','ProveedorController');
Route::get('/admin/proveedores/create','ProveedorController@create');//devuelve el formulario
Route::post('/admin/proveedores','ProveedorController@store');//guarda los datos de usuario del formulario
Route::get('/admin/proveedores/{id}/edit','ProveedorController@edit');//Formulario de edicion
Route::post('/admin/proveedores/{id}/update','ProveedorController@update');//actualizar
Route::get('/admin/proveedores/{id}/delete','ProveedorController@destroy');//eliminar
