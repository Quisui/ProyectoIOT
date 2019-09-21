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

use App\Http\Controllers\LucesController;

Route::get('/', function () {
    return view('inicio');
});

//Rutas del controlador de movimiento
Route::post('/api/movimiento', 'MovimientoController@store');
Route::get('/api/movimiento/fechas/{fecha}', 'MovimientoController@getByDate');

//Rutas del controlador de luces LED
Route::resource('/api/luces', 'LucesController');
