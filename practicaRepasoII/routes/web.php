<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorvistas;

Route::get('/',[controladorvistas::class,'inicio'])->name('rutaprincipal');
Route::get('/registrolibro',[controladorvistas::class,'formulario'])->name('rutaregistro');

Route::post('/registrar',[controladorvistas::class,'registrar'])->name('rcompletado');

