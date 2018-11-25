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

//CRUD pagos
Route::get('/admin/pagos','PagoController@index');
Route::resource('pago','PagoController');
Route::get('/admin/pagos/create','PagoController@create');//devuelve el formulario
Route::post('/admin/pagos','PagoController@store');//guarda los datos de usuario del formulario
Route::get('/admin/pagos/{id}/edit','PagoController@edit');//Formulario de edicion
Route::post('/admin/pagos/{id}/update','PagoController@update');//actualizar
Route::get('/admin/pagos/{id}/delete','PagoController@destroy');//eliminar

//CRUD cupons
Route::get('/admin/cupones','CuponController@index');
Route::resource('cupon','CuponController');
Route::get('/admin/cupones/create','CuponController@create');//devuelve el formulario
Route::post('/admin/cupones','CuponController@store');//guarda los datos de usuario del formulario
Route::get('/admin/cupones/{id}/edit','CuponController@edit');//Formulario de edicion
Route::post('/admin/cupones/{id}/update','CuponController@update');//actualizar
Route::get('/admin/cupones/{id}/delete','CuponController@destroy');//eliminar