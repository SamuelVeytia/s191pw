<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::view('/','inicio')->name('rutainicio');

Route::view('/formulario','formulario')->name('rutaformulario');

Route::view('/consultar','clientes')->name('rutaconsulta');

Route::view('component','componentes')->name('rutacomponentes');



