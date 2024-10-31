    @extends('layouts.plantilla')
    @section('contenido')
   <div class="container mt-5 col-md-6">

   @session('correcto')
   <script>
                Swal.fire({
                title: "Todo correcto",
                text: "{{ $value }}",
                icon: "success"
                });
   </script>
   @endsession

   <form  method="POST" action="/registrar">
        @csrf
        <div>
        <label for="isbn">ISBN:</label>
        <input type="text"  name="isbn"  value="{{old('isbn')}}">
        <small class="text-danger fst-italic">{{ $errors->first('isbn') }}</small>
        </div>
<br>
        <div>
        <label for="titulo">{{ __('Título:')}}</label> 
        <input type="text"  name="titulo"  value="{{old('titulo')}}">
        <small class="text-danger fst-italic">{{ $errors->first('titulo') }}</small>
        </div>
<br>
        <div>
        <label for="autor">{{ __('Autor:')}}</label>
        <input type="text"  name="autor"  value="{{old('autor')}}">
        <small class="text-danger fst-italic">{{ $errors->first('autor') }}</small>
        </div>
<br>
        <div>
        <label for="paginas">{{ __('Páginas:')}}</label>
        <input type="text"  name="paginas"  value="{{old('paginas')}}">
        <small class="text-danger fst-italic">{{ $errors->first('paginas') }}</small>
        </div>
<br>
        <div>
        <label for="año">{{ __('Año:')}}</label>
        <input type="text" name="año"  value="{{old('año')}}">
        <small class="text-danger fst-italic">{{ $errors->first('año') }}</small>
        </div>
<br>   
        <div>
        <label for="editorial">{{ __('Editorial:')}}</label>
        <input type="text"  name="editorial"  value="{{old('editorial')}}">
        <small class="text-danger fst-italic">{{ $errors->first('editorial') }}</small>
        </div>
<br>
<div>
        <label for="correo">{{ __('Correo de la editorial:')}}:</label>
        <input type="text"  name="correo"  value="{{old('correo')}}">
        <small class="text-danger fst-italic">{{ $errors->first('correo') }}</small>
        </div>
<br>
        <button type="submit" class="btn btn-primary btn-lg" style="background-color: indigo; border-color: black">{{ __('Registrar')}}</button>

        
    </form>
    </div>
    @endsection
