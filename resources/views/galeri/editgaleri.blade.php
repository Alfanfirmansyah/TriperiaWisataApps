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
                <h5 class="breadcrumbs-title">Manage Data Galeri</h5>
                <ol class="breadcrumbs">
                    <li><a href="{{url('home')}}">Dashboard</a></li>
                    <li><a href="#">Manage Data Galeri</a></li>
                    <li class="active"><a href="{{url('galeri')}}">Galeri Gambar Wisata</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="section">

             <div id="card-alert" class="card deep-purple">
                      <div class="card-content white-text">
                        <p><i class="mdi-action-info-outline animated infinite pulse"></i> INFO : Ini adalah form halaman untuk mengedit data galeri wisata.</p>
                      </div>
                      <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
            
            
            <!--DataTables example-->
           <div class="col s12 m12 l12">
                  <div class="card-panel">
                    <h4 class="header2">Edit Data Galeri Wisata</h4>
                    <div class="row">
                    
                      <form class="col s12" action="/update/galeri" method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                        <div class="row">
                         <input type="hidden" name="id" value="{{ $editgaleri->gambarwisataid }}">
                        <div class="input-field col s12">
                       
                          <select name="wisataid">
                            <option value="" disabled selected>Select Wisata</option>
                            @foreach ($wisata as $data2)
                            @if($data2->wisataid == $editgaleri->wisataid_fk)
                            <option selected="selected" value="{{ $data2->wisataid }}">{{ $data2->namawisata }}</option>
                            @else
                            <option value="{{ $data2->wisataid }}">{{ $data2->namawisata }}</option>
                            @endif
                            @endforeach
                          </select>
                        </div>


                         <div class="input-field col s12">
                          
                          <input id="name4" type="text" name="namagaleri" value="{{ $editgaleri->deskripsinama }}" class="validate" required>
                          <label for="first_name">Nama Galeri</label>
                        </div>


                      </div>
                       <div class="row section">
              <div class="col s12 m4 l3">
                 <p>Pilih Gambar</p>
              </div>
              <div class="col s12 m8 l9">
                  <input type="file" name="gambar" id="input-file-now" class="dropify" data-default-file="" />
              </div>
            </div>
                        </div>

                        <div class="row">
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
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