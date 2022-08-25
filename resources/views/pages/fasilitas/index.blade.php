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
                <h3 class="card-title ">Fasilitas Kamar &nbsp</h3> 
                <a href="{{url ('fasilitas/create')}}" data-bs-toggle="modal" data-bs-target="#tambah" class="right btn btn-primary">Tambah Fasilitas</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">No</th>
                                <th class="wd-15p border-bottom-0">Fasilitas</th>
                                <th class="wd-15p border-bottom-0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fasilitas as $fs)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $fs->fasilitas }}</td>
                                <td>
                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus"> <span class="fe fe-trash"> Hapus</span></button>
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
<div class="modal  fade" id="hapus" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p>Anda Yakin Ingin Menghapus ?</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                @foreach ($fasilitas as $fs)
                <a href="{{url ('fasilitas/'. $fs->id).'/delete'}}" class="btn btn-danger">Hapus</a>
                @endforeach
            </div>
        </div>
    </div>
</div>

@include('pages.fasilitas.createmodal')
<!-- End Modal -->
<!-- End Row -->
       </div>
       <!-- CONTAINER CLOSED -->
   </div>
</div>
<!--app-content closed-->
</div> 

@section('script')
    <!-- DATA TABLE JS-->
    <script src="{{ asset ('/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset ('/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{ asset ('/assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset ('/assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
    <script src="{{ asset ('/assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{ asset ('/assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{ asset ('/assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{ asset ('/assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset ('/assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset ('/assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{ asset ('/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset ('/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>
    <script src="{{ asset ('/assets/js/table-data.js')}}"></script>
@endsection

@endsection

