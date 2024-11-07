<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

Route::get('/',[ControladorVistas::class, 'home'])->name ('rutainicio');
Route::get('/formulario',[ControladorVistas::class, 'insert'])->name ('rutaformulario');
Route::get('/clientes',[ControladorVistas::class, 'select'])->name ('rutaconsulta');



Route::post('/enviarCliente',[ControladorVistas::class,'procesarCliente'])->name('rutaenviar');

Route::view('component','componentes')->name('rutacomponentes');


/*
Route::view('/','inicio')->name('rutainicio');

Route::view('/formulario','formulario')->name('rutaformulario');

Route::view('/consultar','clientes')->name('rutaconsulta');
*/




