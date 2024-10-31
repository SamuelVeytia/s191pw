<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body class="d-flex flex-column min-vh-100">
    
<nav  class="navbar navbar-expand-lg" style= "background-color: indigo;" >
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation ">
      <span class="navbar-toggler-icon" ></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarNavAltMarkup" >
      <div class="navbar-nav">
        <a class="nav-link  {{ request()->routeIs('rutaprincipal')?"text-warning":""  }}" aria-current="page" href=" {{ route('rutaprincipal')  }}" style="color: white">Principal</a>
        <a class="nav-link  {{ request()->routeIs('rutaregistro')?"text-warning":""  }}" href="{{ route('rutaregistro')  }}" style="color: white">Registro</a>
      </div>
    </div>
  </div>
</nav>

@yield('contenido')

  <footer  class="mt-auto" style="background-color: indigo">

    <div class="text-center p-3">
      <t style="color: white">Lobos solitarios ©Copyright 29/10/2024 </t>
    </div>

  </footer>

</div>



</body>
</html>