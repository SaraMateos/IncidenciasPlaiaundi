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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'inicio'])->name('home');
Route::get('/homeAdmin', [App\Http\Controllers\HomeController::class, 'iniAdmin'])->name('homeAdmin');


//Incidencias
Route::get('/incidencias', [App\Http\Controllers\IncidenciaController::class, 'viewIncidencia'])->name('incidencias.verIncidencias');
Route::get('/incidencias/añadir', [App\Http\Controllers\IncidenciaController::class, 'addNewIncidencia'])->name('incidencias.nuevaIncidencia');
//Route::get('/home/añadirIncidencia', [IncidenciaController::class, 'addIncidencia']);
//Route::get('/home/añadir', [IncidenciaController::class, 'addIncidencia']);