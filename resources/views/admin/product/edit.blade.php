@extends('admin.layouts.app')

@section('content')
<div class="bg-primary container-fluid pb-6 pt-5">
  <div class="row">
    <div class="col-12 mt-4">
      <div class="card-body">

        <!-- Body -->
        <form method="POST" action="{{ route('admin.product.update', ['id' => $product->id]) }}">
          @csrf
          @method('PUT')

          <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $product->name }}">
          </div>

          <div class="form-group">
            <textarea class="form-control" name="description" placeholder="Description...">{{ $product->description }}</textarea>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="weight" placeholder="Weight (gr)" type="number"  value="{{ $product->weight }}">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="price" placeholder="Price" type="number" value="{{ $product->price }}">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="stock" placeholder="Stock" type="number" value="{{ $product->stock }}">
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