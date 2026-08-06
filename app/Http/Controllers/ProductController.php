<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {   //Method 1: Using the create method to create a new product

        // $products = Product::create([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'price' => $request->price,
        //     'quantity' => $request->quantity
        // ]);

        // return redirect('/products');

        //Method 2: Using the fill method to create a new product
        // $product = new Product();
        // $product->fill($request->all());
        // $product->save();
        // return redirect('/products');

        //Method 3: Using the create method to create a new product
        Product::create($request->all());
        
        return redirect('/products');

    }

    public function show(string $id)
    {

    }

    public function edit(string $id)
    {

    }

    public function update(Request $request, string $id)
    {

    }

    public function destroy(string $id)
    {

    }
}   
