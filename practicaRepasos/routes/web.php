<?php

use App\Http\Controllers\controladorConvertidor;
use Illuminate\Support\Facades\Route;

Route::get('/',[controladorConvertidor::class,'home'])->name('rutaportada');
Route::get('/repaso1',[controladorConvertidor::class,'conversor'])->name('rutarepaso');

Route::post('/convertidor',[controladorConvertidor::class,'convertidor'])->name('convertidor');

