<?php

namespace App\Http\Controllers\Admin;

use App\Models\Producto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        $viewData["products"] = Producto::all();
        return view('admin.product.index')->with("viewData", $viewData);
    }

    public function store (Request $request)
    {
        $request->input('name','price','description');
        $request->validate(["name"=>"required:5"], ["price"=>"max:3"],["description"=>"max:100"]);
        $newProduct = new Producto();
        $newProduct = setName($request->input["name"]);
        $newProduct = setPrice($request->input["price"]);
        $newProduct = setDescription($request->input["description"]);
    }
}