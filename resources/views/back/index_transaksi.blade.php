@extends('layouts.backend_master')
@section('kontent')
     @include('sweetalert::alert')

<h3>Transaksi</h1>
    <div class="product-card">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>User</th>
                <th>Resi</th>
                <th>Status</th>
                <th>Tanggal Transaksi</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $angka = 1;
            @endphp
            @foreach ($transaksis as $transaksi)
            <tr>
                <td>{{ $angka }}</td>
                <td>{{ $transaksi->user->name }}</td>
                <td>{{ $transaksi->resi }}</td>
                <td>{{ $transaksi->status }}</td>
                <td>{{ $transaksi->created_at }}</td>
                </td>
                <td>
                <a href="{{url('transaksi-detail')}}/{{$transaksi->kode_unik}}"><button class="btn btn-sm btn-success">Detail</button></a>
                <a href="{{url('delete-transaksi')}}/{{$transaksi->id}}"><button class="btn btn-sm btn-danger">Hapus</button></a></td>
            </tr>
            @php
                $angka++;
            @endphp
            @endforeach
        </tbody>
    </table>
</div>

@endsection