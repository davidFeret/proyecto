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
Route::get('/', function() {
    return view ('index');
});

/**
 * ------------------------------------------------------------------------
 * Rutas relacionadas a administrador: productos
 * ------------------------------------------------------------------------
 */
Route::get('/admin/producto/agregar', 'productocontroller@create');
Route::get('/admin/producto/registros', 'productocontroller@index');
Route::post('/admin/producto/guardar', 'productocontroller@store');

/**
 * ------------------------------------------------------------------------
 * Rutas relacionadas a administrador: pedidos
 * ------------------------------------------------------------------------
 */
Route::get('/admin/pedido/registros', 'pedidocontroller@index');
Route::get('/admin/pedido/especifico/{id}', 'pedidocontroller@show');