@extends('layouts.app')

@section('content')

    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        
        @csrf
        @method('PUT')

        @include('products._form')
        
        <button class="btn btn-primary">Update Product</button>
    </form>

@endsection