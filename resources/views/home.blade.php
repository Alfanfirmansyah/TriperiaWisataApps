@extends('template.master')
@section('content')
<div class="container">

                    <div id="card-stats">
                        <div class="row">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title"><i class="mdi-maps-directions-ferry"></i> Data Wisata</p>
                                        <h4 class="card-stats-number">{{$count1}}</h4>
                                        <p class="card-stats-compare"><i class=""></i> Jumlah <span class="green-text text-lighten-5">Data Wisata</span>
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content pink lighten-1 white-text">
                                        <p class="card-stats-title"><i class="mdi-image-style"></i> Data Kategori</p>
                                        <h4 class="card-stats-number">{{$count3}}</h4>
                                        <p class="card-stats-compare"> Jumlah <span class="deep-purple-text text-lighten-5">Data Kategori Wisata</span>
                                        </p>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content blue-grey white-text">
                                        <p class="card-stats-title"><i class="mdi-communication-location-on"></i> Data Wilayah</p>
                                        <h4 class="card-stats-number">{{$count2}}</h4>
                                        <p class="card-stats-compare"><i class=""></i> Jumlah <span class="blue-grey-text text-lighten-5">Data Wilayah Provinsi</span>
                                        </p>
                                    </div>
                                 
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content purple white-text">
                                        <p class="card-stats-title"><i class="mdi-action-favorite"></i> Data Event</p>
                                        <h4 class="card-stats-number">{{$count4}}</h4>
                                        <p class="card-stats-compare"><i class=""></i> Jumlah <span class="purple-text text-lighten-5">Data Event Wisata</span>
                                        </p>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card stats end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!--card widgets start-->
                    <div id="card-widgets">
                        <div class="row">

                           

                            

                           

                        </div>

                        <div class="row">
                            <!-- blog card -->
                          

                            <!-- product-card -->
                            

                            <!-- map-card -->
                            <div class="col s12 m12 l12">
                                <div class="map-card">
                                    <div class="card">
                                    
                                          <div id="mymap"></div>

                                        <div class="card-content">                    
                                          
                                            <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Listing Map Marker Wisata</a>
                                            </h4>
                                            <p class="blog-post-content">Copyright © 2018 by Google Maps</p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Company Name LLC <i class="mdi-navigation-close right"></i></span>                   
                                            <p>Here is some more information about this company. As a creative studio we believe no client is too big nor too small to work with us to obtain good advantage.By combining the creativity of artists with the precision of engineers we develop custom solutions that achieve results.Some more information about this company.</p>
                                            <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Manager Name</p>
                                            <p><i class="mdi-communication-business cyan-text text-darken-2"></i> 125, ABC Street, New Yourk, USA</p>
                                            <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989</p>
                                            <p><i class="mdi-communication-email cyan-text text-darken-2"></i> support@geekslabs.com</p>                    
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <!--card widgets end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!--work collections start-->
                 
                    <!--work collections end-->

                    <!-- Floating Action Button -->
                 
                    <!-- Floating Action Button -->

                </div>


                @endsection
                