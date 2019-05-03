<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Triperia Wisata Apps</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('front/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ asset('front/css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('front/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ asset('front/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/jquery.timepicker.css')}}">
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('front/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css')}}">
    <style type="text/css">
        #myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

      #mymap {
          border:1px solid red;
          width: 100%;
          height: 500px;
      }
    </style>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
     
      <a class="navbar-brand" href="index.html">
                            <table>
                                <tr>
                                    <td rowspan="2"><img height="9.5%"src="/front/images/logo.png"></td>
                                    <td style="padding-top:1px; padding-left:5px; ">TRIPERIA</td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom:19px; padding-left:5px; font-size:11px; font-family:Trebuchet MS;" >SISTEM INFORMASI WISATA<br>DESTINASI PARIWISATA INDONESIA</td>
                                </tr>
                            </table>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item "><a href="/" class="nav-link"><i class="fa fa-home"></i> Home</a></li>
          <li class="nav-item"><a href="/frontwisata" class="nav-link"><i class="fa fa-map-o"></i> Wisata</a></li>
          <li class="nav-item"><a href="/menu/event" class="nav-link"><i class="fa fa-calendar"></i> Events</a></li>
          <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-address-book-o"></i> About</a></li>
          <li class="nav-item"><a href="{{ route('login') }}" class="nav-link"><i class="fa fa-sign-in"></i> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('/front/images/bg_4.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Events</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Event &amp; Wisata</h1>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">
      @foreach ($event as $rowevents)
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="/detail/event/{{ $rowevents->eventid }}" class="block-20" style="background-image: url(/image/{{ $rowevents->gambar}});">
              </a>
              <div class="text p-4 d-block">
                <span class="tag">{{ $rowevents->judulevent }}</span>
                <h3 class="heading mt-3"><a href="/detail/event/{{ $rowevents->eventid }}">{{ $rowevents->juduldeskripsi }}</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">{{ $rowevents->created_at }}</a></div>
                  <div><a href="#">{{ $rowevents->UserAkun->name }}</a></div>
                </div>
              </div>
            </div>
          </div>
         @endforeach          
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">dirEngine</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Service</a></li>
                <li><a href="#" class="py-2 d-block">Terms and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Become a partner</a></li>
                <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
       <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('front/js/jquery.min.js')}}"></script>
  <script src="{{ asset('front/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset('front/js/popper.min.js')}}"></script>
  <script src="{{ asset('front/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('front/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset('front/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('front/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('front/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('front/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('front/js/aos.js')}}"></script>
  <script src="{{ asset('front/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{ asset('front/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{ asset('front/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{ asset('front/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('front/js/google-map.js')}}"></script>
  <script src="{{ asset('front/js/main.js')}}"></script>
    
  </body>
</html>