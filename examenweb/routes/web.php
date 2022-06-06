<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\TipoPagosController;
use App\Http\Controllers\HomeController;
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
/*
Route::get('/clients', [ClientsController::class, 'index'])
->name('clients.index');
Route::get('/clients/create', [ClientsController::class, 'create'])
->name('clients.create');
Route::post('/clients/create', [ClientsController::class, 'store'])
->name('clients.store');
*/

Route::resource('clients', ClientsController::class);
Route::resource('productos', ProductosController::class);
Route::resource('inventarios', InventarioController::class);
Route::resource('tipopagos', TipoPagosController::class);

