<?php

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
    return view('auth.login');
});
Route::get('/registro', function () {
    return view('auth.registro');
});



/* Rutas para El home */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Rutas para Gestionar La Facturacion */
Route::get('/facturacion', [App\Http\Controllers\FacturaController::class, 'index'])->name('facturacion');

/* Rutas para hacer el login */
Route::post('login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');

/* Rutas de las referencias o Servicios */
Route::get('ver_todos', [App\Http\Controllers\ReferenciasController::class, 'index'])->name('index');
Route::get('referencias', [App\Http\Controllers\ReferenciasController::class, 'create'])->name('create');

/* Rutas Para Terceros */
Route::get('terceros', [App\Http\Controllers\TercerosController::class, 'index'])->name('index');