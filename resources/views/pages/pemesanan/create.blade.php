@extends('index')

@section('content')
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Reservasi Kamar Offline</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Resepsionis</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Reservasi</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-1 OPEN -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Reservasi Kamar Offline</h4>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" method="post" action="{{ url('pemesanan') }}"
                                class="form-horizontal">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6 mb-0">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="" class="form-label mt-0">Jumlah Tamu<span
                                                        class="text-red">*</span></label>
                                                <select name="jumlah_tamu"
                                                    class="form-control select2 form-select select2-hidden-accessible"
                                                    data-placeholder="Jumlah Tamu" tabindex="-1" aria-hidden="true">
                                                    <option label="Tamu"></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="form-label mt-0">Fasilitas Extra<span
                                                    class="text-red">*</span></label>
                                            <select name="extra_service"
                                                class="form-control select2 form-select select2-hidden-accessible"
                                                 tabindex="-1" aria-hidden="true">
                                                <option value="Tidak Ada">Pilih Fasilitas Extra</option>
                                                <option value="Extra Bed">Extra Bed</option>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            <label for="" class="form-label mt-0">Nama Tamu <span
                                                class="text-red">*</span></label>
                                        <input name="tamu" type="text" class="form-control" id="name2"
                                            placeholder="Nama Tamu">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6 mb-0">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="" class="form-label mt-0">Check In <span
                                                        class="text-red">*</span></label>
                                                <div class="wd-200 mg-b-30">
                                                    <div class="input-group">
                                                        <div class="input-group-text">
                                                            <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                                        </div><input id="checkin" name="checkin" class="form-control checkin fc-datepicker"
                                                             placeholder="Tahun/Bulan/Hari" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="form-label mt-0">Check Out <span
                                                        class="text-red">*</span></label>
                                                <div class="wd-200 mg-b-30">
                                                    <div class="input-group">
                                                        <div class="input-group-text">
                                                            <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                                        </div><input name="checkout" class="form-control checkout fc-datepicker"
                                                         placeholder="Tahun/Bulan/Hari" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <div class="form-group">
                                            <label for="" class="form-label mt-0">No Kamar<span
                                                    class="text-red">*</span></label>
                                            <select name="no_kamar"
                                                class="form-control list-kamar select2-show-search form-select select2-hidden-accessible"
                                                data-placeholder="Pilih Kamar" tabindex="-1" aria-hidden="true">
                                            </select>
                                           
                                        </div>
                                    </div>
                                </div>

                               
                                <div class="mb-0 mt-4 row justify-content-end">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                                        <input type="hidden" name="status_pembayaran" value="offline">
                                        <a href="{{ url('pemesanan') }}" class="btn btn-danger">Batal</a>
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
    @section('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $(".checkin").on('blur', function() {
                    var _checkin = $(this).val();
                    // console.log( _checkin);
                $(".checkout").on('blur', function() {
                    var _checkout = $(this).val();
                    // console.log( _checkout);
                    // Ajax
                    $.ajax({
                        url: "{{ url('pemesanan') }}/available-rooms/"+_checkin+"/"+_checkout,
                        Type: 'json',
                        success: function(res) {
                            // console.log(res); 
                 
                            var _html = '';
                            $.each(res.data, function(index, row) {
                                _html += '<option value="' + row.room.id + '">' +row.room.no_kamar+'-'+row.tipekamar.nama+
                                    '</option>';
                            });
                            $(".list-kamar").html(_html);
                        }
                    });
                });
                });
            });
        </script>
    @endsection
@endsection
