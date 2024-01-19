<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public function index(){
        $viewData = [];
        $productos=[];

        $viewData["title"] = "Lista de productos";
        $viewData["subtitle"] =  "Listado de productos";
        $viewData["description"] =  "Este es el listado de productos";
        $viewData["author"] = "Desarrollado por: DSW";

        return view("home.products")->with("viewData", $viewData);
    }


}