@extends('layouts.app')

@section('content')

    <h1>Add Product</h1>

    <!-- @if ($errors->any())


            @foreach ($errors->all() as $error)
            <script>
                alert(`{{ implode('\n', $errors->all()) }}`);
            </script>    
            @endforeach

      

    @endif -->


    <form action="/products" method="POST">
        @csrf

        <div class="mb-3">                     
            <label class="form-label">Name:</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
            
            @error('name')
                <div class="invalid-feedback">

                    *{{ $message }}

                </div>
            @enderror    

        </div>

        <div class="mb-3">
            <label class="form-label">Description:</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="4">{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    *{{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Price:</label>
            <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" step="0.01" value="{{ old('price') }}" required>
            @error('price')
                <div class="invalid-feedback">
                    *{{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Quantity:</label>
            <input type="number" name="quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity') }}"  required>
            @error('quantity')
                <div class="invalid-feedback">
                    *{{ $message }}
                </div>
            @enderror
        </div>

        <button class="btn btn-primary">Add Product</button>
    </form>

@endsection