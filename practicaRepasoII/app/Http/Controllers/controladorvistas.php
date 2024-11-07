<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorLibro;

class controladorvistas extends Controller
{
    public function inicio(){
        return view('principal');
    }

    public function formulario(){
        return view('registrolibro');
    }

    public function registrar(validadorLibro $peticion){

        $libro= $peticion->input('titulo');
        session()->flash('correcto',"Libro $libro guardado");
        return to_route('rutaregistro');
    }
} 
