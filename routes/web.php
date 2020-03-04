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

Route::get('/crearPublicacion', 'ProductosController@nuevoProducto')->middleware('checkLogin');

Route::post('/crearPublicacion','ProductosController@crear'); 

Route::post('/borrarPublicacion','ProductosController@borrar');
Route::get('/borrarPublicacion')->middleware('checkLogin'); 

Route::get('/recientes', 'ProductosController@recientes');

Route::post('/comentar', 'ComentariosController@crear');
Route::get('/comentar')->middleware('checkLogin');

Route::post('/votar', 'ValoracionesController@votar');
Route::get('/votar')->middleware('checkLogin');

//USUARIOS
Auth::routes();

Route::get('perfil', 'CiudadesController@listado')->middleware('checkLogin');

Route::get('perfil/{id}', 'UsuariosController@perfil');

Route::post('actualizarPerfil', 'UsuariosController@actualizar');

Route::get('/compras', 'UsuariosController@compras')->middleware('checkLogin');

Route::get('/ventas', 'UsuariosController@ventas')->middleware('checkLogin');

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

Route::get('/avanzada', 'SitioController@filtro');

Route::get('/resultados-avanzados', 'ProductosController@filtro');

Route::get('/checkout', 'VentasController@data')->middleware('checkLogin');

Route::post('/procesarPago', 'VentasController@pagar');
Route::get('/procesarPago')->middleware('checkLogin');




//cart

Route::get('/cart', function () {
    return view('cart');
});

Route::get('add-to-cart/{id}', 'ProductosController@addToCart');

Route::patch('update-cart', 'ProductosController@update');
 
Route::delete('remove-from-cart', 'ProductosController@remove');