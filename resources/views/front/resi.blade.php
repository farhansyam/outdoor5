@extends('layouts.frontend_master')
@section('kontent')
<h3>Keranjang Booking</h1>
    <div class="mb-1">
        <a href="{{url('chekout')}}">
    </a>
    </div>
    <div class="product-card">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Resi</th>
                <th>Status Pembayaran</th>
                <th>Status Peminjaman</th>
                <th>Tanggal</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $angka = 1;
            @endphp
            @foreach ($resis as $resi)
            <tr>
                <td>{{ $angka }}</td>
                <td>{{ $resi->resi }}</td>
                <td>{{ $resi->status_admin }}</td>
                <td>{{ $resi->status }}</td>
                <td>{{ $resi->created_at }}</td>
                <td><a href="{{url('detailresi')}}/{{$resi->kode_unik}}"><button class="btn btn-sm btn-primary">Detail</button></a>
                <a href="{{url('detailresi')}}/{{$resi->kode_unik}}"><button class="btn btn-sm btn-primary">Print</button></a></td>
            </tr>
            @php
                $angka++;
            @endphp
            @endforeach
        </tbody>
    </table>
</div>

@endsection