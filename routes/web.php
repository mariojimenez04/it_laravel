<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\LaptopDetalleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\TituloEmbarqueController;
use App\Http\Controllers\UsuarioController;
use App\Models\Laptop_detalle;
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

//Ruta para login
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/', [LoginController::class, 'validacion']);

//Ruta para la pagina principal
Route::get('/index', [InicioController::class, 'index'])->name('index');

/* USUARIOS */
//Ruta para cerrar sesion
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//Ruta para crear los usuarios
Route::get('/users/register', [UsuarioController::class, 'create'])->name('users.create');
Route::post('/users/register', [UsuarioController::class, 'store'])->name('users.store');

//Ruta para listar los usuarios
Route::get('/users/index', [UsuarioController::class, 'index'])->name('users.index');

//Ruta para editar el usuario
Route::get('/users/{user:name}/edit', [UsuarioController::class, 'edit'])->name('users.edit');
Route::post('/users/{user:name}/edit', [UsuarioController::class, 'update'])->name('users.update');

//Ruta para eliminar el usuario
Route::delete('/usuario/{user:name}/delete', [UsuarioController::class, 'destroy'])->name('users.destroy');

/* EMBARQUES */
//Inicio
Route::get('/embarque/index', [TituloEmbarqueController::class, 'index'])->name('embarque.index');

//Registrar embarques
Route::get('/embarque/create', [TituloEmbarqueController::class, 'create'])->name('embarque.create');
Route::post('/embarque/create', [TituloEmbarqueController::class, 'store'])->name('embarque.store');

//Actualizar embarques
Route::get('/embarque/{titulo_embarque:id_emb}/edit', [TituloEmbarqueController::class, 'edit'])->name('embarque.edit');
Route::post('/embarque/{titulo_embarque:id_emb}/edit', [TituloEmbarqueController::class, 'update'])->name('embarque.update');

//Eliminar embarques
Route::delete('/embarque/{titulo_embarque:id_emb}/edit', [TituloEmbarqueController::class, 'destroy'])->name('embarque.destroy');

/* LAPTOP DETALLES */
//Ruta del inicio
Route::get('/laptop/index/{laptop_detalles:id_titulo}', [LaptopDetalleController::class, 'index'])->name('laptop.index');

//Ruta para registrar laptop
Route::get('/laptop/create/{laptop_detalles:id_titulo}', [LaptopDetalleController::class, 'create'])->name('laptop.create');
Route::post('/laptop/create/{laptop_detalles:id_titulo}', [LaptopDetalleController::class, 'store'])->name('laptop.store');

//Ruta para actualizar Laptop
Route::get('/laptop/edit/{laptop_detalles:numero_serie}', [LaptopDetalleController::class, 'edit'])->name('laptop.edit');
Route::post('/laptop/edit/{laptop_detalles:numero_serie}', [LaptopDetalleController::class, 'update'])->name('laptop.update');

//Ruta para eliminar
Route::delete('/embarque/delete/{laptop_detalles:numero_serie}', [LaptopDetalleController::class, 'destroy'])->name('laptop.destroy');

//Ruta para exportar a excel
Route::get('/laptop/export/excel', [LaptopDetalleController::class, 'exportExcel'])->name('laptop.excel');

/* NUMEROS DE SERIE DE LAPTOPS */
//Ruta para el index
Route::get('/serie/index/{laptop_detalles:id_titulo}', [SerieController::class, 'index'])->name('serie.index');

//Ruta para generar la importacion
Route::get('/serie/create/{laptop_detalles:id_titulo}', [SerieController::class, 'create'])->name('serie.create');
Route::post('/serie/create/{laptop_detalles:id_titulo}', [SerieController::class, 'store'])->name('serie.store');
