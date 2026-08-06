@extends('layouts.app')

@section('content')

    <h1>Add Product</h1>

    <form action="/products" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description:</label>
            <textarea name="description" class="form-control" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Price:</label>
            <input type="number" name="price" class="form-control" step="0.01" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Quantity:</label>
            <input type="number" name="quantity" class="form-control" required>
        </div>

        <button class="btn btn-primary">Add Product</button>
    </form>

@endsection