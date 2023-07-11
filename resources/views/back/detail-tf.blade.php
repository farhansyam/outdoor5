@extends('layouts.backend_master')
  
@section('kontent')
    <div class="product-card">
        <img src="{{asset('produk')}}/{{$resi->gambar}}" alt="">
    </div>
        @endsection