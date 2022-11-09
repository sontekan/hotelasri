@extends('index')

@section('content')
    <!--app-content open-->
<div class="main-content app-content mt-0">
   <div class="side-app">

       <!-- CONTAINER -->
       <div class="main-container container-fluid">

           <!-- PAGE-HEADER -->
           <div class="page-header">
               <h1 class="page-title">Riwayat Pemesanan</h1>
               <div>
                   <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                       <li class="breadcrumb-item active" aria-current="page">Riwayat Pemesanan</li>
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
                <h3 class="card-title ">Riwayat Pemesanan &nbsp</h3> 
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">No</th>
                                <th class="wd-15p border-bottom-0">Order Id</th>
                                <th class="wd-15p border-bottom-0">Tanggal</th>
                                <th class="wd-15p border-bottom-0">Tipe Kamar</th>
                                <th class="wd-15p border-bottom-0">Check-in</th>
                                <th class="wd-15p border-bottom-0">Check-out</th>
                                <th class="wd-15p border-bottom-0">Total Harga</th>
                                <th class="wd-15p border-bottom-0">Metode</th>    
                                <th class="wd-15p border-bottom-0">Status</th>    
                                <th class="wd-15p border-bottom-0">Aksi</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $tp)
                            <tr>
                                <td>{{$loop->iteration}}</td> 
                                <td>{{$tp->order_id}}</td>
                                <td>{{date('d/m/Y',strtotime ($tp->transaction_time))}}</td>
                                <td>{{$tp->nama}}</td>
                                <td>{{date('d/m/Y',strtotime ($tp->checkin))}}</td>
                                <td>{{date('d/m/Y',strtotime ($tp->checkout))}}</td>
                                <td>{{number_format($tp->gross_amount, 2, ',','.')}}</td>
                                <td>{{$tp->payment_type}}</td>  
                                <td>{{$tp->transaction_status}}</td>
                                <td>
                                    @if ($tp->transaction_status == 'settlement')
                                    <a href="{{url('booking/'. Crypt::encryptString($tp->id) .'/payment-success')}}" class="btn btn-primary mb-1"><i class="fe fe-file"></i> Invoice</a>
                                    @else
                                    <a href="{{url('booking/'. Crypt::encryptString($tp->id) .'/payment-pending')}}" class="btn btn-primary mb-1"><i class="fe fe-file"></i> Invoice</a>
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

