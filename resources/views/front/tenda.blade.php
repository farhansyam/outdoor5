@extends('layouts.frontend_master')
@section('greeting')
              <p class="title-content mb-2" id="greeting">
    
@endsection
@section('kontent')
 <section class="d-flex flex-column gap-4">
        <div class="d-flex justify-content-between align-items-center gap-3">
          <h4 class="title-section-content">Produk Tenda</h4>
        </div>
        <div class="d-flex gap-4 flex-wrap">
            @foreach ($products as $product)
                     <div class="product-card">
            <img
              src="./produk/{{$product->product_image}}"
              alt="Nike Red"
              width="260"
              height="180"
            />
            <div class="product-detail pt-3">
              <div>
                {{-- <p class="label-detail mb-1">7 Colours</p> --}}
                <p class="title-detail">{{$product->product_name}}</p>
              </div>
              </button>
            </div>
            <div class="product-detail pt-4">
              <div>
                <p class="label-detail mb-1">Price:</p>
                <p class="price-detail">Rp {{$product->product_price}} / Hari</p>
              </div>
      
              <a href="{{url('product')}}/{{$product->product_id}}">
                  <button class="buy-product button btn-rounded active">
                    Detail
                 </button>
              </a>
            </div>
          </div>
            @endforeach
       
    
        </div>
      </section>
@endsection