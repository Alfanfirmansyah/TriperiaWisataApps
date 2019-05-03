@extends('template.master')
@section('content')
<!--start container-->
    <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Basic Tables</h5>
                <ol class="breadcrumbs">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="#">Tables</a></li>
                    <li class="active">Basic Tables</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="section">

             <div id="card-alert" class="card deep-purple">
                      <div class="card-content white-text">
                        <p><i class="mdi-action-info-outline animated infinite pulse"></i> INFO : Ini adalah halaman untuk mengelola dan managemen data user.</p>
                      </div>
                      <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
            
            
            <!--DataTables example-->
            <div id="table-datatables">
              <h4 class="header">List Data User</h4>
             
              <p><a class="waves-effect waves-light btn modal-trigger  light-blue accent-3 animated infinite rubberBand" href="#modal1">Tambah Data</a>
                </p>
              <div class="row">
                <div class="col s12 m8 l12">
                   <div id="modal1" class="modal">
                  <div class="modal-content">
                
                  <h4 class="header2">Input Data User</h4>
                  <div class="row">
                    <form class="col s12" action="/insert/user" method="post">
                       {{ csrf_field() }}
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-account-circle prefix"></i>
                          <input id="name4" type="text" name="name" class="validate" required>
                          <label for="first_name">Name</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-communication-email prefix"></i>
                          <input id="email4" type="email" name="email" class="validate" required>
                          <label for="email">Email</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-lock-outline prefix"></i>
                          <input id="password5" type="password" name="password" class="validate" required>
                          <label for="password">Password</label>
                        </div>
                      </div>
                  
                      <div class="row">
                        
                        <div class="row">
                          <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right animated infinite pulse" type="submit">Submit
                              <i class="mdi-content-send right"></i>
                            </button>
                             <a class="waves-effect waves-light btn red accent-3 animated infinite bounce modal-action modal-close">Close</a>
                            
                             
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                
                  </div>
               
                </div>
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Created</th>
                            <th>Action</th>

                           
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                  <?php $i=1; ?>
                    <tbody> 
                       @foreach ($data as $user)
                        <tr>
                          <td>   {{ $i++ }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td><a href="#" data-id="{{$user->id}}" class="sa-remove btn-floating red"><i class="mdi-action-delete animated infinite flash"></i></a> <a href="css-helpers.html" class="btn-floating deep-purple"><i class="large mdi-editor-mode-edit animated infinite flash"></i></a></td>
                        </tr>
                        @endforeach
                        @include('dashboard.confirm')
                    </tbody>
                  </table>
                </div>
              </div>
            </div> 
            <br>
            <div class="divider"></div> 
           
          </div>
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