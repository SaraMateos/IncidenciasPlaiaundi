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

//Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'inicio'])->name('home');
Route::get('/homeAdmin', [App\Http\Controllers\HomeController::class, 'iniAdmin'])->name('homeAdmin');

//Incidencias usuario normal
Route::get('/incidencias', [App\Http\Controllers\IncidenciaController::class, 'createList'])->name('incidencias.verIncidencias');
Route::get('/incidencias/añadir', [App\Http\Controllers\IncidenciaController::class, 'addNewIncidencia'])->name('incidencias.nuevaIncidencia');
Route::get('/incidencias/modificar', [App\Http\Controllers\IncidenciasController::class, 'editIncidencia'])->name('incidencias.modIncidencia');

//Incidencias admin
Route::get('/inciAdmin', [App\Http\Controllers\IncidenciaController::class, 'createListAdmin'])->name('admin.verInciAdmin');
Route::get('/inciAdmin/modificar', [App\Http\Controllers\IncidenciaController::class, 'editInciAdmin'])->name('admin.modInciAdmin');