<?php

use App\Http\Controllers\InicioController;
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
Route::get('/', [UsuarioController::class, 'login'])->name('login');
Route::post('/', [UsuarioController::class, 'validacion'])->name('login');

//Ruta para la pagina principal
Route::get('/index', [InicioController::class, 'index'])->name('index');

//Ruta para cerrar sesion
Route::post('/logout', [UsuarioController::class, 'logout'])->name('logout');

//Ruta para crear los usuarios
Route::get('/users/register', [UsuarioController::class, 'create'])->name('users.create');
Route::post('/users/register', [UsuarioController::class, 'store'])->name('users.store');

