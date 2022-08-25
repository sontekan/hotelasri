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
         <!-- Row -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title ">Tipe Kamar &nbsp</h3> 
                <a href="{{url ('kamar/create')}}"  class="right btn btn-primary">Tambah Kamar</a>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                        <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i>{{session('success')}}
                    </div>
                    @endif
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">No</th>
                                <th class="wd-15p border-bottom-0">Kamar</th>
                                <th class="wd-15p border-bottom-0">Foto Kamar</th>
                                <th class="wd-20p border-bottom-0">Tipe Kamar</th>
                                <th class="wd-20p border-bottom-0">Harga</th>
                                <th class="wd-10p border-bottom-0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kamar as $tp)
                            <tr>
                                <td>{{$loop->iteration}}</td> 
                                <td>{{$tp->no_kamar}}</td>
                                <td>
                                    <img width="100" src="{{asset('storage/'.$tp->tipekamar->banner)}}" alt="image"> 
                                </td>
                                <td>{{$tp->tipekamar->nama}}</td>
                                <td>{{$tp->tipekamar->harga}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{url ('kamar/'. Crypt::encryptString($tp->id)). '/edit'}}"> <span class="fe fe-edit"> Edit</span></a>
                                    <a class="btn btn-danger" href="{{url ('kamar/'. Crypt::encryptString($tp->id).'/delete')}}"> <span class="fe fe-trash"> Hapus</span></a>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="viewkamar" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Kamar</h4>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
            </div>
            @foreach ($kamar as $tp)
            <div class="modal-body">
                    <table class="col-md-12 table table-bordered border-bottom no-margin">
                        <tbody>
                            <tr>
                                <th>Kamar</th>
                                <td><span>{{$tp->no_kamar}}</span></td>
                            </tr>
                            <tr>
                                <th>Tipe Kamar</th>
                                <td><span>{{$tp->tipekamar->nama}}</span></td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td><span>{{$tp->tipekamar->harga}}</span></td>
                            </tr>
                            <tr>
                                <th>Keterangan</th>
                                <td><span>{{$tp->tipekamar->keterangan}}</span></td>
                            </tr>
                        </tbody>
                    </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-light" data-bs-dismiss="modal">Keluar</button>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- End Row -->
       </div>
       <!-- CONTAINER CLOSED -->
   </div>
</div>
<!--app-content closed-->
</div> 
@section('scripts')
       <!-- DATA TABLE JS-->
       <script src="{{asset ('assets')}}/plugins/datatable/js/jquery.dataTables.min.js"></script>
       <script src="{{asset ('assets')}}/plugins/datatable/js/dataTables.bootstrap5.js"></script>
       <script src="{{asset ('assets')}}/plugins/datatable/js/dataTables.buttons.min.js"></script>
       <script src="{{asset ('assets')}}/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
       <script src="{{asset ('assets')}}/plugins/datatable/js/jszip.min.js"></script>
       <script src="{{asset ('assets')}}/plugins/datatable/pdfmake/pdfmake.min.js"></script>
       <script src="{{asset ('assets')}}/plugins/datatable/pdfmake/vfs_fonts.js"></script>
       <script src="{{asset ('assets')}}/plugins/datatable/js/buttons.html5.min.js"></script>
       <script src="{{asset ('assets')}}/plugins/datatable/js/buttons.print.min.js"></script>
       <script src="{{asset ('assets')}}/plugins/datatable/js/buttons.colVis.min.js"></script>
       <script src="{{asset ('assets')}}/plugins/datatable/dataTables.responsive.min.js"></script>
       <script src="{{asset ('assets')}}/plugins/datatable/responsive.bootstrap5.min.js"></script>
       <script src="{{asset ('assets')}}/js/table-data.js"></script>
@endsection
@endsection

