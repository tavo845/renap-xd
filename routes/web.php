<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/formularios', [App\Http\Controllers\SolicitudController::class, 'create'])->name('solicitudes');
Route::get('/user',[App\Http\Controllers\SolicitudController::class, 'user'])->name('usuarios');
Route::post('/formulario',[App\Http\Controllers\SolicitudController::class, 'store'])->name('usuarios.store');
Route::get('/inicio',[App\Http\Controllers\SolicitudController::class, 'index'])->name('inicio');
Route::get('/solis',[App\Http\Controllers\SolicitudController::class, 'create'])->name('solicitudes');
Route::get('/user/{id}/edit', [App\Http\Controllers\SolicitudController::class, 'edit'])->name('edit');
Route::put('/user/{id}', [App\Http\Controllers\SolicitudController::class, 'update'])->name('edit.update');





