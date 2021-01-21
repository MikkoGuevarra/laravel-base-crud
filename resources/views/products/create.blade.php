@extends('layouts.app')
 {{-- /*app.blade.php*/ --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Adding New Products</h1>

            <form method="POST" action="{{route('products.store')}}">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Color</label>
                    <input type="text" name="color" class="form-control">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" class="form-control">
                </div>
                <div class="form-group">
                    <label>Season</label>
                    <input type="text" name="season" class="form-control">
                </div>
                <div class="form-group">
                    <label>Size</label>
                    <input type="text" name="size" class="form-control">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" name="price" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>
@endsection
