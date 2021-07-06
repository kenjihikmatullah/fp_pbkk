@extends('sections.page')

@section('more_css')
<style>
  .my-container {
    align-items: center;
    display: flex;
    gap: 36px;
    margin-top: 800px;
  }

  p {
    margin: 0;
  }

  .name {
    font-size: 24px;
    font-weight: bold;
  }

  .descriptionTitle {
    font-size: 14px;
    font-weight: bold;
    margin: 0;
    margin-top: 24px;
  }

  .description {
    margin-bottom: 36px;
  }
</style>
@endsection

@section('content')
<div class="our_furnite_section layout_padding">
  <div>
    <div class="my-container">
      <div>
        <img src="{{ url('images/img-6.png') }}">
      </div>

      <div>
        <h3 class="name">
          {{ $product->name }}
        </h3>

        <p>
          {{ 'Rp.' . $product->price }}
        </p>

        <p class="descriptionTitle">Deskripsi</p>
        <p class="description">
          {{ $product->description }}
        </p>

        <p>Berat: {{ $product->weight }} gr</p>
        <p>Stok: {{ $product->stock }}</p>

        <div style="display:flex; gap: 8px; justify-content: flex-start">
          <form action="{{ route('cart.store') }}" method="POST">
            @csrf

            <input type="number" name="productQtys[]" placeholder="Jumlah" />
            <input name="productIds[]" value="{{ $product->id }}" type="hidden" />
            <button type="submit" class="seemore_bt" style="margin-top: 8px; max-width: 200px;">Tambah ke Keranjang</button>
          </form>

          <form action="{{ route('order.create') }}" method="POST">
            @csrf

            <input type="number" name="productQtys[]" placeholder="Jumlah" />
            <input name="productIds[]" value="{{ $product->id }}" type="hidden" />
            <button type="submit" class="seemore_bt" style="margin-top: 8px; max-width: 200px">Beli</button>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection