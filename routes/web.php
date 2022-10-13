<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
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
Route::get('/embarque/index', [LoginController::class, 'login'])->name('embarque.index');
