<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio</title>
    @vite(['resources/js/app.js'])
    <style>
        body, html {
            height: 100%;
        }
        .full-height {
            height: 100vh;
        }
    </style>
</head>
<body>

    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height">

        <h1 class="display-1"> {{ __('Bienvenido Turista')}} </h1>
        <p>{{ __('Presiona el botón para iniciar...')}}</p>

        <a href="{{route('cliente.create')}}" class="btn btn-primary"> {{ __('Ir al registro')}}</a>
        <a href="{{route('cliente.index')}}" class="btn btn-danger"> {{ __('Ir al registro')}}</a>

    </div>

</body>
</html>