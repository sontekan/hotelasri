@extends('index')

@section('content')
    <!--app-content open-->
<div class="main-content app-content mt-0">
   <div class="side-app">

       <!-- CONTAINER -->
       <div class="main-container container-fluid">

           <!-- PAGE-HEADER -->
           <div class="page-header">
               <h1 class="page-title">Empty</h1>
               <div>
                   <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                       <li class="breadcrumb-item active" aria-current="page">Empty</li>
                   </ol>
               </div>
           </div>
           <!-- PAGE-HEADER END -->

           <!-- ROW-1 OPEN -->
           <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Tipe Kamar</h4>
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" method="post" action="{{url('tipekamar')}}" class="form-horizontal">
                        @csrf
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Nama</label>
                            <div class="col-md-9">
                                <input name="nama" type="text" class="form-control" placeholder="Family Room">
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Harga</label>
                            <div class="col-md-9">
                                <input name="harga" type="number" class="form-control" placeholder="150000" >
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Fasilitas</label>
                            <div class="col-md-9">
                            <select name="fasilitas[]" class="form-control select2" data-placeholder="Pilih Fasilitas" multiple>
                                    <option selected value="Parkir">
                                        Parkir
                                    </option>
                                    <option value="2 Rooms">
                                        2 Rooms
                                    </option>
                                    <option value="AC">
                                        AC
                                    </option>
                                    <option selected value="TV">
                                       TV
                                    </option>
                                    <option value="Refigerator">
                                       Refigerator
                                    </option>
                                    <option selected value="Wifi">
                                        Wifi
                                     </option>
                                     <option value="Water Heater">
                                        Water Heater
                                     </option>
                                     <option value="Triple Bed">
                                        Triple Bed
                                     </option>
                                     <option value="Living Room">
                                       Living Room
                                     </option>
                                     <option selected value="Resepsionis 24 Jam">
                                        Resepsionis 24 Jam
                                      </option>
                                      <option value="Kipas Angin">
                                        Kipas Angin
                                      </option>
                                </select>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label  class="col-md-3 form-label">Deskripsi</label>
                            <div class="col-md-9">
                                <textarea name="keterangan" class="form-control" placeholder="Deskripsi"  style="height: 100px"></textarea>
                            </div>
                        </div>  
                        <div class=" row mb-4">
                            <label  class="col-md-3 form-label">Banner</label>
                            <div class="col-md-9">
                                <input name="banner" class="form-control" type="file">
                            </div>
                        </div>  
            
                
                        <div class="mb-0 mt-4 row justify-content-end">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                                <a href="{{url('tipekamar')}}" class="btn btn-danger">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       </div>
       <!-- CONTAINER CLOSED -->
   </div>
</div>
<!--app-content closed-->
</div> 

@endsection
