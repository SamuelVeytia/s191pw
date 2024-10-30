<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorvistas extends Controller
{
    public function inicio(){
        return view('principal');
    }
    public function formulario(){
        return view('registrolibro');
    }
}
