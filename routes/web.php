<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlumnoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alumnos', [AlumnoController::class, 'inicio'])->name('alumno.principal');

Route::get('/alumnos/crear', [AlumnoController::class, 'crear'])->name('alumno.crear');

Route::get('/alumnos/editar/{codigo}',[AlumnoController::class, 'editar'])->name('alumno.editar');

Route::get('/alumnos/eliminar/{codigo}',[AlumnoController::class, 'eliminar'])->name('alumno.eliminar');
