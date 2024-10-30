    @extends('layouts.plantilla')
    @section('contenido')
   <div class="container mt-5 col-md-6">

   <form  method="POST" action="/registrar">
        @csrf
        <div>
        <label for="isbn">ISBN:</label>
        <input type="number"  name="isbn" required value="{{old('isbn')}}">
        </div>
<br>
        <div>
        <label for="titulo">Título:</label> 
        <input type="text"  name="titulo"  value="{{old('titulo')}}">
        </div>
<br>
        <div>
        <label for="autor">Autor:</label>
        <input type="text"  name="autor"  value="{{old('autor')}}">
        </div>
<br>
        <div>
        <label for="paginas">Páginas:</label>
        <input type="number"  name="paginas"  value="{{old('paginas')}}">
        </div>
<br>
        <div>
        <label for="año">Año:</label>
        <input type="text" name="año"  value="{{old('año')}}">
        </div>
<br>   
        <div>
        <label for="editorial">Editorial:</label>
        <input type="text"  name="editorial"  value="{{old('editorial')}}">
        </div>
<br>
        <div>
        <label for="email">Email de editorial:</label>
        <input type="email"  name="email "  value="{{old('email')}}">
        </div>
<br>
        <button type="submit" class="btn btn-primary btn-lg" style="background-color: indigo; border-color: black">Registrar</button>

        
    </form>
    </div>
    @endsection
