@extends('layouts.backend_master')
  
@section('kontent')
    <div class="product-card">
        <form class="form" action="{{route('product-post')}}" method="POST" enctype="multipart/form-data">
            @csrf
  <div class="form-group">
    <label for="nama_produk">Nama Produk:</label>
    <div class="input-wrapper">
      <input type="text" required id="nama_produk" name="product_name" placeholder="Masukkan Nama Produk" class="form-control">
    </div>
    <br>
  <div class="form-group">
    <label for="nama_produk">kategori-:</label>
    <div class="input-wrapper">
        <select class="form-control" name="product_category" id="">
            @php
            use App\Models\Kategori;
            $kategoris = Kategori::all();
            @endphp
            @foreach ($kategoris as $kategori)
                <option value="{{$kategori->category_id}}">{{$kategori->category_name}}</option>
            @endforeach
        </select>
    </div>
  </div>
    <br>

  <div class="form-group">
    <label for="harga">Harga:</label>
    <div class="input-wrapper">
      <input type="number" required id="harga" name="product_price" placeholder="Masukkan Harga" class="form-control">
    </div>
  </div>
    <br>

  <div class="form-group">
    <label for="gambar">Gambar:</label>
    <div class="input-wrapper">
      <input type="file" required id="gambar" name="product_image" class="form-control">
    </div>
  </div>
    <br>

  <div class="form-group">
    <label for="status">Status:</label>
    <div class="input-wrapper">
      <select id="status" name="status" class="form-control">
        <option value="1">Aktif</option>
        <option value="0">Nonaktif</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="deskripsi">Deskripsi:</label>
    <div class="input-wrapper">
      <textarea id="myeditorinstance" name="product_description" rows="5" class="form-control"></textarea>
    </div>
  </div>
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