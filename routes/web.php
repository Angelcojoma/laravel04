<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
Route::get('/', [PagesController::class, 'fnIndex'])-> name('xIndex');
Route::post('/', [PagesController::class, 'fnRegistrar'])-> name('Estudiante.xRegistrar');

Route::get('/lista', [PagesController::class, 'fnLista'])->name('xLista');
Route::get('/detalle/{id}', [PagesController::class, 'fnEstDetalle'])->name('Estudiante.xDetalle');
Route::get('/galeria/{numero?}', [PagesController::class, 'fnGaleria']) -> where('numero','[0-9]+')->name('xGaleria');


Route::delete('/eliminar/{id}', [PagesController::class, 'fnEliminar'])->name('Estudiante.xEliminar');

Route::get('/actualizar/{id}', [PagesController::class, 'fnEstActualizar'])->name('Estudiante.xActualizar');
Route::put('/actualizar/{id}', [PagesController::class, 'fnUpdate'])->name('Estudiante.xUpdate');

