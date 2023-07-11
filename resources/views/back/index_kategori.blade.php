@extends('layouts.backend_master')
@section('kontent')
     @include('sweetalert::alert')

<h3>Kategori</h1>
    <div class="mb-1">
        <a href="{{url('add-kategori')}}">
        <button class="btn btn-primary btn-sm w-">Tambah Kategori</button>
        </a>
    </div>
    <div class="product-card">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $angka = 1;
            @endphp
            @foreach ($kategoris as $kategori)
            @php
                 $kategori = App\Models\Kategori::where('category_id',$kategori->category_id)->first();
            
            @endphp
            <tr>
                <td>{{ $angka }}</td>
                <td>{{ $kategori->category_name }}</td>
                </td>
                <td><a href="{{url('kategori')}}/{{$kategori->category_id}}/edit"><button class="btn btn-sm btn-warning">Edit</button></a>
                <a href="{{url('delete-kategori')}}/{{$kategori->category_id}}"><button class="btn btn-sm btn-danger">Hapus</button></a></td>
            </tr>
            @php
                $angka++;
            @endphp
            @endforeach
        </tbody>
    </table>
</div>

@endsection