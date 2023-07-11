@extends('layouts.backend_master')
@section('kontent')
     @include('sweetalert::alert')

<h3>Users</h1>
    <div class="product-card">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $angka = 1;
            @endphp
            @foreach ($users as $user)
            <tr>
                <td>{{ $angka }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                </td>
                <td>
                <a href="{{url('delete-user')}}/{{$user->id}}"><button class="btn btn-sm btn-danger">Hapus</button></a></td>
            </tr>
            @php
                $angka++;
            @endphp
            @endforeach
        </tbody>
    </table>
</div>

@endsection