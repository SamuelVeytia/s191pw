@extends('layouts.plantilla1')

@section('titulo', 'Registros Clientes')

@section('contenido2')


<div class="container mt-5 col-md-8">

<div class="card text-justify font-monospace">
    <div class="card-header fs-5 text-primary">
        Samuel Veytia López
    </div>

    <div class="card-body">
        <h5 class="fw-bold"> samveytia@gmail.com</h5>
        <h5 class="fw-medium"> 4428383638 </h5>
        <p class="card-text fw-lihgter"></p>
    </div>

    <div class="card-footer text-muted">
        <button type="submit" class="btn btn-warning btn-sm"> {{ __('Actualizar')}} </button>
        <button type="submit" class="btn btn-danger btn-sm">{{ __('Eliminar')}}</button>
    </div>

</div>
</div>
@endsection
