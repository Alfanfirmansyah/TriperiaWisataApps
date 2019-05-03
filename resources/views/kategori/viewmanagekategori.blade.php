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
                <h5 class="breadcrumbs-title">Manage Data Kategori</h5>
                <ol class="breadcrumbs">
                    <li><a href="{{url('home')}}">Dashboard</a></li>
                    <li><a href="#">Manage Data Wisata</a></li>
                    <li class="active"><a href="{{url('kategori')}}">Kategori Wisata</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="section">

             <div id="card-alert" class="card deep-purple">
                      <div class="card-content white-text">
                        <p><i class="mdi-action-info-outline animated infinite pulse"></i> INFO : Ini adalah halaman untuk mengelola dan managemen data kategori wisata.</p>
                      </div>
                      <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
            
            
            <!--DataTables example-->
            <div id="table-datatables">
              <h4 class="header">List Data Kategori</h4>
             
              <p><a class="waves-effect waves-light btn modal-trigger  light-blue accent-3 animated infinite rubberBand" href="#modal1">Tambah Data</a>
                </p>
              <div class="row">
                <div class="col s12 m8 l12">
                   <div id="modal1" class="modal">
                  <div class="modal-content">
                
                  <h4 class="header2">Input Data Kategori</h4>
                  <div class="row">
                    <form class="col s12" action="/insert/kategori" method="post">
                       {{ csrf_field() }}
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-account-circle prefix"></i>
                          <input id="name4" type="text" name="namakategori" class="validate" required>
                          <label for="first_name">Nama Kategori</label>
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
                            <th>Nama Kategori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                  <?php $i=1; ?>
                    <tbody> 
                       @foreach ($data as $user)
                        <tr>
                          <td>   {{ $i++ }}</td>
                            <td>
                              <div class="chip teal white-text">
                    {{ $user->namakategori }}
                 
                  </div>
                              </td>
                            <td><a href="#" data-id="{{$user->kategoriid}}" class="sa-remove-kat btn-floating red"><i class="mdi-action-delete animated infinite flash"></i></a> <br><br><a href="/editdata/kategori/{{ $user->kategoriid }}" class="btn-floating deep-purple"><i class="large mdi-editor-mode-edit animated infinite flash"></i></a></td>
                        </tr>
                        @endforeach
                        @include('kategori.confirmkat')
                    </tbody>
                  </table>
                </div>
              </div>
            </div> 
            <br>
            <div class="divider"></div> 
           
          </div>
          <!-- Floating Action Button -->
           
            <!-- Floating Action Button -->
        </div>

                @endsection