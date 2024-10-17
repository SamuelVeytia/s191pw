<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    public function home() {
        return view('inicio');

    }
    public function insert() {
        return view('formulario');
        
    }
    public function select() {
        return view('clientes');
        
    }
    public function procesarCliente(Request $peticion) {

        return $peticion->all();
        //respuesta a la petición POST
        //return 'La info del cliente llego al contorlador';
        //obtener la ip de de donde se hace la peticion
        //return $peticion->ip();
        //obtener la ruta de donde se hace la petición
        //return $peticion->path();
        //obtener la url
        //return $peticion->url();
        
    }
}
