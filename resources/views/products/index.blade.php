@extends('layouts.app')
 {{-- /*app.blade.php*/ --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>all products</h1>
            <a href="{{route('products.create')}}" class="btn btn-primary">Add Product</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Color</th>
                        <th scope="col">Size</th>
                        <th scope="col">Price</th>
                        <th scope="col">Link</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->color}}</td>
                        <td>&euro;{{ number_format($product->price, 2, ',', ' ')}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                            <a href="{{route('products.show', ['product' => $product->id])}}" class="btn btn-info">Details</a>
                            <a href="{{route('products.edit', ['product' => $product->id])}}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
