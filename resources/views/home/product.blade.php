<!-- Usamos, como plantilla, la vista layouts.app (/resources/views/layouts/app.blade.php) -->
@extends('layouts.app')                                 

<!-- Inyectamos el texto que contiene el título en el yield "title" -->

<!-- Inyectamos el texto con el contenido de la página en el yield "content" -->
@section('content')                                     
@section("title", $viewData["title"])
@section("subtitle",$viewData["subtitle"])

<!-- Inyectamos el texto con el contenido de la página en el yield "content" -->
@section('content') 
<div class="producto">
<img src="{{ asset($producto['imagen']) }}" class="img-fluid rounded" width=600px>
<div>
<h4>{{ $producto['nombre'] }}</h2>
    <p><b>{{$producto['descripcion']}}</b></p>
    <h5>{{$producto['precio']}}</h4>
</div>


</div>
@endsection