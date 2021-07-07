@extends('admin.layouts.app')

@section('content')
<div class="bg-primary container-fluid pb-6 pt-5">
  <div class="row">
    <div class="col-12 mt-4">
      <div class="card-body">

        <!-- Body -->
        <form method="POST" action="{{ route('admin.order.update', ['id' => $order->id]) }}">
          @csrf
          @method('PUT')

          <div class="form-group">
            <label>Harga Total Produk</label>
            <input type="text" class="form-control" disabled value="{{ $order->products_price }}">
          </div>

          <div class="form-group">
            <label>Ongkir</label>
            <input type="text" class="form-control" disabled value="{{ $order->shipping_fee }}">
          </div>

          <div class="form-group">
            <label>Metode Pembayaran</label>
            <input type="text" class="form-control" disabled value="{{ $order->payment_method }}">
          </div>

          <div class="form-group">
            <label>Metode Pengiriman</label>
            <input type="text" class="form-control" disabled value="{{ $order->shipping_option }}">
          </div>

          <div class="form-group">
            <label>Nama Penerima</label>
            <input type="text" class="form-control" name="receiver_name" value="{{ $order->receiver_name }}">
          </div>

          <div class="form-group">
            <label>Nomor HP Penerima</label>
            <input type="text" class="form-control" name="receiver_phone" value="{{ $order->receiver_phone }}">
          </div>

          <div class="form-group">
            <label>Alamat Penerima</label>
            <input type="text" class="form-control" name="receiver_address" value="{{ $order->receiver_address }}">
          </div>

          <div class="form-group">
            <label>No Resi Pengiriman</label>
            <input type="text" class="form-control" name="tracking_number" value="{{ $order->tracking_number }}">
          </div>

          <div class="form-group">
            <label>Status Pesanan</label>
            <input type="text" class="form-control" name="status" value="{{ $order->status }}">
          </div>

          <!-- Button -->
          <button class="btn btn-outline-primary bg-white" type="submit">
            Edit
          </button>

        </form>

      </div>
    </div>
  </div>
</div>
@endsection