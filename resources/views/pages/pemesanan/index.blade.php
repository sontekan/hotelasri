@extends('index')

@section('content')
    <!--app-content open-->
<div class="main-content app-content mt-0">
   <div class="side-app">

       <!-- CONTAINER -->
       <div class="main-container container-fluid">

           <!-- PAGE-HEADER -->
           <div class="page-header">
               <h1 class="page-title">Reservasi Kamar</h1>
               <div>
                   <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="javascript:void(0)">Reservasi</a></li>
                       <li class="breadcrumb-item active" aria-current="page">List Reservasi Kamar</li>
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
                <h3 class="card-title ">Reservasi Kamar &nbsp</h3> 
                <a href="{{url ('pemesanan/create')}}"  class="right btn btn-primary">Tambah Reservasi</a>
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
                                <th class="wd-20p border-bottom-0">Nama Tamu</th>
                                
                                <th class="wd-10p border-bottom-0">Kamar</th>
                                <th class="wd-10p border-bottom-0">Tanggal Check In</th>
                                <th class="wd-10p border-bottom-0">Tanggal Check Out</th>
                                <th class="wd-10p border-bottom-0">Fasilitas Extra</th>
                                <th class="wd-10p border-bottom-0">Status Pembayaran</th>
                                <th class="wd-10p border-bottom-0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pemesanan as $ps)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$ps->tamu}}</td>
                                <td>{{$ps->kamar->no_kamar}}</td>
                                <td>{{date('d/m/Y',strtotime ($ps->checkin))}}</td>
                                <td>{{date('d/m/Y',strtotime ($ps->checkout))}}</td>
                                @if ($ps->extra_service == null)
                                <td>Tidak Ada</td>
                                @else
                                <td>{{$ps->extra_service}}</td>
                                @endif
                                <td>{{$ps->status_pembayaran}}</td>
                                <td>
        
                                    <a class="btn btn-primary" href="{{url ('pemesanan/'. $ps->id. '/edit')}}"> <span class="fe fe-edit"> Edit</span></a>
                                    <a class="btn btn-danger" href="{{url ('pemesanan/'. $ps->id.'/print')}}"> <span class="fe fe-printer"> Print</span></a>
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

