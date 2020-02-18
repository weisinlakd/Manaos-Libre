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


Route::get('/', function () {
    return view('welcome');
});

//PRODUCTOS 

Route::get('productos', 'ProductosController@listado');

Route::get('detalleProducto/{id}', 'ProductosController@detalle');

Route::get('productos/baratos', 'ProductosController@baratos');


Route::get('crearPublicacion', function () {
    return view('crearPublicacion');
});

Route::post('crearPublicacion','ProductosController@crear'); 




Route::get('ciudades', 'CiudadesController@listado');