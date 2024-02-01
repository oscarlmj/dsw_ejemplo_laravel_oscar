<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AdminProductController extends Controller
{
    public $errors = [];

    
    
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        $viewData["products"] = Product::all();
        return view('admin.product.index')->with("viewData", $viewData);
    }

    public function store (Request $request)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";

        $request->input('name','price','description');

        try {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:1',
            'description' => 'required|min:10|max:100',
        ]);
        } catch (ValidationException $e) {
            $errorsArray = $e->errors();
            return view('admin.product.index',['errors' => $errorsArray]) ->with("viewData", $viewData);
        }

        $newProduct = new Product();
        $newProduct->name = $request->input('name');
        $newProduct->description = $request->input('description');
        $newProduct->image = "NULL";
        $newProduct->price = $request->input('price');

        $newProduct->save();
        $viewData["products"] = Product::all();


        return view('admin.product.index')->with("viewData", $viewData);
    }
}