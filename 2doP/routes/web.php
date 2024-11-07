<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;


Route::get('/',[controladorVistas::class, 'inicio'])->name('rutainicio');
 
Route::post('/formularioU',[controladorVistas::class,'procesarUsuario']);