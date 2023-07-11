@extends('layouts.backend_master')
@section('kontent')
     @include('sweetalert::alert')

<h3>Produk</h1>
    <div class="mb-1">
        <a href="{{url('add-product')}}">
        <button class="btn btn-primary btn-sm w-">Tambah Barang</button>
        </a>
    </div>
    <div class="product-card">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Barang</th>
                <th>Harga / Hari</th>
                <th>Kategori</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $angka = 1;
            @endphp
            @foreach ($products as $product)
            @php
                 $kategori = App\Models\Kategori::where('category_id',$product->category_id)->first();
            
            @endphp
            <tr>
                <td>{{ $angka }}</td>
                <td>{{ $product->product_name }}</td>
                <td>Rp.{{ $product->product_price }}</td>
                <td>{{ $kategori->category_name }}</td>
                <td>
                    @if ($product->product_status  == 1)
                        Aktif
                    @else
                    Tidak Aktif    
                    @endif
                </td>
                <td><a href="{{url('product')}}/{{$product->product_id}}/edit"><button class="btn btn-sm btn-warning">Edit</button></a>
                <a href="{{url('delete-product')}}/{{$product->product_id}}"><button class="btn btn-sm btn-danger">Hapus</button></a></td>
            </tr>
            @php
                $angka++;
            @endphp
            @endforeach
        </tbody>
    </table>
</div>

@endsection