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


// {asd?} = asd parametro optativo


Route::get('/', 'ProductosController@home');


//PRODUCTOS 

Route::get('productos', 'ProductosController@listado');

Route::get('producto/{id}', 'ProductosController@detalle');

Route::get('productos/baratos', 'ProductosController@baratos');


Route::get('crearPublicacion', 'ProductosController@nuevoProducto');

Route::post('crearPublicacion','ProductosController@crear'); 

Route::post('borrarPublicacion','ProductosController@borrar'); 


Route::get('ciudades', 'CiudadesController@listado');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'ProductosController@home')->name('home');
