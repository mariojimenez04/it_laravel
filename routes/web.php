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

Route::get('/', [UsuarioController::class, 'login'])->name('login');
Route::post('/', [UsuarioController::class, 'validacion'])->name('login');

Route::get('/index', [InicioController::class, 'index'])->name('index');

Route::post('/logout', [UsuarioController::class, 'logout'])->name('logout');

