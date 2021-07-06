@extends('sections.page')

@section('more_css')
<style>
  .my-container {
    align-items: center;
    display: flex;
    flex-direction: column;
    padding: 24px;
  }
</style>
@endsection

@section('content')
<form action="{{ route('register.post') }}" method="POST">
  @csrf

  <div class="our_furniture_section layout_padding">
    <div class="my-container">
      <div class="form-group">
        <label for="name">Nama</label>
        <input class="form-control" id="name" name="name">
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" id="email" name="email">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" id="password" name="password" type="password">
      </div>

      <button type="submit" class="seemore_bt" style="margin-top: 24px; max-width: 300px;">
        Register
      </button>
    </div>
  </div>
</form>
@endsection