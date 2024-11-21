<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;

//**************************************************************************************** */
// Rutas para trabajar con el controlador vistas 

//Route::get('/',[ControladorVistas::class, 'home'])->name ('rutainicio');
//Route::get('/formulario',[ControladorVistas::class, 'insert'])->name ('rutaformulario');
//Route::get('/clientes',[ControladorVistas::class, 'select'])->name ('rutaconsulta');
//Route::post('/enviarCliente',[ControladorVistas::class,'procesarCliente'])->name('rutaenviar');

// Route::view('component','componentes')->name('rutacomponentes'); 

// ****************************************************************************************  

 //Rutas para trabajar con el clienteController 

Route::get('/cliente/create',[clienteController::class, 'create'])->name ('rutaformulario');
Route::post('/cliente',[clienteController::class,'store'])->name('rutaenvia');
Route::get('/',[clienteController::class,'home'])->name('rutainicio');
Route::get('/cliente',[clienteController::class,'index'])->name('rutaconsulta');




// Ruta para mostrar el formulario donde vamos a editar a los clientes
Route::get('/cliente/{id}/edit', [clienteController::class, 'edit'])->name('clientesedit');

// Ruta para procesar la actualización
Route::put('/cliente/{id}', [clienteController::class, 'update'])->name('clientesupdate');

//Ruta para eliminar un cliente
Route::delete('/cliente/{id}', [clienteController::class, 'destroy'])->name('clientesdestroy');











/*
Route::view('/','inicio')->name('rutainicio');

Route::view('/formulario','formulario')->name('rutaformulario');

Route::view('/consultar','clientes')->name('rutaconsulta');
*/