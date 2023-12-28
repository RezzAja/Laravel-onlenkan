@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-5"> Data{{ $product ->$title}} </h4>

    <form action="{{ route('produk.update', $product->$id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="image" ">Gambar</label>
            <input type="file" accept="image/*" name="image" class="form-control" id="image" required >
            <span class="text-secondary">Jika tidak ingin mengganti gambar, Jangan diisi ya!!</span>
        </div>
        <div class="mb-3">
            <label for="name" >Nama Produk</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $product->$title }}" required>
        </div>
        <div class="mb-3">
            <label for="price" >Harga</label>
            <input type="number" name="price" class="form-control" id="price" value="{{ $product->$price }}" required >
        </div>
        <div class="mb-3">
            <label for="sstock" >Stock</label>
            <input type="number" name="stock" class="form-control" id="stock" value="{{ $product->$price }}" required >
        </div>
        <div class="mb-3">
            <label for="description" >Deskripsi</label>
            <textarea  name="description" cols="30" rows="3" class="form-control" id="description" required >{{ $product->description }}</textarea>
        </div>
        <div class="d-flex align-item-center gap-2">
           
            <button type="submit" class="btn btn-primary">Submit Edit</button>
            <a href="{{ route('produk.index') }}" class="btn btn-light px-3">back</a>
        </div>
          
        
    </form>
</div>
@endsection