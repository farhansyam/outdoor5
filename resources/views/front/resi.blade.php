@extends('layouts.frontend_master')
@section('kontent')
     @include('sweetalert::alert')

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
                <td>

                        @if ($resi->status_admin == 0)
                        <p style="color:red">Belum bayar</p>
                        @elseif($resi->status_admin == 1)
                        <p style="color:rgb(255, 234, 0)">Pending</p>
                        @elseif($resi->status_admin == 2)
                        <p style="color:rgb(157, 255, 127)">Sudah Bayar</p>
                        
                    @endif

                </td>
                <td>

                     @if ($resi->status == 0)
                        <p style="color:red">Dipinjam</p>
                        @elseif($resi->status == 1)
                        <p style="color:rgb(255, 234, 0)">Pending</p>
                        @elseif($resi->status == 2)
                        <p style="color:rgb(157, 255, 127)">Sudah Dikembalikan</p>
                        
                    @endif

                </td>
                <td>{{ $resi->created_at }}</td>
                <td><a href="{{url('detailresi')}}/{{$resi->kode_unik}}"><button class="btn btn-sm btn-primary">Detail</button></a>
                    @if ($resi->status_admin == 0)
                    <a href="{{url('detailresi')}}/{{$resi->kode_unik}}"><button class="btn btn-sm btn-primary">Bayar</button></a>
                    @endif
                     @if ($resi->status == 0)
                    <a href="{{url('balikin')}}/{{$resi->id}}"><button class="btn btn-sm btn-primary">Balikin</button></a>
                    @endif
                </td>
            </tr>
            @php
                $angka++;
            @endphp
            @endforeach
        </tbody>
    </table>
</div>

@endsection