@extends('layouts.backend_master')
  
@section('kontent')
    <div class="product-card">
      <form action="{{ route('kategori.update', $data->category_id) }}" method="POST">
            @csrf
            @method('PUT')
  <div class="form-group">
    <label for="nama_produk">Nama Kategori:</label>
    <div class="input-wrapper">
      <input type="text" required id="kategori" name="kategori" value="{{$data->category_name}}" placeholder="Masukkan Nama Produk" class="form-control">
    </div>
    <br>
  </div>
    <br>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
 <script>
   tinymce.init({
     selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
     plugins: 'code table lists',
     toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
   });
 </script>
@endsection