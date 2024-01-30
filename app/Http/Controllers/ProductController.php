<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\HTTP\Request;


class ProductController extends Controller
{

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Productos";
        $viewData["subtitle"] =  "Listado de productos";
        $viewData["products"] = Producto::all();

        return view('product.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $viewData["title"] = "Productos";
        $viewData["subtitle"] =  "Detalle de producto";
        $viewData["product"] = Producto::findOrFail($id);
        return view('product.show')->with("viewData", $viewData);
    }
}
