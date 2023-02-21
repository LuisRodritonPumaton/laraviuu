<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
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
    return view('/NavBarFooter/navbarfooter');
});
//NAVEGACIONES
Route::get('/cursos', [CursoController::class, 'cursos'])->name('cursos');
Route::get('/docentes', [DocenteController::class, 'docentes'])->name('docentes');

Route::get('/cursos/curso-registro', [CursoController::class, 'curso_registro'])->name('curso-registro');
Route::get('/docentes/docente-registro', [DocenteController::class, 'docente_registro'])->name('docente-registro');

Route::get('/cursos/curso-actualizacion/{id}', [CursoController::class, 'curso_actualizacion'])->name('curso-actualizacion');
Route::get('/docentes/docente-actualizacion/{id}', [DocenteController::class, 'docente_actualizacion'])->name('docente-actualizacion');

//ACCIONES
Route::post('registrar-curso',[CursoController::class, 'registrar'])->name('registrar-curso');
Route::post('registrar-docente',[DocenteController::class, 'registrar'])->name('registrar-docente');

Route::put('actualizar-curso',[CursoController::class, 'actualizar'])->name('actualizar-curso');
Route::put('actualizar-docente',[DocenteController::class, 'actualizar'])->name('actualizar-docente');

Route::delete('eliminar-curso/{curso}',[CursoController::class, 'eliminar'])->name('eliminar-curso');
Route::delete('eliminar-docente/{docente}',[DocenteController::class, 'eliminar'])->name('eliminar-docente');

//SERVICIOS REST
Route::get('/lista-cursos', [CursoController::class, 'lista_cursos'])->name('lista-cursos');