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
                <th>Status Pembayaran</th>
                <th>Status Peminjaman</th>
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
                 <td>

                        @if ($transaksi->status_admin == 0)
                        <p style="color:red">Belum bayar</p>
                        @elseif($transaksi->status_admin == 1)
                        <p style="color:rgb(255, 234, 0)">Pending</p>
                        @elseif($transaksi->status_admin == 2)
                        <p style="color:rgb(157, 255, 127)">Sudah Bayar</p>
                        
                    @endif

                </td>
                <td>

                     @if ($transaksi->status == 0)
                        <p style="color:red">Dipinjam</p>
                        @elseif($transaksi->status == 1)
                        <p style="color:rgb(255, 234, 0)">Pending</p>
                        @elseif($transaksi->status == 2)
                        <p style="color:rgb(157, 255, 127)">Sudah Dikembalikan</p>
                        
                    @endif

                </td>
                <td>{{ $transaksi->created_at }}</td>
                </td>
                <td>
                <a href="{{url('transaksi-detail')}}/{{$transaksi->kode_unik}}"><button class="btn btn-sm btn-success">Detail</button></a>
                    @if ($transaksi->status == 1)
                        <a href="{{url('acc')}}/{{$transaksi->id}}"><button class="btn btn-sm btn-success">Acc</button></a>
                    @endif
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