@extends('layouts.plantilla1')

@section('titulo', 'Editar Cliente')

@section('contenido2')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="container mt-5 col-md-8">



    <form action="{{ route('clientesupdate', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
       
        
        <div class="mb-3">
            <label for="txtnombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="txtnombre" name="txtnombre" value="{{ $cliente->nombre }}">
        </div>

        <div class="mb-3">
            <label for="txtapellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="txtapellido" name="txtapellido" value="{{ $cliente->apellido }}">
        </div>

        <div class="mb-3">
            <label for="txtcorreo" class="form-label">Correo</label>
            <input type="email" class="form-control" id="txtcorreo" name="txtcorreo" value="{{ $cliente->correo }}">
        </div>

        <div class="mb-3">
            <label for="txttelefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="txttelefono" name="txttelefono" value="{{ $cliente->telefono }}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
@endsection
