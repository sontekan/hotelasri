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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard {{ auth()->user()->role }}</a>
                            </li>
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
                                    <div
                                        class="card-img-absolute circle-icon bg-primary text-center align-self-center box-primary-shadow bradius">
                                        <img src="{{ asset('assets') }}/images/svgs/circle.svg" alt="img"
                                            class="card-img-absolute">
                                        <i class="bi bi-people fs-50 text-white mt-4"></i>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4">
                                        <h2 class="mb-2 fw-normal mt-2">{{ $user }}</h2>
                                        <h5 class="fw-normal mb-0">Pengguna</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-md-12 col-xl-3">
                        <div class="card">
                            <div class="row">
                                <div class="col-4">
                                    <div
                                        class="card-img-absolute circle-icon bg-secondary align-items-center text-center box-secondary-shadow bradius">
                                        <img src="{{ asset('assets') }}/images/svgs/circle.svg" alt="img"
                                            class="card-img-absolute">
                                        <i class="bi bi-door-open fs-50 text-white mt-4"></i>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4">
                                        <h2 class="mb-2 fw-normal mt-2">{{ $kamar }}</h2>
                                        <h5 class="fw-normal mb-0">Kamar</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-md-12 col-xl-3">
                        <div class="card">
                            <div class="row">
                                <div class="col-4">
                                    <div
                                        class="card-img-absolute  circle-icon bg-success align-items-center text-center box-success-shadow bradius">
                                        <img src="{{ asset('assets') }}/images/svgs/circle.svg" alt="img"
                                            class="card-img-absolute">
                                        <i class="bi bi-receipt-cutoff fs-50 text-white mt-4"></i>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4">
                                        <h2 class="mb-2 fw-normal mt-2">{{ $pemesanan }}</h2>
                                        <h5 class="fw-normal mb-0">Reservasi</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-md-12 col-xl-3">
                        <div class="card">
                            <div class="row">
                                <div class="col-4">
                                    <div
                                        class="card-img-absolute circle-icon bg-danger align-items-center text-center box-danger-shadow bradius">
                                        <img src="{{ asset('assets') }}/images/svgs/circle.svg" alt="img"
                                            class="card-img-absolute">
                                        <i class="bi bi-clipboard-check fs-50  text-white mt-4"></i>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-4">
                                        <h2 class="mb-2 fw-normal mt-2">{{ $paymentcount }}</h2>
                                        <h5 class="fw-normal mb-0">Booking Online</h5>
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
                                <h3 class="card-title ">Laporan Transksi &nbsp</h3>
                                <a class="right btn btn-primary" data-bs-target="#select2modal"
                                    data-bs-toggle="modal"><i class="fa fa-file-excel-o"></i> Excel</a>
                            </div>
                            <div class="card-body">
                                @if (Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-hidden="true">×</button>
                                        <i class="fa fa-check-circle-o me-2"
                                            aria-hidden="true"></i>{{ session('success') }}
                                    </div>
                                @endif
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0">No</th>
                                                <th class="wd-20p border-bottom-0">Nama Tamu</th>
                                                <th class="wd-10p border-bottom-0">Tipe Kamar</th>
                                                <th class="wd-10p border-bottom-0">Kamar</th>
                                                {{-- <th class="wd-10p border-bottom-0">Kamar</th> --}}
                                                <th class="wd-10p border-bottom-0">Tanggal Check In</th>
                                                <th class="wd-10p border-bottom-0">Tanggal Check Out</th>
                                                <th class="wd-10p border-bottom-0">Fasilitas Extra</th>
                                                <th class="wd-10p border-bottom-0">Status Pembayaran</th>
                                                <th class="wd-10p border-bottom-0">Total</th>
                                                {{-- <th class="wd-10p border-bottom-0">Aksi</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pemesanan2 as $ps)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$ps->tamu}}</td>
                                                <td>{{$ps->kamar->tipekamar->nama}}</td>
                                                <td>{{$ps->kamar->no_kamar}}</td>
                                                <td>{{date('d/m/Y',strtotime ($ps->checkin))}}</td>
                                                <td>{{date('d/m/Y',strtotime ($ps->checkout))}}</td>
                                                @if ($ps->extra_service == null)
                                                <td>Tidak Ada</td>
                                                @else
                                                <td>{{$ps->extra_service}}</td>
                                                @endif
                                                <td>{{$ps->status_pembayaran}}</td>
                                                @if ($ps->extra_service == null)
                                                <td>Rp.{{number_format($ps->kamar->tipekamar->harga, 0, ',','.')}}</td>
                                                @else
                                                <td>Rp.{{number_format(50000+$ps->kamar->tipekamar->harga, 0, ',','.')}}</td>
                                                @endif
                                                {{-- <td>
                        
                                                    <a class="btn btn-primary" href="{{url ('pemesanan/'. $ps->id. '/edit')}}"> <span class="fe fe-edit"> Edit</span></a>
                                                    <a class="btn btn-danger" href="{{url ('pemesanan/'. $ps->id.'/print')}}"> <span class="fe fe-printer"> Print</span></a>
                                                </td> --}}
                                                
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
                <!-- Select2 modal -->
                <div class="modal fade" id="select2modal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">Cetak Laporan Transaksi</h6>
                                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h6>Pilih Bulan</h6>
                                <!-- Select2 -->
                                <select id="bulan" class="form-control select2 select2-dropdown" required >
                                    <option value="" selected disabled hidden>Pilih Bulan</option>
                                    <option value="1">
                                        Januari
                                    </option>
                                    <option value="2">
                                        Februari
                                    </option>
                                    <option value="3">
                                        Maret
                                    </option>
                                    <option value="4">
                                        April
                                    </option>
                                    <option value="5">
                                        Mei
                                    </option>
                                    <option value="6">
                                        Juni
                                    </option>
                                    <option value="7">
                                        Juli
                                    </option>
                                    <option value="8">
                                        Agustus
                                    </option>
                                    <option value="9">
                                        September
                                    </option>
                                    <option value="10">
                                        Oktober
                                    </option>
                                    <option value="11">
                                        November
                                    </option>
                                    <option value="12">
                                        Desember
                                    </option>
                                </select>

                                <h6 class="mt-3">Pilih Tahun</h6>
                                <!-- Select2 -->
                                <select id="tahun" class="form-control select2 select2-dropdown" required>
                                    <option value="" selected disabled hidden>Pilih Tahun</option>
                                    <option value="2022">
                                        2022
                                    </option>
                                </select>
                                <!-- Select2 -->
                            </div>
                            <div class="modal-footer">
                                <a class="btn ripple btn-primary" onclick="this.href='transaksi/export/'+ document.getElementById('bulan').value + '/' + document.getElementById('tahun').value" target="_blank"><i class="si si-printer"></i> Cetak</a>
                                <button class="btn ripple btn-danger" data-bs-dismiss="modal"
                                    type="button">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Select2 modal -->

            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!--app-content closed-->
    </div>
@section('scripts')
    <!-- DATA TABLE JS-->
    <script src="{{ asset('assets') }}/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="{{ asset('assets') }}/plugins/datatable/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/datatable/js/jszip.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/datatable/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/datatable/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('assets') }}/plugins/datatable/js/buttons.html5.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/datatable/js/buttons.print.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/datatable/js/buttons.colVis.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/datatable/responsive.bootstrap5.min.js"></script>
    <script src="{{ asset('assets') }}/js/table-data.js"></script>
    <!-- Select2 js-->
    <script src="{{ asset('assets') }}/plugins/select2/select2.full.min.js"></script>
    <script src="{{ asset('assets') }}/js/select2.js"></script>
@endsection
@endsection
