@extends('layouts.app')
 {{-- /*app.blade.php*/ --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Product {{$product->id}}</h1>
            <ul>
                <li>Nome: {{$product->name}}</li>
                <li>Price: {{$product->price}}</li>
                <li>Color: {{$product->color}}</li>
                <li>Description: {{$product->description}}</li>
                <li>Season: {{$product->season}}</li>
            </ul>
        </div>
    </div>

</div>
@endsection
