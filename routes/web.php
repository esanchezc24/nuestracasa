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

/*Paginas Generales*/
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

/*Revista*/
Route::get('revistas', [
    'uses' => 'web\RevistaController@revistas',
    'as' => 'revistas',]);

Route::get('detalle-revista/{id}', [
    'uses' => 'web\RevistaController@detalle_revista',
    'as' => 'detalle-revista',]);

/*Bancos*/
Route::get('bancos', [
    'uses' => 'web\BancosController@bancos',
    'as' => 'bancos',]);

Route::get('bancos/bcp', [ /*muestra URI */
    'uses' => 'web\BancosController@bcp',
    'as' => 'bcp',]);

Route::get('bancos/interbank', [
    'uses' => 'web\BancosController@interbank',
    'as' => 'interbank',]);

Route::get('bancos/scotia', [
    'uses' => 'web\BancosController@scotia',
    'as' => 'scotia',]);

Route::get('bancos/bn', [
    'uses' => 'web\BancosController@bn',
    'as' => 'bn',]);

Route::get('bancos/gnb', [
    'uses' => 'web\BancosController@gnb',
    'as' => 'gnb',]);

Route::get('bancos/bbva', [
    'uses' => 'web\BancosController@bbva',
    'as' => 'bbva',]);

Route::get('bancos/banbif', [
    'uses' => 'web\BancosController@banbif',
    'as' => 'banbif',]);

Route::get('bancos/mibanco', [
    'uses' => 'web\BancosController@mibanco',
    'as' => 'mibanco',]);