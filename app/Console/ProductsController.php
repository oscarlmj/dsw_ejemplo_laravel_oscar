<?php

namespace App\Http\Controllers;

class ProductsController extends Controller
{
    public function index(){
        $viewData = [];
        $productos = [
            [
                'id' => 1,
                'nombre' => 'Tele',
                'descripcion' => 'Televisión de última generación',
                'imagen' => '/img/game.png',
                'precio' => 799.99,
            ],
            [
                'id' => 2,
                'nombre' => 'iPhone',
                'descripcion' => 'Teléfono inteligente de Apple',
                'imagen' => '/img/safe.png',
                'precio' => 999.99,
            ],
            [
                'id' => 3,
                'nombre' => 'Chromecast',
                'descripcion' => 'Dispositivo de transmisión de medios',
                'imagen' => '/img/submarine.png',
                'precio' => 39.99,
            ],
            [
                'id' => 4,
                'nombre' => 'Glasses',
                'descripcion' => 'Gafas de sol elegantes',
                'imagen' => '/img/game.png',
                'precio' => 149.99,
            ],
        ];
        
        $viewData["title"] = "Lista de productos";
        $viewData["subtitle"] =  "Listado de productos";
        $viewData["description"] =  "Este es el listado de productos";
        $viewData["author"] = "Desarrollado por: DSW";

        return view("home.products", compact('productos'))->with("viewData", $viewData);
    }


    public function show($id)
    {
        $viewData = [];
        $productos = [
            [
                'id' => 1,
                'nombre' => 'Tele',
                'descripcion' => 'Televisión de última generación',
                'imagen' => '/img/game.png',
                'precio' => 799.99,
            ],
            [
                'id' => 2,
                'nombre' => 'iPhone',
                'descripcion' => 'Teléfono inteligente de Apple',
                'imagen' => '/img/safe.png',
                'precio' => 999.99,
            ],
            [
                'id' => 3,
                'nombre' => 'Chromecast',
                'descripcion' => 'Dispositivo de transmisión de medios',
                'imagen' => '/img/submarine.png',
                'precio' => 39.99,
            ],
            [
                'id' => 4,
                'nombre' => 'Glasses',
                'descripcion' => 'Gafas de sol elegantes',
                'imagen' => '/img/game.png',
                'precio' => 149.99,
            ],
        ];

        $producto = $productos[$id-1];
        $viewData["title"] = "Lista de productos";
        $viewData["subtitle"] =  "Listado de productos";
        $viewData["description"] =  "Este es el listado de productos";
        $viewData["author"] = "Desarrollado por: DSW";

        return view('home.product', compact('producto'))->with("viewData", $viewData);
    }
}