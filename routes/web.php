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

Route::get('proyectos', [
    'uses' => 'web\WebController@proyectos',
    'as' => 'proyectos',]);

Route::get('alquiler', [
    'uses' => 'web\WebController@alquiler',
    'as' => 'alquiler',]);

Route::get('venta', [
    'uses' => 'web\WebController@venta',
    'as' => 'venta',]);

Route::get('detalle-proyecto', [
    'uses' => 'web\WebController@detalle_proyecto',
    'as' => 'detalle-proyecto',]);

Route::get('constructoras', [
    'uses' => 'web\WebController@constructoras',
    'as' => 'constructoras',]);

Route::get('proveedores', [
    'uses' => 'web\WebController@proveedores',
    'as' => 'proveedores',]);

Route::get('inmobiliarias', [
    'uses' => 'web\WebController@inmobiliarias',
    'as' => 'inmobiliarias',]);

Route::get('detalle-directorio', [
    'uses' => 'web\WebController@detalle_directorio',
    'as' => 'detalle-directorio',]);