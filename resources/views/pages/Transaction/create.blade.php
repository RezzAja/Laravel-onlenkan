@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-5"> Data{{ $product ->$title}} </h4>

    <form action="{{ route('produk.update', $product->$id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="produk" >Produk</label>
            <select name="product_id" id="produk" class="form-control" required></select>
            @foreach($product as $items )
                <option value="{{ $item->id }}">{{ $item->name }} ({{ $item->stock }})</option>
            @endforeach
        </div>
        <div class="mb-3">
            <label for="quantity" >Quantity</label>
            <input type="number" name="quantity" class="form-control" id="quantity" value="{{ $product->$price }}" required >
        </div>
       
           
            <button type="submit" class="btn btn-primary">Submit </button>
            <a href="{{ route('transaksi.index') }}" class="btn btn-light px-3">back</a>
        </div>
          @if(session('error'))
          <div class="alert aler-danger mb-3">
            {{ session('error') }}
          </div>
            
          @endif
        
    </form>
</div>
@endsection