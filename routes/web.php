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

use Illuminate\Support\Facades\Route;

Route::get('/', 'RoutingController@inicio') -> name('index');
Route::get('/beamprod/productos', 'RoutingController@inicio') -> name('init.productos');
Route::get('/beamprod/listas', 'RoutingController@listas') -> name('init.listas');

Route::resource('unidad', 'UnidadController');
Route::post('unidad/actualizar', 'UnidadController@update') -> name('unidad.actualizar');
Route::post('unidad/eliminar', 'UnidadController@destroy') -> name('unidad.eliminar');

Route::resource('categoria', 'CategoriaController')->parameters(['categoria' => 'categoria']);
Route::resource('marca', 'MarcaController');
Route::resource('producto', 'ProductoController');
