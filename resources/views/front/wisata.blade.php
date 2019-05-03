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
     
      <a class="navbar-brand" href="/">
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
<div class="hero-wrap js-fullheight" style="background-image: url('/front/images/8.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Wisata</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Listing Wisata</h1>
          </div>
        </div>
      </div>
    </div>
   <!-- section Kategori -->
<section class="ftco-section">
		<div class="container">
				<div class="row justify-content-start mb-5 pb-3">
						<div class="col-md-7 heading-section ftco-animate">
							<span class="subheading">Featured</span>
							<h2 class="mb-4"><strong>Kategori</strong> Wisata</h2>
						</div>
						<div class="col-md-12">
						    <p></p>
						</div>
				</div>
			<div class="row d-md-flex" style="margin-top: -100px">
				<div class="col-md-12 ftco-animate p-md-5">
					<div class="row">	
						<div class="col-md-12 nav-link-wrap mb-5">
							
							<!-- link atas-->
							<div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								<a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">Pantai</a>
	
								<a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Gunung</a>
								
							
							</div>
						</div>
							
							<!-- Kategori 1 -->
							<div class="tab-content ftco-animate" id="v-pills-tabContent" style="width: 100%;float: left;">
	
								<div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
									<div class="row">
                                      @foreach ($pantai as $rowpantai)

									

                                        		<div class="col-md-4 ftco-animate">
													<div class="destination">
														<a href="/detail/wisata/{{ $rowpantai->wisataid }}">
															<img src="/image/{{ $rowpantai->gambar}}" width="100%" style="height: 225px;" class="img img-2 d-flex justify-content-center align-items-center">
			
														</a>
														
														<div class="text p-3">
															<div class="d-flex">
																<div class="one">
																	<h3>{{ $rowpantai->namawisata}}</a></h3>
																
																</div>
														
															</div>
															<p>{{ $rowpantai->lokasi}}</p>
															<hr>
															<p class="bottom-area d-flex">
																<span><a href="/detail/wisata/{{ $rowpantai->wisataid }}"><button class="btn btn-sm peach-gradient"><i class="fa fa-map-marker"></i> {{ $rowpantai->Lokasi->namawilayah}}</button></a></span> 
																<span class="ml-auto"><button class="btn btn-sm peach-gradient"><i class="fa fa-search"></i> Lihat Detail</button></span>
															</p>
														</div>


													</div>
												</div>

                                        	@endforeach

												
									</div>
								</div>
	
						<!-- Kategori 2 -->
								<div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
										<div class="row">
                                       @foreach ($gunung as $rowgunung)
	

                                        		<div class="col-md-4 ftco-animate">
													<div class="destination">
														<a href="/detail/wisata/{{ $rowgunung->wisataid }}">
															<img src="/image/{{ $rowgunung->gambar}}" width="100%" style="height: 225px;" class="img img-2 d-flex justify-content-center align-items-center">
			
														</a>
														
														<div class="text p-3">
															<div class="d-flex">
																<div class="one">
																	<h3>{{ $rowgunung->namawisata}}</a></h3>
																
																</div>
																
															</div>
															<p>{{ $rowgunung->lokasi}}</p>
															<hr>
															<p class="bottom-area d-flex">
                                <span><a href="/detail/wisata/{{ $rowgunung->wisataid }}"><button class="btn btn-sm peach-gradient"><i class="fa fa-map-marker"></i> {{ $rowpantai->Lokasi->namawilayah}}</button></a></span> 
                                <span class="ml-auto"><button class="btn btn-sm peach-gradient"><i class="fa fa-search"></i> Lihat Detail</button></span>
                              </p>
														</div>


													</div>
												</div>

                                        	@endforeach
	
											</div>
										</div>
	
									
										
								<!-- Kategori 4 -->
								
								<!-- Kategori 6 -->
						
                                                
                                                
					</div>
				</div>
			</div>
		</div>
	</section>
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
