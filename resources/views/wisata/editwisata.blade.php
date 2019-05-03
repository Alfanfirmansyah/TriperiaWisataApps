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
                    <li class="active"><a href="{{url('wisata')}}">Data Wisata</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="section">

             <div id="card-alert" class="card deep-purple">
                      <div class="card-content white-text">
                        <p><i class="mdi-action-info-outline animated infinite pulse"></i> INFO : Ini adalah form halaman untuk mengedit data wisata.</p>
                      </div>
                      <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
            
            
            <!--DataTables example-->
           <div class="col s12 m12 l12">
                  <div class="card-panel">
                    <h4 class="header2">Edit Data Wisata</h4>
                    <div class="row">
                     
                      <form class="col s12" action="/update/wisata" method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                        <div class="row">
                          <input type="hidden" name="id" value="{{ $editwisata->wisataid }}">
                         <div class="input-field col s12">
                          
                          <input id="name4" type="text" name="namawisata" value="{{ $editwisata->namawisata }}" class="validate" required>
                          <label for="first_name">Nama Wisata</label>
                        </div>

                         <div class="input-field col s12">
                          <textarea id="textarea1" name="deskripsi" class="materialize-textarea">{{ $editwisata->deskripsiwisata }}</textarea>
                          <label for="textarea1">Deskripsi</label>
                        </div>
                        

                         
                        <div class="input-field col s12">
                       
                          <select name="kategori">
                            <option value="" disabled selected>Select Kategori</option>
                            @foreach ($kategori as $datakategori)
                               @if($datakategori->kategoriid == $editwisata->kategoriid_fk)
                            <option selected="selected" value="{{ $datakategori->kategoriid }}">{{ $datakategori->namakategori }}</option>
                            @else
                             <option value="{{ $datakategori->kategoriid }}">{{ $datakategori->namakategori }}</option>
                            @endif
                            @endforeach
                          </select>
                        </div>

                        <div class="input-field col s12">
                       
                          <select name="wilayah">
                            <option value="" disabled selected>Select Provinsi</option>
                            @foreach ($provinsi as $dataprovinsi)
                            @if($dataprovinsi->datawilayahid == $editwisata->wilayahid_fk)
                            <option selected="selected" value="{{ $dataprovinsi->datawilayahid }}">{{ $dataprovinsi->namawilayah }}</option>
                            @else
                            <option value="{{ $dataprovinsi->datawilayahid }}">{{ $dataprovinsi->namawilayah }}</option>
                            @endif
                            @endforeach
                          </select>
                        </div>
               

                         <div class="input-field col s12">
                          
                          <input id="name4" type="text" name="lokasi" class="validate" value="{{ $editwisata->lokasi }}" required>
                          <label for="first_name">Alamat Wilayah Wisata</label>
                        </div>

                         <div class="col s12">
                         
                          <input type="text" id="searchmap" placeholder="Cari Lokasi">
                          <label for="">Cari Map</label>
                        <div id="map-canvas"></div>
                        </div>

                         <div class="input-field col s12">
                         
                          <input id="lat" type="text"  name="latitude" value="{{ $editwisata->latitude }}" class="validate" required>
                          <label for="first_name">Latitude</label>
                        </div>
                        <div class="input-field col s12">
                         
                          <input id="lng" type="text" name="longitude" value="{{ $editwisata->longitude }}" class="validate" required>
                          <label for="first_name">Longitude</label>
                        </div>
                        <div class="input-field col s12">
                          <textarea id="textarea1" name="embedmaps" class="materialize-textarea">{{ $editwisata->embedmaps }}</textarea>
                          <label for="textarea1">Embed maps</label>
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