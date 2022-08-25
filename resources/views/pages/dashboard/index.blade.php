@extends('index')

@section('content')
    <!--app-content open-->
<div class="main-content app-content mt-0">
   <div class="side-app">

       <!-- CONTAINER -->
       <div class="main-container container-fluid">

           <!-- PAGE-HEADER -->
           <div class="page-header">
               <h1 class="page-title">Dashboard</h1>
               <div>
                   <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard {{auth()->user()->role}}</a></li>
                       <li class="breadcrumb-item active" aria-current="page">Empty</li>
                   </ol>
               </div>
           </div>
           <!-- PAGE-HEADER END -->

             <!-- WIDGET OPEN -->
             <div class="row">
                <div class="col-sm-6 col-lg-6 col-md-12 col-xl-3">
                   <div class="card">
                       <div class="row">
                           <div class="col-4">
                               <div class="card-img-absolute circle-icon bg-primary text-center align-self-center box-primary-shadow bradius">
                                   <img src="{{asset('assets')}}/images/svgs/circle.svg" alt="img" class="card-img-absolute">
                                   <i class="bi bi-people fs-50 text-white mt-4"></i>
                               </div>
                           </div>
                           <div class="col-8">
                               <div class="card-body p-4">
                                   <h2 class="mb-2 fw-normal mt-2">{{$user}}</h2>
                                   <h5 class="fw-normal mb-0">Total Pengguna</h5>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-sm-6 col-lg-6 col-md-12 col-xl-3">
                   <div class="card">
                       <div class="row">
                           <div class="col-4">
                               <div class="card-img-absolute circle-icon bg-secondary align-items-center text-center box-secondary-shadow bradius">
                                   <img src="{{asset ('assets')}}/images/svgs/circle.svg" alt="img" class="card-img-absolute">
                                   <i class="bi bi-door-open fs-50 text-white mt-4"></i>
                               </div>
                           </div>
                           <div class="col-8">
                               <div class="card-body p-4">
                                   <h2 class="mb-2 fw-normal mt-2">{{$kamar}}</h2>
                                   <h5 class="fw-normal mb-0">Total Kamar</h5>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-sm-6 col-lg-6 col-md-12 col-xl-3">
                   <div class="card">
                       <div class="row">
                           <div class="col-4">
                               <div class="card-img-absolute  circle-icon bg-success align-items-center text-center box-success-shadow bradius">
                                   <img src="{{asset('assets')}}/images/svgs/circle.svg" alt="img" class="card-img-absolute">
                                   <i class="bi bi-receipt-cutoff fs-50 text-white mt-4"></i>
                               </div>
                           </div>
                           <div class="col-8">
                               <div class="card-body p-4">
                                   <h2 class="mb-2 fw-normal mt-2">{{$pemesanan}}</h2>
                                   <h5 class="fw-normal mb-0">Total Reservasi</h5>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-sm-6 col-lg-6 col-md-12 col-xl-3">
                   <div class="card">
                       <div class="row">
                           <div class="col-4">
                               <div class="card-img-absolute circle-icon bg-danger align-items-center text-center box-danger-shadow bradius">
                                   <img src="{{asset ('assets')}}/images/svgs/circle.svg" alt="img" class="card-img-absolute">
                                   <i class="bi bi-clipboard-check fs-50  text-white mt-4"></i>
                               </div>
                           </div>
                           <div class="col-8">
                               <div class="card-body p-4">
                                   <h2 class="mb-2 fw-normal mt-2">{{$paymentcount}}</h2>
                                   <h5 class="fw-normal mb-0">Pesanan Online</h5>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
               <!-- WIDGET END -->
          
           <!-- LIST PESANAN OPEN -->
           <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title ">Pesanan &nbsp</h3>
                        {{-- <a href="{{url ('tipekamar/create')}}"  class="right btn btn-primary">Tambah Tipe Kamar</a> --}}
                    </div>
                    <div class="card-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-hidden="true">×</button>
                                <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i>{{ session('success') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">Order Id</th>
                                        {{-- <th class="wd-15p border-bottom-0">Tanggal Transaksi</th> --}}
                                        <th class="wd-15p border-bottom-0">Pemesan</th>
                                        <th class="wd-15p border-bottom-0">Nama Tamu</th>
                                        <th class="wd-15p border-bottom-0">Check In</th>
                                        <th class="wd-15p border-bottom-0">Check Out</th>
                                        <th class="wd-15p border-bottom-0">Tipe Kamar</th>
                                        <th class="wd-20p border-bottom-0">Kamar</th>
                                        <th class="wd-15p border-bottom-0">Fasilitas Extra</th>
                                        <th class="wd-20p border-bottom-0">Status Transaksi</th>
 
                                        <th class="wd-10p border-bottom-0">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
 
                                    @foreach ($data as $py)
                                        <tr>
                                            <td>{{ $py->order_id }}</td>
                                            {{-- <td>{{ date('d/m/Y', strtotime($py->transaction_time))}}</td> --}}
                                            <td>{{ $py->user->name }}</td>
                                            <td>{{ $py->tamu }}</td>
                                            <td>{{ date('d/m/Y', strtotime($py->checkin)) }}</td>
                                            <td>{{ date('d/m/Y', strtotime($py->checkout)) }}</td>
                                            <td>{{ $py->nama }}</td>
 
                                            @if ($py->kamar_id == null)
                                                <td>Kamar Belum Diproses</td>
                                            @else
                                                <td>{{ $py->kamar->no_kamar }}</td>
                                            @endif
 
                                            @if ($py->fasilitas == 0)
                                                <td>Tidak Ada</td>
                                            @else
                                                <td>Extra Bed</td>
                                            @endif
                                            <td><span
                                                    class="tag tag-indigo text-center">{{ $py->transaction_status }}</span>
                                            </td>
 
                                            <td>
                                                @if ($py->kamar_id == null)
                                                    <a class="btn btn-primary"
                                                        href="{{ url('booking/' . Crypt::encryptString($py->id)) . '/tambah-tamu' }}">
                                                        <span class="zmdi zmdi-hourglass-outline"> Proses</span></a>
                                                @else
                                                    <button class="btn btn-primary"><span
                                                            class="mdi mdi-approval"> Sudah
                                                            Diproses</span></button>
                                                @endif
 
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
           <!-- LIST PESANAN END -->

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
