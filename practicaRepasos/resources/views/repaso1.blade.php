
@extends('layouts.plantilla')
@section('contenido')
@section('titulo','Conversor')

<h1>Conversor</h1>
<form action="/convertidor" method="POST">
    @csrf
    <Label> Elije la unidad</Label>
    <br>
    <input type="number" name="entrada1" required>
    <select name="s1">
    <option value="MBGB">MB a GB</option>
    <option value="GBMB">GB a MB</option>
    <option value="GBTB">GB a TB</option>
    <option value="TBGB">TB a GB</option>
    </select>
    <br>
    <br>
<button type="submit">Click si eres profe chido</button>
</form>

@endsection