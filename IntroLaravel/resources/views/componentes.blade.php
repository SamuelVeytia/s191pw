@extends('layouts.plantilla1')

@section('titulo','Componentes Blade')
@section('contenido')

    <x-Card encabezado="componente1" titulo="titulo1" textoBoton="Guardar"> 
        Contenido de tarjeta 1
    </x-Card>

    <x-Card encabezado="componente2" titulo="titulo1" textoBoton="Guardar"> 
        Contenido de tarjeta 2
    </x-Card>

@endsection
