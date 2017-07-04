<?php

//http://localhost/mis_archivos/intervention_image_git/intervention_image/public/

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('guardar', 'misControladores\guardarArchivos@guardarArchivo_GET');


Route::post('recibir_datos', 'misControladores\guardarArchivos@guardarArchivo_POST')->name('datos_recibidos');

Route::get('/upload/{medida}/{image}','misControladores\guardarArchivos@ImageController');

Route::get('eliminar', 'misControladores\guardarArchivos@eliminar');

Route::get('lista', 'misControladores\guardarArchivos@listar');