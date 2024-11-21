<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //Importación de Query Builder
use Carbon\Carbon; 
Use App\Http\Requests\validadorCliente;

class clienteController extends Controller
{

    public function home() {
        return view('inicio');

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultaClientes= DB::table('cliente')->get();
        return view('clientes', compact('consultaClientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     *Aquí preparo el insert
     */
    public function store(validadorCliente $request)
    {
        DB::table('cliente')->insert([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        $usuario= $request->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);

        return to_route('rutaformulario');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
    $cliente = DB::table('cliente')->where('id', $id)->first();
    return view('edit_clientes', compact('cliente'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(validadorCliente $request, $id)
    {
        DB::table('cliente')
        ->where('id',$id)
        ->update([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "updated_at"=>Carbon::now(),
        ]);
        return to_route('rutaconsulta');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    DB::table('cliente')
    ->where('id', $id)
    ->delete();

    session()->flash('destroy', 'El cliente ha sido eliminado exitosamente.');
    return redirect()->route('rutaconsulta');
    }
}
