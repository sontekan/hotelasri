@extends('index')

@section('content')
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Reservasi Kamar Online</h1>
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
                            <h4 class="card-title">Tambah Reservasi Kamar Online</h4>
                        </div>
                        <div class="card-body">
                            @if (Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-hidden="true">×</button>
                                    <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i>{{ session('success') }}
                                </div>
                            @endif

                            <form enctype="multipart/form-data" method="post" action="{{ url('pemesanan-online') }}"
                                class="form-horizontal">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6 mb-0">
                                        <div class="form-group">
                                            <label for="" class="form-label mt-0">Nama Pemesan<span
                                                    class="text-red">*</span></label>
                                            <input value="{{$payment->user->name}}" type="text" class="form-control" id="name2">
                                        </div>  
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <div class="form-group">
                                            <label for="" class="form-label mt-0">Nama Tamu<span
                                                    class="text-red">*</span></label>
                                            <input value="{{$payment->tamu}}" name="tamu" type="text" class="form-control" id="name2">
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
                                                        </div><input id="checkin" name="checkin"
                                                            class="form-control checkin fc-datepicker" value="{{$payment->checkin}}"
                                                            type="text">
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
                                                        </div><input id="checkout" name="checkout"
                                                            class="form-control checkout fc-datepicker" value="{{$payment->checkout}}"
                                                            type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 mb-0">
                                        <div class="form-group">
                                            <label for="" class="form-label mt-0">Tipe Kamar<span
                                                    class="text-red">*</span></label>
                                            <input value="{{$payment->nama}}" type="text" class="form-control" id="name2">
                                          <input type="hidden" name="pemesan" value="{{$payment->user->id}}"> 
                                          <input type="hidden" name="payment_id" value="{{$payment->id}}">   
                                        </div>
                                    </div>

                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6 mb-0">
                                        <div class="form-group">
                                            <label for="" class="form-label mt-2">No Kamar<span
                                                    class="text-red">*</span></label>
                                            <select name="no_kamar"
                                                class="form-control list-kamar select2-show-search form-select select2-hidden-accessible"
                                                data-placeholder="Pilih Kamar" tabindex="-1" aria-hidden="true">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="" class="form-label mt-2">Jumlah Tamu<span
                                                        class="text-red">*</span></label>
                                                        <input value="{{$payment->jumlah_tamu}}" name="jumlah_tamu" type="text" class="form-control"
                                                        id="name2">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="form-label mt-2">Fasilitas Extra<span
                                                        class="text-red">*</span></label>
                                                        @if ($payment->fasilitas==0)
                                                        <input value="Tidak Ada" name="fasilitas" type="text" class="form-control"
                                                        id="name2">
                                                        @else
                                                        <input value="Extra Bed" name="fasilitas" type="text" class="form-control"
                                                        id="name2">
                                                        @endif
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                       
                        <div class="mb-0 mt-2 row justify-content-end">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                                <input type="hidden" name="status_pembayaran" value="online">
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
