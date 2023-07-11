@extends('layouts.backend_master')
@section('kontent')
<h3>Detail Booking</h1>
    <div class="mb-1">
        <button class="btn btn-primary btn-sm w-" onclick="window.print()">print</button>
    </div>
    <div class="product-card">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Barang</th>
                <th>Harga / Hari</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @php
                $angka = 1;
            @endphp
            @foreach ($charts as $chart)
            @php
                 $product = App\Models\Product::where('product_id',$chart->id_barang)->first();
            
            @endphp
            <tr>
                <td>{{ $angka }}</td>
                <td>{{ $product->product_name }}</td>
                <td>Rp.{{ $product->product_price }}</td>
                <td>{{ $chart->jumlah }}</td>
            </tr>
            @php
                $angka++;
            @endphp
            @endforeach
        </tbody>
        <td>Total : Rp. {{$totalHarga}}</td><tr></tr>
        <td>Kode Resi :{{$resi->resi}}</td>
    </table>
</div>

@endsection