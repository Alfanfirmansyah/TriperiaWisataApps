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
                        <p><i class="mdi-action-info-outline animated infinite pulse"></i> INFO : Ini adalah form halaman untuk mengedit data kategori wisata.</p>
                      </div>
                      <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
            
            
            <!--DataTables example-->
           <div class="col s12 m12 l12">
                  <div class="card-panel">
                    <h4 class="header2">Edit Data Kategori Wisata</h4>
                    <div class="row">
                    
                      <form class="col s12" action="/update/event" method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                        <div class="row">
                          <input type="hidden" name="id" value="{{ $editevent->eventid }}">
                         <div class="input-field col s12">
                          
                          <input id="name4" type="text" name="judulevent" value="{{ $editevent->judulevent }}" class="validate" required>
                          <label for="first_name">Judul Event</label>
                        </div>
                         <div class="input-field col s12">
                          
                          <input id="name4" type="text" name="juduldeskripsi" value="{{ $editevent->juduldeskripsi }}" class="validate" required>
                          <label for="first_name">Judul Deskripsi</label>
                        </div>

                         <div class="input-field col s12">
                          <textarea id="textarea1" name="deskripsi" class="materialize-textarea">{{ $editevent->deskripsi }}</textarea>
                          <label for="textarea1">Deskripsi</label>
                        </div>
                         <div class="input-field col s12">
                          
                          <input placeholder="tanggalevent" id="name4" type="date" name="tanggalevent" value="{{ $editevent->tanggalevent }}" class="validate" required>
                         
                        </div> 

                         <div class="input-field col s12">
                          
                          <input placeholder="tanggaleventakhir" id="name4" type="date" name="tanggaleventakhir" value="{{ $editevent->tanggaleventakhir }}" class="validate" required>
                         
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