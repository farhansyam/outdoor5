@extends('layouts.frontend_master')
@section('kontent')
     @include('sweetalert::alert')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>

<div class="product-card">
  <div class="d-flex">
    <div class="card-body">
          <form action="{{ route('booking.bayar') }}" id="booking-form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="jumlah">Bukti Bayar:</label><br>
              <input type="file" id="jumlah" name="gambar" required class="form-control-sm" width="1">
              <input type="hidden" id="" name="id_barang"  class="form-control-sm" width="1" value="{{$id}}">
              <button type="submit" class="btn btn-primary btn-sm rounded" id="booking-button">Kirim</button>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
</div>



@endsection