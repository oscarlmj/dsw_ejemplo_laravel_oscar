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
        <img src="{{ $viewData['producto']['imagen'] }}" class="img-fluid rounded" width="400px">
        <div>
            <h4>{{ $viewData['producto']['nombre'] }}</h4>
            <p><b>{{ $viewData['producto']['descripcion'] }}</b></p>
            <h5>{{ $viewData['producto']['precio'] }}</h5>
        </div>
    </div>
@endsection