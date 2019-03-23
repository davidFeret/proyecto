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

Route::get('/', function(){
	return view('index');
});
/**
 * ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 * ~~~~~~~~~~~~~~~~~~ Rutas relacionadas a acceso público ~~~~~~~~~~~~~~~~~
 * ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 */
Route::get('/cliente', function(){
	return view('public.index');
});
 /**
 * ------------------------------------------------------------------------
 * ----------------------- Rutas relacionadas a login ---------------------
 * ------------------------------------------------------------------------
 */
Route::resource('login', 'logincontroller');
Route::post('/ingresar', 'logincontroller@ingresar');

/**
 * ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 * ~~~~~~~~~~~~~~~~~~ Rutas relacionadas a acceso privado ~~~~~~~~~~~~~~~~~
 * ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 */
/**
 * ------------------------------------------------------------------------
 * --------------------- Rutas relacionadas a usuarios --------------------
 * ------------------------------------------------------------------------
 */
Route::get('/admin/usuarios/nuevo', 	  'admincontroller@getUserView');
Route::get('/admin/usuarios/registros',   'admincontroller@getAllUsers');
Route::get('/admin/usuarios/informacion', 'admincontroller@getData');
Route::resource('/admin', 'admincontroller');
/**
 * ------------------------------------------------------------------------
 * -------------------- Rutas relacionadas a productos --------------------
 * ------------------------------------------------------------------------
 */
Route::get('/admin/productos/nuevo', 	   					'productocontroller@index');
Route::get('/admin/productos/registros',   					'productocontroller@getAllProducts');
Route::get('/admin/productos/informacion', 					'productocontroller@getData');
Route::get('/admin/productos/informacion/extraimages/{id}', 'productocontroller@getExtraImages');
Route::get('/admin/productos/informacion/images/{id}', 		'productocontroller@getImages');
Route::get('/admin/productos/informacion/producto/{id}',	'productocontroller@getSpecificData');
Route::post('/admin/productos/actualizar/principal/{id}', 	'productocontroller@changePrincipal');
Route::post('/admin/productos/agregar/imagen/{id}', 		'productocontroller@setExtraImage');
Route::delete('/admin/productos/eliminar/extraimagen/{id}', 'productocontroller@deleteExtraImage');
Route::resource('/producto', 'productocontroller');
/**
 * ------------------------------------------------------------------------
 * --------------------- Rutas relacionadas a pedidos ---------------------
 * ------------------------------------------------------------------------
 */
Route::get('/admin/pedidos/registros', 			   		'pedidocontroller@getData');
Route::get('/admin/pedidos/registros/informacion/{id}', 'pedidocontroller@getSpecificData');
Route::resource('/pedido', 'pedidocontroller');







// Route::get('/admin/producto/agregar', 'productocontroller@create');
// Route::get('/admin/producto/registros', 'productocontroller@index');
// Route::post('/admin/producto/guardar', 'productocontroller@store');

// Route::get('/TablaProductos','productoController@index');

// /**
//  * ------------------------------------------------------------------------
//  * Rutas relacionadas a administrador: pedidos
//  * ------------------------------------------------------------------------
//  */
// Route::get('/admin/pedido/registros', 'pedidocontroller@index');
// Route::get('/admin/pedido/especifico/{id}', 'pedidocontroller@show');

// /**
//  * ------------------------------------------------------------------------
//  * Rutas relacionadas a administrador: usuarios
//  * ------------------------------------------------------------------------
//  */
// Route::get('/usuarios', function(){
// 	return view('admin_usuario');
// });
// Route::get('/mostrar_usuarios', function(){
// 	return view('admin_verusuarios');
// });
// Route::post('/save', 'personaController@store');
// Route::put('/modificar/{id}', 'personaController@update');
// Route::get('/mostrar_usuarios', 'personaController@show');
// Route::get('/eliminar/{id}', 'personaController@destroy');
// Route::get('/usuarios/{id}', 'personaController@edit');