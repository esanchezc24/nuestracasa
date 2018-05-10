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

Route::get('/', [
    'uses' => 'web\WebController@index',
    'as' => '/',]);

Route::get('index', [
    'uses' => 'web\WebController@index',
    'as' => 'index',]);
Route::get('mapa', [
    'uses' => 'web\WebController@mapa',
    'as' => 'mapa',]);

/*Proyectos*/
Route::get('proyectos', [
    'uses' => 'web\ProyectosController@proyectos',
    'as' => 'proyectos',]);

Route::get('alquiler', [
    'uses' => 'web\ProyectosController@alquiler',
    'as' => 'alquiler',]);

Route::get('venta', [
    'uses' => 'web\ProyectosController@venta',
    'as' => 'venta',]);

Route::get('detalle-proyecto', [
    'uses' => 'web\ProyectosController@detalle_proyecto',
    'as' => 'detalle-proyecto',]);

/*Directorio*/
Route::get('constructoras', [
    'uses' => 'web\DirectorioController@constructoras',
    'as' => 'constructoras',]);

Route::get('proveedores', [
    'uses' => 'web\DirectorioController@proveedores',
    'as' => 'proveedores',]);

Route::get('inmobiliarias', [
    'uses' => 'web\DirectorioController@inmobiliarias',
    'as' => 'inmobiliarias',]);

Route::get('detalle-directorio', [
    'uses' => 'web\DirectorioController@detalle_directorio',
    'as' => 'detalle-directorio',]);

/*Noticias y Alerta Roja*/
Route::get('noticias', [
    'uses' => 'web\ArticulosController@noticias',
    'as' => 'noticias',]);

Route::get('alertaroja', [
    'uses' => 'web\ArticulosController@alertaroja',
    'as' => 'alertaroja',]);

Route::get('detalle-articulo', [
    'uses' => 'web\ArticulosController@detalle_articulo',
    'as' => 'detalle-articulo',]);