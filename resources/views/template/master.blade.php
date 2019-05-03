<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.0
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Materialize - Material Design Admin Template</title>
    

    <!-- Favicons-->
    <link rel="icon" href="/demo/images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="/demo/images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->
 <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAafgoWn7nSfw4o5ctci8yvyWOQmAD93g4&libraries=places"></script>
<link href="{{ asset('demo/js/plugins/animate-css/animate.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CORE CSS-->    
    <link href="{{ asset('demo/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('demo/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
     <link href="{{ asset('demo/js/plugins/data-tables/css/jquery.dataTables.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('demo/css/custom/custom-style.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
     <link href="{{ asset('demo/js/plugins/dropify/css/dropify.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{ asset('demo/js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('demo/js/plugins/jvectormap/jquery-jvectormap.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('demo/js/plugins/chartist-js/chartist.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('demo/js/plugins/sweetalert/dist/sweetalert.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
     <style type="text/css">
        

      #mymap {
          border:1px solid red;
          width: 100%;
          height: 500px;
      }
      .pac-container { z-index: 100000 !important; }
        input[type="date"]:before {
    content: attr(placeholder) !important;
    color: #444;
    margin-right: 0.5em;
  }
  input[type="date"]:focus:before,
  input[type="date"]:valid:before {
    content: "";
  }
    </style>



</head>

<body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        @include('template.header')
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                @include('template.sidebar')
            </aside>
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                @yield('content')
                <!--end container-->
            </section>
            <!-- END CONTENT -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START RIGHT SIDEBAR NAV-->
    
            <!-- LEFT RIGHT SIDEBAR NAV-->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer">
      @include('template.footer')
    </footer>
    <!-- END FOOTER -->


    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="{{asset('demo/js/plugins/jquery-1.11.2.min.js')}}"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="{{asset('demo/js/materialize.js')}}"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{asset('demo/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    

    <!-- chartist -->
    <script type="text/javascript" src="{{asset('demo/js/plugins/chartist-js/chartist.min.js')}}"></script>   

    <!-- chartjs -->
    <script type="text/javascript" src="{{asset('demo/js/plugins/chartjs/chart.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('demo/js/plugins/chartjs/chart-script.js')}}"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="{{asset('demo/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('demo/js/plugins/sparkline/sparkline-script.js')}}"></script>
    
    <!-- google map api -->
 

    <!--jvectormap-->
    <script type="text/javascript" src="{{asset('demo/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('demo/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script type="text/javascript" src="{{asset('demo/js/plugins/jvectormap/vectormap-script.js')}}"></script>
     <script type="text/javascript" src="{{asset('demo/js/plugins/dropify/js/dropify.min.js')}}"></script>
    
    <!--google map-->
    
 <script type="text/javascript" src="{{asset('demo/js/plugins/data-tables/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('demo/js/plugins/data-tables/data-tables-script.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{asset('demo/js/plugins.js')}}"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="{{asset('demo/js/custom-script.js')}}"></script>
    <script type="text/javascript" src="{{asset('demo/js/plugins/sweetalert/dist/sweetalert.min.js')}}"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove:  'Supprimer',
                    error:   'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('.dropify-event').dropify();

            drEvent.on('dropify.beforeClear', function(event, element){
                return confirm("Do you really want to delete \"" + element.filename + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element){
                alert('File deleted');
            });
        });
    </script>
    <script type="text/javascript">


    var locations = <?php print_r(json_encode($data)) ?>;


    var mymap = new GMaps({
      el: '#mymap',
      lat: -7.983908,
      lng: 112.621391,
      zoom:7
    });


    $.each( locations, function( index, value ){
      mymap.addMarker({
        lat: value.latitude,
        lng: value.longitude,
        title: value.namawisata,
        click: function(e) {
          alert('This is '+value.namawisata+'');
        }
      });
   });


  </script>
  <script type="text/javascript">
      var map = new google.maps.Map(document.getElementById('map-canvas')
        ,{
            center:{
                lat:27.72,
                lng:85.36
            },
            zoom:15

        }
        );

      var marker = new google.maps.Marker({
        position: {
            lat:27.72,
                lng:85.36
            },
            map: map,
            draggable:true
      });

    var input = document.getElementById('searchmap');
        var searchBox = new google.maps.places.SearchBox(input);
       

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });


        google.maps.event.addListener(searchBox,'places_changed',function(){
            var places = searchBox.getPlaces();
            var bounds = new google.maps.LatLngBounds();
            var i, place;
            for(i=0; place=places[i];i++){
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location);

            }
            map.fitBounds(bounds);
            map.setZoom(15);

        });

        google.maps.event.addListener(marker,'position_changed',function(){

            var lat = marker.getPosition().lat();
            var lng = marker.getPosition().lng();

            $('#lat').val(lat);
            $('#lng').val(lng);
        });
  </script>
    @include('dashboard.confirm')
    @include('kategori.confirmkat')
    @include('wisata.confirmwt')
    @include('galeri.confirmgl')
    @include('events.confirmev')
    <!-- Toast Notification -->
    
    
</body>

</html>