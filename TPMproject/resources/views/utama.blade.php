{{-- @extends('layouts.layouthome')

@section('container')
<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top"  src="{{URL::asset('/img/jaket.png')}}" alt="profile Pic" height="420" width="200">
              <div class="card-body">
                <p class="card-text">Jaket Baseball</p>
                <p class="card-text">Rp300.000,00</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tambah ke Keranjang</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top"  src="{{URL::asset('/img/rakte.jpg')}}" alt="profile Pic" height="420" width="200">
              <div class="card-body">
                <p class="card-text">Raket yonex speed lightning</p>
                <p class="card-text">Rp830.000,00</rp></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tambah ke keranjang</button>
                  </div>
                  <small class="text-muted">12 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top"  src="{{URL::asset('/img/apple.jpg')}}" alt="profile Pic" height="420" width="200">
              <div class="card-body">
                <p class="card-text">Iphone 12 Pro Max</p>
                <p class="card-text">Rp20.299.000,00</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tambah ke Keranjang</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top"  src="{{URL::asset('/img/xiaovv.jpg')}}" alt="profile Pic" height="420" width="200">
              <div class="card-body">
                <p class="card-text">Web Cam Xiaovv</p>
                <p class="card-text">Rp240.000,00</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tambah ke Keranjang</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top"  src="{{URL::asset('/img/alkaline.jpg')}}" alt="profile Pic" height="420" width="200">
              <div class="card-body">
                <p class="card-text">ABC BATERAI ALKALIN AAA/ A3 ISI 7pcs</p>
                <p class="card-text">Rp15.000,00</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tambah ke Keranjang</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top"  src="{{URL::asset('/img/aorus.jpg')}}" alt="profile Pic" height="420" width="200">
              <div class="card-body">
                <p class="card-text">VGA Gigabyte GeForce RTX 3090 Aorus Master 2.0 | 24GB GDDR6X | Ampere</p>
                <p class="card-text">Rp45.990.000,00</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tambah ke Keranjang</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="{{URL::asset('/img/nike.jpeg')}}" alt="profile Pic" height="420" width="600">
              <div class="card-body">
                <p class="card-text">Nike "Blazer" mid '77 vintage sneakers</p>
                <p class="card-text">Rp1.100.000,00</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tambah ke Keranjang</button>
                  </div>
                  <small class="text-muted">11 month</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="{{URL::asset('/img/router.jpg')}}" alt="profile Pic" height="420" width="600">
              <div class="card-body">
                <p class="card-text">Tenda AC10U AC1200 MU-MIMO Smart Dual-Band Gigabit WiFi</p>
                <p class="card-text">Rp579.000,00</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tambah ke Keranjang</button>
                  </div>
                  <small class="text-muted">3 week</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="{{URL::asset('/img/MSI.jpg')}}" alt="profile Pic" height="420" width="600">
              <div class="card-body">
                <p class="card-text">MSI LAPTOP MODERN 14-B11MO-622 I7-1165G7 | 8GB | 512GB | UMA | 14″ | W10</p>
                <p class="card-text">Rp11.999.000,00</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Tambah ke Keranjang</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
@endsection --}}

@extends('layouts.layoutcart')

@section('content2')

<div class="row">
    @foreach($products as $product)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ $product->image }}" alt="">
                <div class="caption">
                    <h4>{{ $product->name }}</h4>
                    <p>{{ $product->description }}</p>
                    <p><strong>Price: </strong> {{ $product->price }}$</p>
                    <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
