<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;


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

Route::get('/crearUser', [UsuarioController::class, 'crearUser']);

Route::post('/insertUser', [UsuarioController::class, 'crearUserPOST']);

Route::get('/mostrarUser', [UsuarioController::class, 'mostrarUser']);

Route::get('/addSesion/{id}', [ProductoController::class, 'anadirCarrito']);

Route::get('/removeSesion/{id}', [ProductoController::class, 'eliminarCarrito']);

Route::get('/limpiarCarrito', [ProductoController::class, 'limpiarCarrito']);



