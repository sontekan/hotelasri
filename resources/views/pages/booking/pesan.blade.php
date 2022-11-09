@extends('index')

@section('content')
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Informasi Reservasi</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Informasi Reservasi</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-1 OPEN -->
                <!-- Row -->
                <div class="row">
                   
                    <div class="col-xl-8 col-md-12">
                        <form action="{{url('booking/payment')}}" method="get">
                            
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Detail Tamu</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{-- <label class="form-label">Nama Lengkap<span class="text-red">*</span></label> --}}
                                        <input name="tamu" type="text" class="form-control" placeholder="Nama Lengkap Tamu">
                                        <h6 class="text-black">Seperti di KTP/Paspor/SIM (tanpa tanda baca dan gelar)</h6>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Fasilitas Extra</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-md-12">
                                    <div class="form-group">
        
                                        <select name="fasilitas" id="layanan" onchange="update()" class="form-control select2 form-select"
                                            data-placeholder="Pilih Fasilitas">
                                            <option value="0" label="Pilih Fasilitas">Pilih Fasilitas</option>
                                            <option value="50000">Ekstra Bed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button  id="pay-button" type="submit" class="btn btn-primary">Pesan Sekarang</button>
                                <input type="hidden" name="harga" value="{{ $pesan->harga }}">
                                <input type="hidden" name="nama" value="{{ $pesan->nama }}">
                                <input type="hidden" name="checkin" value="{{ $checkin }}">
                                <input type="hidden" name="checkout" value="{{ $checkout }}">
                                <input type="hidden" name="jumlah_tamu" value="{{ $jumlah_tamu }}">
                                @auth
                                <input type="hidden" name="pemesan" value="{{auth()->user()->id }}">
                                <input type="hidden" name="email" value="{{auth()->user()->email }}">
                                <input type="hidden" name="namapemesan" value="{{auth()->user()->name }}">
                                @endauth
                              
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="card cart">
                            <div class="card-header">
                                <h3 class="card-title">Detail Pesanan</h3>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    <div class="d-flex">
                                        <img class="avatar-xxl br-7"
                                            src="{{ asset('storage/' . $pesan->banner) }}" alt="img">
                                        <div class="ms-3">
                                            <h3 class="mb-3 fw-semibold fs-14">{{ $pesan->nama }}</h3>
                                            <p class="mb-3 fw-semibold fs-14">Check In {{ $checkin }}</p>
                                            <p class="mb-3 fw-semibold fs-14">Check Out {{ $checkout }}</p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-group border br-7 mt-5">
                                    <li class="list-group-item border-0">
                                        {{ $pesan->nama }}
                                        <span id="harga" class="h6 fw-bold mb-0 float-end">{{ $pesan->harga }}</span>
                                    </li>
                                    <li class="list-group-item border-0">
                                       Fasilitas Extra
                                        <span id="value" class="h6 fw-bold mb-0 float-end"></span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!--app-content closed-->
    </div>

@section('scripts')
    <script>
        function update() {
            var select = document.getElementById('layanan');
            var option = select.options[select.selectedIndex];
            document.getElementById('value').innerHTML = option.value;
        }

        update();
    </script>
@endsection
@endsection
