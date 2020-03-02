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

Route::get('/productos/{busqueda?}', 'ProductosController@listado')->name('productos');

Route::get('/producto/{id}', 'ProductosController@detalle');

Route::get('/productos/baratos', 'ProductosController@baratos');

Route::get('/crearPublicacion', 'ProductosController@nuevoProducto');

Route::post('/crearPublicacion','ProductosController@crear'); 

Route::post('/borrarPublicacion','ProductosController@borrar'); 

Route::get('/recientes', 'ProductosController@recientes');

Route::get('/mas-vendidos', 'ProductosController@hot');

Route::post('/comentar', 'ComentariosController@crear');

Route::post('/votar', 'ValoracionesController@votar');

//USUARIOS
Auth::routes();

Route::get('perfil', 'CiudadesController@listado');

Route::get('perfil/{id}', 'UsuariosController@perfil');

Route::post('actualizarPerfil', 'UsuariosController@actualizar');

// Route::get('ciudades', 'CiudadesController@listado');
// Route::get('/test/{busqueda?}', 'ProductosController@listado');


// SITIO EN GENERAL;

Route::get('/home', 'ProductosController@home')->name('home');


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});


Route::get('/checkout', 'VentasController@data');

Route::post('/procesarPago', 'VentasController@pagar');

//cart

Route::get('/cart', function () {
    return view('cart');
});

Route::get('add-to-cart/{id}', 'ProductosController@addToCart');

Route::patch('update-cart', 'ProductosController@update');
 
Route::delete('remove-from-cart', 'ProductosController@remove');