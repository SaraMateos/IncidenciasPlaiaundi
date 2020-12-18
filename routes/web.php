<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

Auth::routes(['verify' => true]);

//Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'inicio'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.homeAdmin')->middleware('is_admin');

//Incidencias usuario normal
Route::get('/incidencias', [App\Http\Controllers\IncidenciaController::class, 'createList'])->name('incidencias.verIncidencias');
Route::get('/incidencias/añadir', [App\Http\Controllers\IncidenciaController::class, 'addNewIncidencia'])->name('incidencias.nuevaIncidencia');
Route::post('/incidencias/añadido', [App\Http\Controllers\IncidenciaController::class, 'store']);
Route::get('/incidencias/modificar/{id}', [App\Http\Controllers\IncidenciaController::class, 'show'])->name('incidencias.modIncidencia');
Route::post('/incidencias/modificar/{id}', [App\Http\Controllers\IncidenciaController::class, 'update'])->name('incidencias.editIncidencia');
Route::get('/incidencias/modificar/{id}/edit', [App\Http\Controllers\IncidenciaController::class, 'edit'])->name('incidencias.editIncidencia');
Route::get('/incidencias/eliminar/{id}', [App\Http\Controllers\IncidenciaController::class, 'destroy'])->name('incidencias.delete');

//Incidencias admin
Route::get('/admin/incidencias', [App\Http\Controllers\IncidenciaController::class, 'createListAdmin'])->name('admin.verInciAdmin')->middleware('is_admin');
Route::get('/admin/incidencias/modificar/{id}', [App\Http\Controllers\IncidenciaController::class, 'showAdmin'])->name('admin.modIncidencia')->middleware('is_admin');
Route::post('/admin/incidencias/modificar/{id}', [App\Http\Controllers\IncidenciaController::class, 'updateAdmin'])->name('admin.editInciAdmin')->middleware('is_admin');
Route::get('/admin/incidencias/modificar/{id}/edit', [App\Http\Controllers\IncidenciaController::class, 'editAdmin'])->name('admin.editInciAdmin')->middleware('is_admin');
Route::get('/admin/incidencias/eliminar/{id}', [App\Http\Controllers\IncidenciaController::class, 'destroyAdmin'])->name('admin.delete')->middleware('is_admin');

Route::get('/email/verify/', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');