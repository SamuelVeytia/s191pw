<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorUsuarios;


class controladorVistas extends Controller
{
    public function inicio() {
        return view('formUsuarios');

    }
    public function procesarUsuario(validadorUsuarios $peticion) {

        //redireccion enviado en msj de session
        $usuario= $peticion->input('correo');
        session()->flash('exito','Se guardo el usuario: '.$usuario);

        return to_route('rutainicio');
    
}
}
