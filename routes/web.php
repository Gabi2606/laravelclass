<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "<h1>Hola</h1>";
});

// Route::get('productos/', function () {
//     return "Esta es la lista de productos";
// });

Route::get('productos',[ProductController::class, 'index'] );

Route::get('productos/create', [ProductController::class, 'create']);

Route::get('productos/{producto}', [ProductController::class, 'show']);

Route::post('productos', [ProductController::class, 'store']);


// Route::get('productos/{prodcuto}', function ($producto) {
//     return "Esta es el detalle de producto $producto";
// });

Route::get('clientes/{id?}', function ($id=1) {
    return "Cliente $id";
});

Route::get('clientes/{id}/venta/{idVenta}', function ($id, $idVenta) {
    return "El cliente $id realizo la venta $idVenta";
});

Route::resource('clientes/',ClienteController::class );

