@extends('layouts.app')
@section('title', 'Product Index Page')
@section('content')
    <h5 class="mb-4">Edit Product</h5>
    <form action="{{ route('products.update', $product->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>

            <input type="text" name="name" class="form-control" id="name" value="{{ $product->name }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>

            <input type="number" name="price" class="form-control" id="price" value="{{ $product->price }}">
        </div>
        <div class="mb-3">
            <label for="stocks" class="form-label">Stock</label>

            <input type="number" name="stocks" class="form-control" id="stocks" value="{{ $product->stocks }}">
        </div>
        <div class="d-flex">
            <button type="submit" class="btn btn-primary

me-3">Simpan</button>

            <a href="{{ route('products.index') }}" type="button" class="btn btn-danger">Batal</a>
        </div>
    </form>
@endsection
