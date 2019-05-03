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
                        <p><i class="mdi-action-info-outline animated infinite pulse"></i> INFO : Ini adalah halaman untuk mengelola dan managemen data kategori wisata.</p>
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
                
                  <h4 class="header2">Input Data Wisata</h4>
                  <div class="divider"></div>
                  <br>
                  <div class="row">
                    <form class="col s12" action="/insert/wisata" method="post" enctype="multipart/form-data">
                       {{ csrf_field() }}
                      <div class="row">
                        <div class="input-field col s12">
                          
                          <input id="name4" type="text" name="namawisata" class="validate" required>
                          <label for="first_name">Nama Wisata</label>
                        </div>

                         <div class="input-field col s12">
                          <textarea id="textarea1" name="deskripsi" class="materialize-textarea"></textarea>
                          <label for="textarea1">Deskripsi</label>
                        </div>
                        <input type="hidden" name="created_by" value="{{ Auth::user()->id}}">

                         
                        <div class="input-field col s12">
                       
                          <select name="kategori">
                            <option value="" disabled selected>Select Kategori</option>
                            @foreach ($kategori as $datakategori)
                            <option value="{{ $datakategori->kategoriid }}">{{ $datakategori->namakategori }}</option>
                            @endforeach
                          </select>
                        </div>

                        <div class="input-field col s12">
                       
                          <select name="wilayah">
                            <option value="" disabled selected>Select Provinsi</option>
                            @foreach ($provinsi as $dataprovinsi)
                            <option value="{{ $dataprovinsi->datawilayahid }}">{{ $dataprovinsi->namawilayah }}</option>
                            @endforeach
                          </select>
                        </div>
               

                         <div class="input-field col s12">
                          
                          <input id="name4" type="text" name="lokasi" class="validate" required>
                          <label for="first_name">Alamat Wilayah Wisata</label>
                        </div>

                        <div class="col s12">
                         
                          <input type="text" id="searchmap" placeholder="Cari Lokasi">
                          <label for="">Cari Map</label>
                      <div id="map-canvas"></div>
                        </div>



                      
                         <div class="input-field col s12">
                         
                          <input id="lat" type="text" name="latitude" placeholder="latitude" class="validate" required>
                          <label for="first_name"></label>
                        </div>
                        <div class="input-field col s12">
                         
                          <input id="lng" type="text" name="longitude" placeholder="longitude" class="validate" required>
                          <label for="first_name"></label>
                        </div>
                        <div class="input-field col s12">
                          <textarea id="textarea1" name="embedmaps" class="materialize-textarea"></textarea>
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
                            <th>Nama Wisata</th>
                            <th>Kategori</th>
                            <th>Lat</th>
                            <th>Long</th>
                            <th>Lokasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                 
                  <?php $i=1; ?>
                    <tbody> 
                       @foreach ($data as $user)
                        <tr>
                           <td>{{ $i++ }}</td>
                            <td>{{ $user->namawisata }}</td>
                            <td>{{ $user->Kategori->namakategori }}</td>
                            <td>{{ $user->latitude }}</td>
                            <td>{{ $user->longitude }}</td>
                            <td>{{ $user->lokasi }}</td>

                            <td><a href="#" data-id="{{$user->wisataid}}" class="sa-remove-wt btn-floating red"><i class="mdi-action-delete animated infinite flash"></i></a><br><br> <a href="/editdata/wisata/{{ $user->wisataid }}" class="btn-floating deep-purple"><i class="large mdi-editor-mode-edit animated infinite flash"></i></a></td>
                        </tr>
                        @endforeach
                        @include('wisata.confirmwt')
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