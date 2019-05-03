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

<link href="{{ asset('demo/js/plugins/animate-css/animate.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CORE CSS-->    
    <link href="{{ asset('demo/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('demo/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
     <link href="{{ asset('demo/js/plugins/data-tables/css/jquery.dataTables.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('demo/css/custom/custom-style.css')}}" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{ asset('demo/js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('demo/js/plugins/jvectormap/jquery-jvectormap.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('demo/js/plugins/chartist-js/chartist.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('demo/js/plugins/sweetalert/dist/sweetalert.css')}}" type="text/css" rel="stylesheet" media="screen,projection">


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
                @include('template.sidebaradmin')
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
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>

    <!--jvectormap-->
    <script type="text/javascript" src="{{asset('demo/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('demo/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script type="text/javascript" src="{{asset('demo/js/plugins/jvectormap/vectormap-script.js')}}"></script>
    
    <!--google map-->
    
 <script type="text/javascript" src="{{asset('demo/js/plugins/data-tables/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('demo/js/plugins/data-tables/data-tables-script.js')}}"></script>
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{asset('demo/js/plugins.js')}}"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="{{asset('demo/js/custom-script.js')}}"></script>
    <script type="text/javascript" src="{{asset('demo/js/plugins/sweetalert/dist/sweetalert.min.js')}}"></script>  
    @include('dashboard.confirm')
    @include('kategori.confirmkat')
    <!-- Toast Notification -->
    
    
</body>

</html>