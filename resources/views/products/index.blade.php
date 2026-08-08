@extends('layouts.app')

@section('content')
    
    <h1>Products</h1>

    <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

        @if($products->isEmpty())
            <tr>
                <td colspan="5">No products found.</td>
            </tr>                
        @else
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>
                        
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>                    
                    
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                        </form>

                    </td>    
                </tr>
            @endforeach
        @endif

        </tbody>

    </table>
    
    <div class="mt-5">
        {{ $products->links() }}
    </div>

@endsection