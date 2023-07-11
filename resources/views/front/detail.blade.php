@extends('layouts.frontend_master')
@section('kontent')
     @include('sweetalert::alert')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>

<div class="product-card">
  <div class="d-flex">
  <img src="{{asset('produk')}}/{{$product->product_image}}" class="card-img-left" alt="Gambar" style="width:40%">
    <div class="card-body">
      <div class="text-left ms-5">
        <p class="card-text">{!!$product->product_description!!}</p>
        <br>
        <div class="d-flex">
          <form action="{{ route('booking.store') }}" id="booking-form" method="POST">
            @csrf
            <div class="form-group">
              <label for="jumlah">Jumlah Barang:</label><br>
              <input type="number" id="jumlah" name="jumlah" required class="form-control-sm" width="1">
              <input type="hidden" id="" name="id_barang"  class="form-control-sm" width="1" value="{{$product->product_id}}">
                @if (auth()->check())
                    <input type="hidden" id="" name="id_user"  class="form-control-sm" width="1" value="{{auth()->user()->id}}">
                @endif
              <button type="submit" class="btn btn-primary btn-sm rounded" id="booking-button">Booking Sekarang</button>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
</div>

<script>
  // Function to check if the user is logged in
  function checkLogin() {
    // Replace this condition with your own logic to check if the user is logged in
    // For example, you can check if a session variable exists or if the user is authenticated
    var isLoggedIn = {{ auth()->check() ? 'true' : 'false' }};

    // Return the result
    return isLoggedIn;
  }

  // Event listener for the Booking Sekarang button
  document.getElementById('booking-button').addEventListener('click', function() {
    // Check if the user is logged in
    var isLoggedIn = checkLogin();
    // If the user is not logged in, show SweetAlert
    if (!isLoggedIn) {
      Swal.fire({
        title: 'Error',
        text: 'Anda harus login untuk melakukan booking!',
        icon: 'error',
        confirmButtonText: 'OK'
      });
    } else {
      var jumlahInput = document.getElementById('jumlah');
      if (jumlahInput && jumlahInput.value.trim() === '') {
        Swal.fire({
          title: 'Error',
          text: 'Jumlah harus diisi!',
          icon: 'error',
          confirmButtonText: 'OK'
        });
      
      // If the user is logged in, submit the form
      document.getElementById('booking-form').submit();
    }
  };
  })
  // Prevent form submission on Enter key press
  document.addEventListener('DOMContentLoaded', function() {
    var jumlahInput = document.getElementById('jumlah');
    if (jumlahInput) {
      jumlahInput.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
          event.preventDefault();
        }
      });
    }
  });
</script>

@endsection