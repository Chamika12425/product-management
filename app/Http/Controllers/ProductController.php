<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::latest();

        if ($request->filled('search')) {

            $query->where(
                'name',
                'like',
                '%' . $request->search . '%'
            );

        }

        $products = $query
            ->paginate(10)
            ->withQueryString();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreProductRequest $request)
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
        
        //*Since we are using the StoreProductRequest, the validation is already handled there. You can see it in store(StoreProductRequest $request) method, so we don't need to validate the request here again. The validation rules are defined in the StoreProductRequest class.
        // $request->validate([
        //     'name' => 'required|max:255',
        //     'description' => 'nullable|max:500',
        //     'price' => 'required|numeric|min:0',
        //     'quantity' => 'required|integer|min:0',
        // ]);
        
        // Replaced $request->all() with $request->validated() to only get the validated data from the request.
        Product::create($request->validated());
        
        return redirect()->route('products.index')->with('success', 'Product Created Successfully');
    }

    public function show(Product $product)
    {   
        //Method 1: Using the findOrFail method to find the product by id
        //Use for public function show(string $id)
        // $product = Product::findOrFail($id);

        //Method 2: Using Route Model Binding to find the product by id
        //Use for public function show(Product $product)
        // Only below line is needed when using route model binding

        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {   
        //Method 1: Using the findOrFail method to find the product by id
        //Use for public function edit(string $id)
        // $product = Product::findOrFail($id);

        //Method 2: Using Route Model Binding to find the product by id
        //Use for public function edit(Product $product)
        // Only below line is needed when using route model binding

        return view('products.edit', compact('product'));
    }

    public function update(UpdateProductRequest $request, Product $product)   
    {   
        //Remove since we use the UpdateProductRequest for validation
        // $request->validate ([
        //     'name' => 'required|max:255',
        //     'description' => 'nullable|max:500',
        //     'price' => 'required|numeric|min:0',
        //     'quantity' => 'required|integer|min:0',

        // ]);

        // Removed the following line since we are using route model binding to get the product instance
        // $product = Product::findOrFail($id);

        $product->update($request->validated());
        return redirect()->route('products.index')->with('success', 'Product Updated Successfully');
    }

    public function destroy(Product $product)
    {
        // Removed the following line since we are using route model binding to get the product instance
        // $product = Product::findOrFail($id);

        $product->delete();
        return redirect('/products')->with('success', 'Product Deleted Successfully!');

    }
}   
