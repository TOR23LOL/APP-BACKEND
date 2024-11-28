<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MisVisController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\RedesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/

//RUTAS DE LOGOS
Route::get('/home', LogoController::class, 'Logos');
Route::get('/editarLG', LogoController::class, 'EditLG');
Route::get('/updateLG', LogoController::class, 'UpdateLG');

//RUTAS DE MISION Y VISION
Route::get('/home', MisVisController::class, 'MisionVision');
Route::get('/editarMV', MisVisController::class, 'EditMV');
Route::get('/updateMV', MisVisController::class, 'UpdateMV');

//RUTAS DE LOS SERVICIOS
Route::get('/home', ServiciosController::class, 'Servicios');
Route::get('/editarSV', ServiciosController::class, 'EditSV');
Route::get('/updateSV', ServiciosController::class, 'UpdateSV');

//RUTAS DE LOS CONTACTOS
Route::get('/home', ContactosController::class, 'Contactos');
Route::get('/editarC', ContactosController::class, 'EditC');
Route::get('/updateC', ContactosController::class, 'UpdateC');

//RUTAS DE REDES
Route::get('/home', RedesController::class, 'Redes');
Route::get('/editarRD', RedesController::class, 'EditRD');
Route::get('/updateRD', RedesController::class, 'UpdateRD');