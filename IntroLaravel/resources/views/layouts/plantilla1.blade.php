<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>@yield('titulo')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="nav-link {{ request()->routeIs('rutainicio')?"text-warning":""}}" href="{{route('rutainicio')}}">Turista sin Maps</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('rutaformulario')?"text-warning":""}}"  href="{{route('rutaformulario')}}">Registro Clientes</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('rutaconsulta')?"text-warning":""}}" href="{{route('rutaconsulta')}}">Consultar Clientes</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

@yield('contenido')
@yield('contenido2')

</body>
</html>