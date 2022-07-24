<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;

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
    return view('template.template');
});


//ruta para clientes
Route::resource('Clientess', ClientesController::class );

//ruta para productos
Route::resource('Productos', ProductosController::class );

//ruta para productos
Route::resource('Pedidos', PedidosController::class );
