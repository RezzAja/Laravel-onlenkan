@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-2">All Data Products</h4>
    <a href="{{ route('produk.create') }}" class="btn btn-primary px-4">Buat Produk Baru</a>

    <div class="table-responsive mt-5">
        <table>
        <table>
        <table-striped class="table-hover">
            <thead>
                <tr>
                    <th>Image.</th>
                    <th  >Product Name</th>
                    <th>Price.</th>
                    <th>Stock</th>
                    <th >Description.</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            <img src="{{ url('storage/' . $product->image) }}"
                             style="width: 50px; height: 50px; object-fit:cover;" alt="">

                        </td>
                        <td>
                            {{ $product->name }}
                        </td>
                        <td>
                            Rp. {{ number_format($product->price) }}
                        </td>
                        <td>
                             {{ number_format($product->stock) }}
                        </td>
                        <td>
                            {{ $product->description }}
                        </td>
                        <td>
                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning text-white">Edit</a>
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger" type="submit" onclick="confirm('Kamu Yakin Ngapus Ini!?!')">Hapus</button>
                            <form action="{{ route('produk.destroy', $product->id) }}" method="post"></form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table-striped>
    </div>
</div>
@endsection    
                    