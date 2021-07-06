@extends('sections.page')

@section('more_css')
<style>
  .my-container {
    margin-top: 700px;
    padding: 24px;
  }

  .product {
    display: flex;
    gap: 24px;
  }

  .photo {
    max-width: 200px;
    height: auto;
  }

  p {
    margin: 0;
  }

  .summary {
    margin-top: 36px;
    max-width: 50vw;
  }

  .grand-total {
    font-weight: bold;
  }
</style>
@endsection

@section('content')
<div class="our_furnite_section layout_padding">
  <div>
    <form action="{{ route('order.store') }}" method="POST">
      @csrf

      <div class="my-container">
        @foreach($products as $product)
        <div class="product">
          <img class="photo" src="{{ url('images/img-6.png') }}">

          <div>
            <h3 class="name">
              {{ $product->name }}
            </h3>

            <input value="{{ $product->quantity }}" name="productQtys[]" type="hidden" />
            <input name="productIds[]" value="{{ $product->id }}" type="hidden" />

            <p>
              Qty: {{ $product->quantity }}
            </p>
            <p>
              Harga satuan: {{ 'Rp.' . $product->price }}
            </p>

            <p>Berat satuan: {{ $product->weight }} gr</p>
          </div>
        </div>
        @endforeach

        <div class="summary">
          <p>Opsi Pembayaran: Transfer Bank</p>
          <p>Metode Pengiriman: Kurir Toko</p>

          <p>
            Harga Total Product: Rp.{{ $productsPrice }}
          </p>

          <p>
            Berat Total: {{ $totalWeight }}
          </p>
          <p>
            Ongkir: Rp.{{ $shipping_fee }}
          </p>

          <p class="grand-total">
            Grand Total: Rp.{{ $total }}
          </p>

          <div style="margin-top: 24px;">
            <div class="form-group">
              <label for="receiverName">Nama Penerima</label>
              <input class="form-control" id="receiverName" name="receiverName">
            </div>

            <div class="form-group">
              <label for="receiverPhone">Nomor HP Penerima</label>
              <input class="form-control" id="receiverPhone" name="receiverPhone">
            </div>

            <div class="form-group">
              <label for="receiverAddress">Alamat Penerima</label>
              <input class="form-control" id="receiverAddress" name="receiverAddress">
            </div>
          </div>

          <button type="submit" class="seemore_bt" style="margin-top: 24px; max-width: 300px;">Buat Pesanan</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection