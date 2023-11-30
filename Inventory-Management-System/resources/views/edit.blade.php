@extends('layouts.master')

@section('content')
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" min="0" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}" required>
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" step="0.01" min="0" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
@endsection
