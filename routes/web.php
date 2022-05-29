<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\menuController;
use App\Http\Controllers\usuariosController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\citasController;
use App\Http\Controllers\RecetasController;
use App\Http\Controllers\pagosController;

//Web Routes
Route::get('/',[MenuController::class,'index']);
Route::get('/inicio',[MenuController::class,'inicio']);
Route::get('/comprobar',[MenuController::class,'comprobar']);
Route::get('/salir',[MenuController::class,'salir']);
Route::get('/registrar',[MenuController::class,'registrar']);
Route::get('/pagar',[MenuController::class,'pagar']);
Route::post('/validar',[MenuController::class,'validar']);

//Dashboard
Route::get('/dashboard',[MenuController::class,'administrador']);
Route::get('/doctor',[MenuController::class,'doctor']);
Route::get('/recepcion',[MenuController::class,'recepcion']);

//Crud usuarios
Route::get('/usuarios',[usuariosController::class,'index']);
Route::get('usuarios/crear',[usuariosController::class,'create']);
Route::post('usuarios/guardar',[usuariosController::class,'guardar']);
Route::get('usuarios/editar/{id}',[usuariosController::class,'edit']);
Route::put('usuarios/actualizar/{id}',[usuariosController::class,'update']);
Route::get('usuarios/mostrar/{id}',[usuariosController::class,'show']);
Route::get('usuarios/restablecer/{id}',[usuariosController::class,'editContraseña']);
Route::put('usuarios/actualizar/contraseña/{id}',[usuariosController::class,'restablecer']);
Route::delete('usuarios/borrar/{id}',[UsuariosController::class,'destroy']);

//Crud de Pacientes
Route::get('/pacientes',[PacientesController::class,'index']);
Route::get('pacientes/crear',[PacientesController::class,'create']);
Route::post('pacientes/guardar',[PacientesController::class,'guardar']);
Route::get('pacientes/editar/{id}',[PacientesController::class,'edit']);
Route::put('pacientes/actualizar/{id}',[PacientesController::class,'update']);
Route::get('pacientes/mostrar/{id}',[PacientesController::class,'show']);
Route::delete('pacientes/borrar/{id}',[PacientesController::class,'destroy']);
Route::get('pacientes/registro/{id}',[PacientesController::class,'registros']);

//Crud de Recetas Medicas
Route::get('/recetas',[RecetasController::class,'index']);
Route::get('recetas/crear',[RecetasController::class,'create']);
Route::post('recetas/guardar',[RecetasController::class,'guardar']);
Route::get('recetas/mostrar/{id}',[RecetasController::class,'show']);
Route::get('recetas/imprimir',[RecetasController::class,'imprimir']);

//Crud de Citas
Route::get('/citas',[citasController::class,'index']);
Route::get('citas/crear',[citasController::class,'create']);
Route::post('citas/guardar',[citasController::class,'guardar']);
Route::get('citas/editar/{id}',[citasController::class,'edit']);
Route::get('citas/mostrar/{id}',[citasController::class,'show']);
Route::put('citas/actualizar/{id}',[citasController::class,'update']);
Route::delete('citas/borrar/{id}',[citasController::class,'destroy']);

//Crud de Pagos
Route::get('/pagos',[pagosController::class,'index']);
Route::get('pagos/crear',[pagosController::class,'create']);
Route::post('pagos/guardar',[pagosController::class,'guardar']);
Route::put('pagos/actualizar/{id}',[pagosController::class,'update']);
Route::get('pagos/mostrar/{id}',[pagosController::class,'show']);
Route::delete('pagos/borrar/{id}',[pagosController::class,'destroy']);

//rutas pruebas
//Route::get('/pruebas',[MenuController::class,'pruebas']);