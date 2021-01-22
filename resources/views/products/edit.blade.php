@extends('layouts.app')
 {{-- /*app.blade.php*/ --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Adding New Products</h1>

            <form method="POST" action="{{route('products.update', ['product' => $product->id])}}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name"
                    value="{{$product->name}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Color</label>
                    <input type="text" name="color"
                    value="{{$product->color}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description"
                    value="{{$product->description}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Season</label>
                    <select class="form-control" name="season">
                        <option value="">Choose Season</option>
                        <option value="summer"
                            {{$product->season == 'summer' ? 'selected=selected' : ''}}
                        >Summer</option>
                        <option value="spring"
                            {{$product->season == 'spring' ? 'selected=selected' : ''}}
                        >Spring</option>
                        <option value="autumn"
                            {{$product->season == 'autumn' ? 'selected=selected' : ''}}
                        >Autumn</option>
                        <option value="winter"
                            {{$product->season == 'winter' ? 'selected=selected' : ''}}
                        >Winter</option>

                    </select>
                <div class="form-group">
                    <label>Size</label>
                    <input type="text" name="size"
                    value="{{$product->size}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" name="price"
                    value="{{$product->price}}" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>
@endsection
