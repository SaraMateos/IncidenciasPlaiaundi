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
Route::get('/incidencias/modificar', [App\Http\Controllers\IncidenciasController::class, 'editIncidencia'])->name('incidencias.modIncidencia');

//Incidencias admin
Route::get('/admin/verLista', [App\Http\Controllers\IncidenciaController::class, 'createListAdmin'])->name('admin.verInciAdmin');
Route::get('/admin/modificar', [App\Http\Controllers\IncidenciaController::class, 'editAdmin'])->name('admin.modInciAdmin');

Route::get('/email/verify/', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');
