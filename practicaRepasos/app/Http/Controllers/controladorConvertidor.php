<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorConvertidor extends Controller
{
    public function home(){
        return view('portada');
    }
    public function conversor(){
        return view('repaso1');
    }
    public function convertidor( request $request){
        $entrada=$request->input('entrada1');
        $s1=$request->input('s1');
        $resultado=0;

        switch ($s1) {
            case 'MBGB':
                $resultado = $entrada / 1024; 
                break;
            case 'GBMB':
                $resultado = $entrada * 1024; 
                break;
            case 'GBTB':
                $resultado = $entrada / 1024; 
                break;
            case 'TBGB':
                $resultado = $entrada * 1024;
                break;
            default:
                echo "Ponlo bien pa.";
                exit;
        }
        return number_format($resultado);
    }
}
