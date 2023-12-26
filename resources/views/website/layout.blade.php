<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Ashion Template">
  <meta name="keywords" content="Ashion, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sttockry</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Cookie&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('website/css/bootstrap.min.css')}}" type="text/css">

  <link rel="stylesheet" href="{{asset('website/css/font-awesome.min.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('website/css/elegant-icons.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('website/css/jquery-ui.min.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('website/css/magnific-popup.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('website/css/owl.carousel.min.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('website/css/slicknav.min.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('website/css/style.css')}}" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
  <link href="{{asset('website/serch/css/main.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('website/css/selectize.css')}}" type="text/css">

</head>

<body>
  <div id="preloder">
    <div class="loader"></div>
  </div>
  <div class="offcanvas-menu-overlay"></div>
  <div class="offcanvas-menu-wrapper">
    <div class="offcanvas__close">+</div>
    <!-- <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                    <div class="tip">2</div>
                </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                    <div class="tip">2</div>
                </a></li>
        </ul> -->
    <div class="offcanvas__logo">
      <a href="#"><img src="images/logo.svg" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__auth">
      <a href="login.html">Login</a>
      <a href="#">Register</a>
    </div>
  </div>
  <header class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-1 col-lg-2">
          <a href="{{url('/')}}">
          <img src="{{asset('images/logo.svg')}}" alt="" />
        </a>
        </div>
        <div class="col-xl-6 col-lg-6">

        </div>
        <div class="col-lg-4">
          @if(Auth::user())
          <div class="header__right">
            <a class="site-btn" href="{{route('upload.file')}}">Upload</a>
            <a class="site-btn" href="{{route('upload.file')}}">Dashboard</a>
          </div>
          @else
          <div class="header__right">
            <a class="site-btn" href="{{url('login')}}">Login</a>
            <a class="site-btn" href="{{url('register')}}">Register</a>
          </div>
          @endif
        </div>
      </div>
      <div class="canvas__open">
        <i class="fa fa-bars"></i>
      </div>
    </div>
  </header>


  <div id="content" class="">
    @yield('content')

  <footer class="footer" style="background: radial-gradient(circle,rgba(153, 12, 143, 0.7) 10%,#000000 100%);">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-7">
          <div class="footer__about">
            <div class="footer__logo">
              <a href="index-2.html"><img src="{{asset('images/logo.svg')}}" alt=""></a>
            </div>
            <p style="color: white;">Explore a vast collection of high-quality images, photos, videos and sounds on our website dedicated to online sales.</p>
            <div class="footer__payment">
              <a href="#"><img src="img/payment/payment-1.png" alt=""></a>
              <a href="#"><img src="img/payment/payment-2.png" alt=""></a>
              <a href="#"><img src="img/payment/payment-3.png" alt=""></a>
              <a href="#"><img src="img/payment/payment-4.png" alt=""></a>
              <a href="#"><img src="img/payment/payment-5.png" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-5">
          <div class="footer__widget">
            <h6>Quick links</h6>
            <ul>
              <li><a href="#">About</a></li>
              <li><a href="#">Blogs</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="{{route('privacy.policy')}}">Privacy Policy</a></li>
              <li><a href="{{route('cookie.policy')}}">Cookie Policy</a></li>

            </ul>
          </div>
        </div>

        <div class="col-lg-4 col-md-8 col-sm-8">
          <div class="footer__newslatter">
            <h6>Socials</h6>
            <div class="footer__social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-youtube-play"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>

            <div class="review-star mt-3 footer__about" style="margin-top: 25px;">

              <h6 class="reviewBtn">Reviews</h6>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">

          <div class="footer__copyright__text">
            <p>Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This is made
              with <i class="fa fa-heart" aria-hidden="true"></i> by BM SOLUTION</a>
            </p>
          </div>

        </div>
      </div>
    </div>
  </footer>

 










  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
      <div class="search-close-switch">+</div>
      <form class="search-model-form">
        <input type="text" id="search-input" placeholder="Search here.....">
      </form>
    </div>
  </div>
  <script src="{{asset('website/custom.js')}}"></script>
  <script src="{{asset('website/serch/js/extention/choices.js')}}"></script>
  <script>
    const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

  </script>
  
  <script src="{{asset('website/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('website/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('website/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('website/js/jquery-ui.min.js')}}"></script>
  <script src="{{asset('website/js/mixitup.min.js')}}"></script>
  <script src="{{asset('website/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('website/js/jquery.slicknav.js')}}"></script>
  <script src="{{asset('website/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('website/js/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('website/js/main.js')}}"></script>

  @yield('lastScripts')

</body>

</html>