<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products=Product::all();
        return view ('products.index', ['products'=>$products]);
}

public function show($producto){
    return view('products.show', ['producto'=>$producto]);
}

public function create(){
    return view('products.create');
}

public function store(Request $request){
    print_r($request->all());
}

}
