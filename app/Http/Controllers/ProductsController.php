<?php

namespace App\Http\Controllers;

class ProductsController extends Controller
{
        public $productos = [
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

    public function index(){
        $viewData = [];
        
        $viewData["title"] = "Lista de productos";
        $viewData["subtitle"] =  "Listado de productos";
        $viewData["description"] =  "Este es el listado de productos";
        $viewData["author"] = "Desarrollado por: DSW";
        $viewData["productos"] = $this->productos;

        return view("home.products")->with("viewData", $viewData);
    }


    public function show($id)
    {
        $viewData = [];
    
        $viewData["title"] = "Detalles del Producto";
        $viewData["subtitle"] = "Información detallada del producto";
        $viewData["description"] = "Detalles del producto seleccionado";
        $viewData["author"] = "Desarrollado por: DSW";
    
        // Utilizamos find para obtener el primer elemento que coincida con el ID
        $viewData["producto"] = collect($this->productos)->firstWhere('id', $id);
    
        return view('home.product')->with("viewData", $viewData);
    }
}