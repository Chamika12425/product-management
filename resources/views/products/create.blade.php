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


    <form action="{{ route('products.store') }}" method="POST">
        
        @csrf
        
        @include('products._form')

        <button class="btn btn-primary">Save Product</button>
    </form>

@endsection