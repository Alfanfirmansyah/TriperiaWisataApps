
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details cyan darken-2">
                <div class="row">
                    <div class="col col s4 m4 l4">
                        <img src="/demo/images/avatar2.png" alt="" class="circle responsive-img valign profile-image">
                    </div>
                    <div class="col col s8 m8 l8">
                        <ul id="profile-dropdown" class="dropdown-content">
                            <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="mdi-hardware-keyboard-tab"></i>{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                        <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">{{ Auth::user()->name }}<i class="mdi-navigation-arrow-drop-down right"></i></a>
                        <p class="user-roal">Administrator</p>
                    </div>
                </div>
            </li>
                <li class="bold active"><a href="{{url('home')}}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-maps-terrain"></i> Manage Data Wisata</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="{{url('kategori')}}">Kategori Wisata</a>
                                    </li>
                                    <li><a href="{{url('wisata')}}">Data Wisata</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                  <li class="bold"><a href="{{url('galeri')}}" class="waves-effect waves-cyan"><i class="mdi-image-photo-library"></i> Manage Data Galeri</a>
                </li>
                  <li class="bold"><a href="{{url('event')}}" class="waves-effect waves-cyan"><i class="mdi-social-notifications-on"></i> Manage Data Events</a>
                </li>

                
              
                    
                       
              
            </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
            