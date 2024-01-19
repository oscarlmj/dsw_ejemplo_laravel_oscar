<!-- Usamos, como plantilla, la vista layouts.app (/resources/views/layouts/app.blade.php) -->
@extends('layouts.app')                                 

<!-- Inyectamos el texto que contiene el título en el yield "title" -->

<!-- Inyectamos el texto con el contenido de la página en el yield "content" -->
@section('content')                                     
@section("title", $viewData["title"])
@section("subtitle",$viewData["subtitle"])

<!-- Inyectamos el texto con el contenido de la página en el yield "content" -->
@section('content') 

    <div class="row">
        
        @foreach($productos as $producto)
        <div class="col-md-3 col-lg-3 mb-2">
            <img src="{{ asset($producto['imagen']) }}" class="img-fluid rounded">
            <a href="{{ route('products.show', ['id' => $producto['id']]) }}" class="btn bg-primary" id="{{ $producto['id'] }}">{{ $producto['nombre'] }}</a>
        </div>
        @endforeach
    </div>

@endsection