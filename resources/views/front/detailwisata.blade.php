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
<div class="hero-wrap" style="background-image: url('/front/images/8.jpg');
							  height:170px">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="hotel.html">Hotel</a></span> <span>Hotel Single</span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Detail Wisata</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="single-slider owl-carousel">
                  @forelse($slider as $row)
    <div class="item">
                        <div class="hotel-img" style="height:350px;background-image: url(/image/{{ $row->gambarwisata}})"></div>
                    </div>
@empty
     <div class="item">
                        <div class="hotel-img" style="height:350px;background-image: url(/demo/images/no.png)"></div>
                    </div>
@endforelse
                  
                </div>
            </div>
            @foreach($detailwisata as $row2)
            <div class="col-md-7 hotel-single mt-4 mb-5 ftco-animate">
                <span>Our Best Wisata &amp; Indonesia</span>
                <h2>{{ $row2->namawisata}}</h2>
                <p class="rate mb-5">
                    <span class="loc"><i class="icon-map"></i> Lokasi : {{ $row2->lokasi }}</span>
                    <br>
                    <span class="loc"><i class="icon-map-marker"></i> Latitude &nbsp &nbsp : &nbsp {{ $row2->latitude }} 
                    <br>
                    <span class="loc"><i class="icon-map-marker"></i> Longitude : &nbsp {{ $row2->longitude }} 
                     <span style="font-weight: bold" class="price per-price"></span>
                <hr style="margin-top:-23px">
                <h5 style="font-size:15px">Deskripsi : </h5>
                <p>{{ $row2->deskripsiwisata }}</p>
            </div>
             @endforeach
            <hr>
            <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                <h4 class="mb-5">Maps Lokasi {{ $row2->namawisata}}</h4>
				
                    {!! $row2->embedmaps!!}


                    </div>
                </div>
            </div>
        
        </div>
        <!-- .col-md-8 -->
    </div>
    </div>
</section>
<!-- .section -->




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

 

