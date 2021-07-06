<!--header section start -->
<div class="header_section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-lg-3">
        <div class="logo">
          <h2><b>BMWM</b></h2>
          <!-- <img src="images/logo.png"> -->
        </div>
      </div>
      <div class="col-sm-4 col-lg-5">
        <div class="menu-area">
          <nav class="navbar navbar-expand-lg ">
            <!-- <a class="navbar-brand" href="#">Menu</a> -->
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link active" href="index.html">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="#" href="#">
                  <a class="nav-link" href="{{ route('products') }}">Products</a>
                </li>
                <li class="nav-item" href="#">
                  <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <div class="col-sm-8 col-lg-4">
        <div class="togle_3">
          <div class="left_main">
            <div class="menu_main">
              @if(!auth()->check())
              <a href="{{ route('login.get') }}"><i class="fa fa-fw fa-user"></i>Login</a>
              <a href="{{ route('register.get') }}"><i class="fa fa-fw fa-user"></i>Register</a>
              @else
              <span><i class="fa fa-fw fa-user"></i>{{ auth()->user()->name }}</span>
              <button id="logoutBtn"><i class="fa fa-fw fa-lock"></i>Logout</button>

              <form id="logoutForm" style="display: none;" action="{{ route('logout') }}" method="POST">
                @csrf
              </form>
              @endif
            </div>
          </div>
          <div class="middle_main">
            <div class="shoping_bag"><img src="{{ url('images/search-icon.png') }}"></div>
          </div>
          <div class="right_main">
            <a href="{{ route('cart') }}">
              <div class="togle_main"><img src="{{ url('images/shopping-bag.png') }}"></div>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- banner section start -->
  <div class="banner_section layout_padding">
    <div class="container-fluid">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-sm-1">
                <p class="number_tetx">02/3</p>
                <div class="line"><img src="{{ url('images/linr-icon.png') }}"></div>
                <p class="number_tetx">02/3</p>
                <div class="left_img"><img src="{{ url('images/img-2.png') }}"></div>
              </div>
              <div class="col-sm-5">
                <h1 class="furniture_text">2021</h1>
                <h1 class="trends_text">TRENDS</h1>
                <h1 class="furniture_text">BMW Classic</h1>
                <P class="lorem_text">Berbagai merchanise BMW untuk menemani kamu berkarya setiap harinya</P>
                <button class="more_bt">MORE INFO</button>
                <button class="furniture_bt">PRODUCT</button>
              </div>
              <div class="col-sm-6">
                <div><img src="{{ url('images/img-1.png') }}"></div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row">
              <div class="col-sm-1">
                <p class="number_tetx">02/3</p>
                <div class="line"><img src="images/linr-icon.png"></div>
                <p class="number_tetx">02/3</p>
                <div class="left_img"><img src="images/img-2.png"></div>
              </div>
              <div class="col-sm-5">
                <h1 class="furniture_text">2021</h1>
                <h1 class="trends_text">TRENDS</h1>
                <h1 class="furniture_text">BMW Classic</h1>
                <P class="lorem_text">Berbagai merchanise BMW untuk menemani kamu berkarya setiap harinya</P>
                <button class="more_bt">MORE INFO</button>
                <button class="furniture_bt">PRODUCT</button>
              </div>
              <div class="col-sm-6">
                <div><img src="images/img-1.png"></div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row">
              <div class="col-sm-1">
                <p class="number_tetx">02/3</p>
                <div class="line"><img src="images/linr-icon.png"></div>
                <p class="number_tetx">02/3</p>
                <div class="left_img"><img src="images/img-2.png"></div>
              </div>
              <div class="col-sm-5">
                <h1 class="furniture_text">2021</h1>
                <h1 class="trends_text">TRENDS</h1>
                <h1 class="furniture_text">BMW Classic</h1>
                <P class="lorem_text">Berbagai merchanise BMW untuk menemani kamu berkarya setiap harinya</P>
                <button class="more_bt">MORE INFO</button>
                <button class="furniture_bt">PRODUCT</button>
              </div>
              <div class="col-sm-6">
                <div><img src="images/img-1.png"></div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </div>
</div>
<!-- banner section end -->

@section('more_js')
<script>
  $(document).ready(function() {
    $('#logoutBtn').click(function() {
      $('#logoutForm').submit();
    });
  });
</script>
@endsection