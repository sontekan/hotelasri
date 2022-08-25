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
                    <h4 class="card-title">Tambah Galeri Kamar</h4>
                </div>
                <div class="card-body">
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                        <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i>{{session('success')}}
                    </div>
                    @endif

                    <form enctype="multipart/form-data" method="post" action="{{url('tipekamar/galery')}}" class="form-horizontal">
                        @csrf
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Pilih Tipe Kamar</label>
                            <div class="col-md-9">
                                <select name="tk_id" class="form-control select2-show-search form-select" data-placeholder="Pilih Tipe">
                                    <option label="Pilih Tipe Kamar"></option>
                                    @foreach ($tipekamar as $row)
                                    <option value="{{$row->id}}">{{$row->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label  class="col-md-3 form-label">Galeri</label>
                            <div class="col-md-9">
                                <input class="form-control" name="foto[]" type="file" id="formFileMultiple" multiple>
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
