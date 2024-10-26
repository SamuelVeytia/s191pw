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

        $validacion= $peticion->validate([
            'txtnombre'=>'required|min:3|max:20',
            'txtapellido'=>'required',
            'txtcorreo'=>'required|email:rfc,dns',
            'txttelefono'=>'required',
        ]);
        
        //redireccion enviado en msj de session
        $usuario= $peticion->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('rutaformulario');


        //redireccion usando la ruta
       // return redirect('/');

        //redireccion usando el nombre 
        //return redirect()->route('rutaconsulta');

        //redireccion al origen de la peticion 
        //return back();

        //redireccion con valores adjuntos (variables, arreglos, etc ...)
        //$id=[['usuario'=>'1'],['usuario'=>'2']];
        //return view('formulario', compact('id'));


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
