@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-2">Transaksi</h4>
    <a href="{{ route('transaksi.create') }}" class="btn btn-primary px-4">Buat transaksi Baru</a>

    <div class="table-responsive mt-5">
        <table>
        <table>
        <table-striped class="table-hover">
            <thead>
                <tr>
                   
                    <th  >Product Name</th>
                    <th>Quantity.</th>
                    <th>User</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $item)
                    <tr>
                        
                        <td>
                            {{ $item->products->name }}
                        </td>
                        <td>
                            Rp. {{ number_format($item->quantity) }}
                        </td>
                        <td>
                            {{ $item->users->name }}
                        </td>
                        <td>
                            
                            <form action="{{ route('transaksi.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                
                                <button class="btn btn-danger" type="submit" onclick="confirm('Kamu Yakin Ngapus Ini!?!')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table-striped>
    </div>
</div>
@endsection    
                    