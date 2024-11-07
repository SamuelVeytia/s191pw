<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>

</head>
<body>

    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>

    <div class="container  col-md-4">

    <form method="POST" action="/formularioU">
        @csrf

@session('exito')
        <script>
          Swal.fire({
          title: "Respuesta del servidor",
          text: '{{ $value }}',
          icon: "success"});
        </script>
@endsession



        <div class="mb-3">
            <label  class="form-label">Correo: </label>
            <input type="text" class="form-control" name="correo" value="{{old('correo')}}" >
            <small class="text-danger fst-italic">{{ $errors->first('correo') }}</small>
        </div>

        <div class="mb-3">
            <label class="form-label">Contraseña: </label>
            <input type="text" class="form-control" name="passw" value="{{old('passw')}}">
            <small class="text-danger fst-italic">{{ $errors->first('passw') }}</small>
        </div>                

        <div class="mb-3">
            <label  class="form-label">Edad: </label>
            <input type="text" class="form-control" name="edad" value="{{old('edad')}}" >
            <small class="text-danger fst-italic">{{ $errors->first('edad') }}</small>
        </div>



        <button type="submit" class="btn btn-danger "> Guardar Usuario</button>

    </form>


</div>


</body>
</html>