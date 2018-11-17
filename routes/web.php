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
//ruta de autenticación
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//CRUD productos
Route::get('/admin/productos','ProductoController@index');
Route::get('/admin/productos/create','ProductoController@create');//devuelve el formulario
Route::post('/admin/productos','ProductoController@store');//guarda los datos de usuario del formulario
