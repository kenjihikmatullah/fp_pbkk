@extends('sections.page')

@section('content')
<!-- our furniture section start -->
<div class="our_furniture_section layout_padding">
    <div class="container">
      <h1 class="about_taital">Our <span style="background-color: #fee421; color: #fff; padding: 0px 5px;">Products</span></h1>
      <p class="market_text">Berbagai produk merchandise BMW yang bisa <i>boost up</i> semangat berkaryamu setiap harinya</p>
    </div>
  </div>
  <div class="our_section_2">
    <div class="row">
      <div class="col-sm-5">
        <div class="images_bt">
          <div class="image_left">
            <button class="seemore_bt">SEE MORE</button>
          </div>
          <div class="image_right">
            <div class="image_9"><img src="images/img-9.png"></div>
            <div class="new_text">NEW DESIGN</div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="image"><img src="images/img-4.png"></div>
      </div>
      <div class="col-sm-3">
        <div class="image"><img src="images/img-5.png"></div>
      </div>
    </div>
    <div class="images_section_2">
      <div class="row">
        @foreach($products as $i => $product)
        <div class="col-sm-4">
          <div class="image_6">
            <img src="{{ $i == 0 ? 'images/img-6.png' : 'images/img-7.png' }}">
          </div>

          <p>{{ $product->name }}</p>
          <p>{{ 'Rp.' . $product->price }}</p>
          
          <button onclick="window.location.href='{{ url('/products/' . strval($product->id)) }}'" class="seemore_bt" style="margin-top: 16px;">
            DETAIL          
          </button>
        </div>
        @endforeach

        <!-- <div class="col-sm-4">
          <div class="image_6"><img src="images/img-6.png"></div>
        </div>
        <div class="col-sm-4">
          <div class="image_6"><img src="images/img-7.png"></div>
        </div>
        <div class="col-sm-4">
          <div class="image_6"><img src="images/img-8.png"></div>
        </div> -->
      </div>
    </div>
  </div>
  <!-- our furniture section end -->
@endsection('content')

@section('more_js')
<script>
</script>
@endsection