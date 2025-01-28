<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnalysisController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LaptopDetalleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemoriaController;
use App\Http\Controllers\ProcesadoreController;
use App\Http\Controllers\RamController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\TituloEmbarqueController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\WharehouseController;
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

/* Rutas para la ADMINISTRACION */
//Index
Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');

/* RUTAS PARA LA LISTA DE ANALISIS DE PACIENTES */
//Index
Route::get('/analysis/index', [AnalysisController::class, 'index'])->name('analysis.index');

//Create
Route::get('/analysis/create', [AnalysisController::class, 'create'])->name('analysis.create');
Route::post('/analysis/create', [AnalysisController::class, 'store'])->name('analysis.store');

//Edit
Route::get('/analysis/edit', [AnalysisController::class, 'edit'])->name('analysis.edit');
Route::post('/analysis/edit', [AnalysisController::class, 'update'])->name('analysis.update');

//Delete
Route::delete('/analysis/delete', [AnalysisController::class, 'destroy'])->name('analysis.destroy');

/* RUTAS PARA LA LISTA DE LOS DOCTORES */
//Index
Route::get('/doctor/index', [DoctorsController::class, 'index'])->name('doctor.index');

//Create
Route::get('/doctor/create', [DoctorsController::class, 'create'])->name('doctor.create');
Route::post('/doctor/create', [DoctorsController::class, 'store'])->name('doctor.store');

//Edit
Route::get('/doctor/edit/', [DoctorsController::class, 'edit'])->name('doctor.edit');
Route::post('/doctor/edit/', [DoctorsController::class, 'update'])->name('doctor.update');

//Delete
Route::delete('/doctor/delete', [DoctorsController::class, 'destroy'])->name('doctor.destroy');

/* RUTAS PARA EL ALMACEN*/
//Index
Route::get('/wharehouse/index', [WharehouseController::class, 'index'])->name('wharehouse.index');

//Create
Route::get('/wharehouse/create', [WharehouseController::class, 'create'])->name('wharehouse.create');
Route::post('/wharehouse/create', [WharehouseController::class, 'store'])->name('wharehouse.store');

//Edit
Route::get('/wharehouse/edit', [WharehouseController::class, 'edit'])->name('wharehouse.edit');
Route::post('/wharehouse/edit', [WharehouseController::class, 'update'])->name('wharehouse.update');

//Delete
Route::delete('/wharehouse/delete', [WharehouseController::class, 'destroy'])->name('wharehouse.destroy');

/* RUTAS PARA LA LISTA DE TAMAÑO DE MEMORIAS */
//index
Route::get('/memory/index', [MemoriaController::class, 'index'])->name('memory.index');

//Create
Route::get('/memory/create', [MemoriaController::class, 'create'])->name('memory.create');
Route::post('/memory/create', [MemoriaController::class, 'store'])->name('memory.store');

//Edit
Route::get('/memory/edit', [MemoriaController::class, 'edit'])->name('memory.edit');
Route::post('/memory/edit', [MemoriaController::class, 'update'])->name('memory.update');

//Delete
Route::delete('/memory/delete', [MemoriaController::class, 'destroy'])->name('memory.destroy');

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
Route::get('/laptop/index/{id_titulo}', [LaptopDetalleController::class, 'index'])->name('laptop.index');

//Ruta para registrar laptop
Route::get('/laptop/create/{laptop_detalles:id_titulo}', [LaptopDetalleController::class, 'create'])->name('laptop.create');
Route::post('/laptop/create/{laptop_detalles:id_titulo}', [LaptopDetalleController::class, 'store'])->name('laptop.store');

//Ruta para actualizar Laptop
Route::get('/laptop/edit/{laptop_detalles:numero_serie}', [LaptopDetalleController::class, 'edit'])->name('laptop.edit');
Route::post('/laptop/edit/{laptop_detalles:numero_serie}', [LaptopDetalleController::class, 'update'])->name('laptop.update');

//Ruta para eliminar
Route::delete('/embarque/delete/{laptop_detalles:numero_serie}', [LaptopDetalleController::class, 'destroy'])->name('laptop.destroy');

//Ruta para exportar a excel
Route::get('/laptop/export/excel/{laptop_detalles:id_titulo}', [LaptopDetalleController::class, 'exportExcel'])->name('laptop.excel');

//Ruta para importar desde Excel
Route::get('/laptop/import/{laptop_detalles:id_titulo}', [LaptopDetalleController::class, 'import'])->name('laptop.import');
Route::post('/laptop/import/{laptop_detalles:id_titulo}', [LaptopDetalleController::class, 'importExcel'])->name('laptop.import.excel');

/* NUMEROS DE SERIE DE LAPTOPS */
//Ruta para el index
Route::get('/serie/index/{laptop_detalles:id_titulo}', [SerieController::class, 'index'])->name('serie.index');

//Ruta para generar la importacion
Route::get('/serie/create/{laptop_detalles:id_titulo}', [SerieController::class, 'create'])->name('serie.create');
Route::post('/serie/create/{laptop_detalles:id_titulo}', [SerieController::class, 'store'])->name('serie.store');
