<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

//**************************************************************************************** */
// Rutas para trabajar con el controlador vistas 

// Route::get('/',[ControladorVistas::class, 'home'])->name ('rutainicio');
// //Route::get('/formulario',[ControladorVistas::class, 'insert'])->name ('rutaformulario');
// Route::get('/clientes',[ControladorVistas::class, 'select'])->name ('rutaconsulta');
// Route::post('/enviarCliente',[ControladorVistas::class,'procesarCliente'])->name('rutaenviar');

// // Route::view('component','componentes')->name('rutacomponentes');

// // ****************************************************************************************  

//  //Rutas para trabajar con el clienteController 

// Route::get('/cliente/create',[clienteController::class, 'create'])->name ('rutaformulario');


Route::get('/',[ClienteController::class, 'home'])->name ('rutainicio');
Route::resource('cliente',ClienteController::class);









/*
Route::view('/','inicio')->name('rutainicio');

Route::view('/formulario','formulario')->name('rutaformulario');

Route::view('/consultar','clientes')->name('rutaconsulta');
*/




