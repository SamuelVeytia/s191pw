@extends('layouts.plantilla1')

@section('titulo', 'Registros Clientes')

@section('contenido2')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="container mt-5 col-md-8">

    @if (session('destroy'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '¡Eliminado!',
            text: '{{ session("destroy") }}',
            timer: 3000,
            showConfirmButton: false
        });
    </script>
    @endif
    

    @session('update')
    <script>
      Swal.fire({
        title: "Actualización correcta",
        text: '{{ $value }}',
        icon: "success"});
    </script>
@endsession





    @foreach ($consultaClientes as $cliente)
    <div class="card text-justify font-monospace mt-3">
        
        <div class="card-header fs-5 text-primary">
            {{ $cliente->nombre }} {{ $cliente->apellido }}
        </div>

        <div class="card-body">
            <h5 class="fw-bold"> {{ $cliente->correo }}</h5>
            <h5 class="fw-medium"> {{ $cliente->telefono }} </h5>
            <p class="card-text fw-light"></p>
        </div>

        <div class="card-footer text-muted">
            <a href="{{ route('clientesedit', $cliente->id) }}" class="btn btn-warning btn-sm"> {{ __('Actualizar') }} </a>
            
            <form id="form-eliminar-{{ $cliente->id }}" action="{{ route('clientesdestroy', $cliente->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-danger btn-sm" onclick="confirmarEliminacion('{{ $cliente->id }}', '{{ $cliente->nombre }}')">
                    Eliminar
                </button>
            </form>
        </div>

    </div>
    @endforeach
</div>

<script>
    function confirmarEliminacion(id, nombre) {
        Swal.fire({
            title: `¿Estás seguro de eliminar a ${nombre}?`,
            text: "Esta acción no se puede deshacer.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Enviar el formulario correspondiente
                document.getElementById(`form-eliminar-${id}`).submit();
            }
        });
    }
</script>

@endsection
