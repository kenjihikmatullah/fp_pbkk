@extends('admin.layouts.app')

@section('content')
<div class="bg-primary container-fluid pb-6 pt-5">
  <div class="row">
    <div class="col-12 mt-4">
      <div class="card-body">

        <!-- Body -->
        <form method="POST" action="{{ route('admin.product.store') }}">
          @csrf

          <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name">
          </div>

          <div class="form-group">
            <textarea class="form-control" name="description" placeholder="Description..."></textarea>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="weight" placeholder="Weight (gr)"  type="number">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="price" placeholder="Price" type="number">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="stock" placeholder="Stock"  type="number">
          </div>

          <!-- Button -->
          <button class="btn btn-outline-primary bg-white" type="submit">
            Create
          </button>

        </form>

      </div>
    </div>
  </div>
</div>
@endsection