@extends('index')

@section('content')
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Pesanan Online</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Resepsionis</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pesanan Online</li>
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
                                                <th class="wd-15p border-bottom-0">Tanggal Transaksi</th>
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
                                                    <td>{{ date('d/m/Y', strtotime($py->transaction_time))}}</td>
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
