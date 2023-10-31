<?php

use App\Http\Controllers\TareasController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UsuariosController::class, 'index'])->name('usuarios.index');
Route::get('/registro', [UsuariosController::class, 'registro'])->name('usuarios.registro');
Route::post('/store', [UsuariosController::class, 'store'])->name('usuarios.store');
Route::get('/tareasindex', [TareasController::class, 'index'])->name('tareas.index');
Route::get('/createtarea', [TareasController::class, 'create'])->name('tareas.create');
Route::post('/storetarea', [TareasController::class, 'store'])->name('tareas.store');
Route::get('/edittarea/{id}', [TareasController::class, 'edit'])->name('tareas.edit');
Route::put('/updatetarea/{id}', [TareasController::class, 'update'])->name('tareas.update');
Route::get('/showtarea/{id}', [TareasController::class, 'show'])->name('tareas.show');
Route::delete('/destroytarea/{id}', [TareasController::class, 'destroy'])->name('tareas.destroy');
