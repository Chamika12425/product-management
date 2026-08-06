@extends('layouts.app')

@section('content')

    <h1>Products</h1>

    <a href="/products/create" class="btn btn-primary">Add Product</a>

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
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
                </tr>
            @endforeach
        @endif

        </tbody>

    </table>
    
@endsection