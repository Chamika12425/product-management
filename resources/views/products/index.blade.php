@extends('layouts.app')

@section('content')

    <h1>Products</h1>

    <a href="" class="btn-btn-primary">Add Products</a>
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
            <tr>
                <td colspan="5"> Noproducts found.</td>
            </tr>
        </tbody>
    </table>
    
@endsection