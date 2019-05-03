@extends('template.masteradmin')
@section('content')
<div class="container">

                    <!--chart dashboard start-->
                    
                    <!--chart dashboard end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!--card stats start-->
                    <div id="card-stats">
                        <div class="row">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> New Clients</p>
                                        <h4 class="card-stats-number">566</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                    <div class="card-action  green darken-2">
                                        <div id="clients-bar" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content pink lighten-1 white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> New Invoice</p>
                                        <h4 class="card-stats-number">1806</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">from last month</span>
                                        </p>
                                    </div>
                                    <div class="card-action  pink darken-2">
                                        <div id="invoice-line" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content blue-grey white-text">
                                        <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Today Profit</p>
                                        <h4 class="card-stats-number">$806.52</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span class="blue-grey-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                    <div class="card-action blue-grey darken-2">
                                        <div id="profit-tristate" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content purple white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Total Sales</p>
                                        <h4 class="card-stats-number">$8990.63</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
                                        </p>
                                    </div>
                                    <div class="card-action purple darken-2">
                                        <div id="sales-compositebar" class="center-align"></div>
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
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <div id="map-canvas" data-lat="40.747688" data-lng="-74.004142"></div>
                                        </div>
                                        <div class="card-content">                    
                                            <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                                <i class="mdi-maps-pin-drop"></i>
                                            </a>
                                            <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Company Name LLC</a>
                                            </h4>
                                            <p class="blog-post-content">Some more information about this company.</p>
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
                    <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                        <a class="btn-floating btn-large">
                          <i class="mdi-action-stars"></i>
                        </a>
                        <ul>
                          <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li>
                          <li><a href="app-widget.html" class="btn-floating yellow darken-1"><i class="large mdi-device-now-widgets"></i></a></li>
                          <li><a href="app-calendar.html" class="btn-floating green"><i class="large mdi-editor-insert-invitation"></i></a></li>
                          <li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
                        </ul>
                    </div>
                    <!-- Floating Action Button -->

                </div>

                @endsection