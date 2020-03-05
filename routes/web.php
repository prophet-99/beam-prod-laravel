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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'RoutingController@inicio') -> name('index');
Route::get('/beamprod/productos', 'RoutingController@inicio') -> name('init.productos');
Route::get('/beamprod/listas', 'RoutingController@listas') -> name('init.listas');

Route::resource('unidad', 'UnidadController') -> middleware('auth');
Route::post('unidad/actualizar', 'UnidadController@update') -> name('unidad.actualizar') -> middleware('auth');
Route::post('unidad/eliminar', 'UnidadController@destroy') -> name('unidad.eliminar') -> middleware('auth');
Route::get('pdf-unidad', 'UnidadController@pdf') -> name('unidad.pdf') -> middleware('auth');
Route::get('excel-unidad', 'UnidadController@excel') -> name('unidad.excel') -> middleware('auth');

Route::resource('categoria', 'CategoriaController')->parameters(['categoria' => 'categoria']) -> middleware('auth');
Route::post('categoria/actualizar', 'CategoriaController@update') -> name('categoria.actualizar') -> middleware('auth');
Route::post('categoria/eliminar', 'CategoriaController@destroy') -> name('categoria.eliminar') -> middleware('auth');
Route::get('pdf-categoria', 'CategoriaController@pdf') -> name('categoria.pdf') -> middleware('auth');
Route::get('excel-categoria', 'CategoriaController@excel') -> name('categoria.excel') -> middleware('auth');

Route::resource('marca', 'MarcaController');
Route::post('marca/actualizar', 'MarcaController@update') -> name('marca.actualizar') -> middleware('auth');
Route::post('marca/eliminar', 'MarcaController@destroy') -> name('marca.eliminar') -> middleware('auth');
Route::get('pdf-marca', 'MarcaController@pdf') -> name('marca.pdf') -> middleware('auth');
Route::get('excel-marca', 'MarcaController@excel') -> name('marca.excel') -> middleware('auth');

Route::resource('producto', 'ProductoController');
Route::post('producto/actualizar', 'ProductoController@update') -> name('producto.actualizar') -> middleware('auth');
Route::post('producto/eliminar', 'ProductoController@destroy') -> name('producto.eliminar') -> middleware('auth');
Route::get('pdf-producto', 'ProductoController@pdf') -> name('producto.pdf') -> middleware('auth');
Route::get('excel-producto', 'ProductoController@excel') -> name('producto.excel') -> middleware('auth');

Auth::routes();


