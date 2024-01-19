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
        <div class="col-md-3 col-lg-3 mb-2">
            <img src="{{ asset("/img/game.png") }}" class="img-fluid rounded">
            <a href="" class="btn bg-primary" id="1">TV</a>
        </div>
        <div class="col-md-3 col-lg-3 mb-2">
            <img src="{{ asset("/img/safe.png") }}" class="img-fluid rounded">
            <a href="" class="btn bg-primary" id="2">iPhone</a>
        </div>
        <div class="col-md-3 col-lg-3 mb-2">
            <img src="{{ asset("/img/submarine.png") }}" class="img-fluid rounded">
            <a href="" class="btn bg-primary" id="3">Chromecast</a>
        </div>
        <div class="col-md-3 col-lg-3 mb-2">
            <img src="{{ asset("/img/game.png") }}" class="img-fluid rounded">
            <a href="/products/" class="btn bg-primary" id="4">Glasses</a>
        </div>
    </div>

@endsection

