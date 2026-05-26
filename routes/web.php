<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;

/*
|--------------------------------------------------------------------------
| Rutas públicas
|--------------------------------------------------------------------------
*/

// Inicio
Route::get('/', function () {
    return view('pagina-principal');
})->name('inicio');

// Catálogo
Route::get('/catalogo', [ProductoController::class, 'mostrarColecciones'])
    ->name('catalogo');

// Categorías
Route::get('/catalogo/{categoria}', [ProductoController::class, 'mostrarCategoria']);

// Páginas informativas
Route::get('/quienes-somos', function () {
    return view('quienes-somos');
})->name('quienes-somos');

Route::get('/comercializacion', function () {
    return view('comercializacion');
})->name('comercializacion');

Route::get('/consultas', function () {
    return view('consultas');
})->name('consultas');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/terminos', function () {
    return view('terminos');
})->name('terminos');

Route::get('/coleccion', [ProductoController::class, 'mostrarColecciones'])
    ->name('coleccion');

Route::get('/construccion', function () {
    return view('construccion');
})->name('construccion');


/*
|--------------------------------------------------------------------------
| Registro, Login y Logout
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'formularioLogin'])->name('login');
Route::post('/login', [AuthController::class, 'autenticar'])->name('login.guardar');

Route::get('/registro', [AuthController::class, 'formularioRegistro'])->name('registro');
Route::post('/registro', [AuthController::class, 'registrar'])->name('registro.guardar');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| Rutas protegidas
|--------------------------------------------------------------------------
*/

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard');

Route::get('/cliente/dashboard', [ClienteController::class, 'index'])
    ->name('cliente.dashboard');

Route::get('/carrito', [ClienteController::class, 'index'])
    ->name('carrito');