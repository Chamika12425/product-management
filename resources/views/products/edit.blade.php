@extends('layouts.app')

@section('content')

    <h1>Edit Product</h1>

    <form action="/products/{{$product->id}}" method="POST">
        
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description:</label>
            <textarea name="description" class="form-control" rows="4" required> {{ $product->description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Price:</label>
            <input type="number" name="price" class="form-control" step="0.01" value= "{{ $product->price }}"required>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Quantity:</label>
            <input type="number" name="quantity" class="form-control" value="{{ $product->quantity }}" required>
        </div>

        <button class="btn btn-primary">Update Product</button>
    </form>

@endsection