@extends('index')

@section('content')
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Cari Ketersediaan Kamar</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cek Ketersedian Kamar</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-1 OPEN -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title col-lg-10">Kamar Yang Tersedia Pada Tanggal {{date('d-m-Y',strtotime ($checkin))}} - {{date('d-m-Y',strtotime ($checkout))}}
                            </div>
                            <a href="{{url('booking/cek-kamar')}}" class="btn btn-outline-primary btn-block mt-2">Cek Tanggal Lain</a>
                        </div>
                        <div class="card-body">
                            @foreach ($data as $key => $row )
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="row g-0">
                                                <div class="col-xl-3 col-lg-12 col-md-12">
                                                    <div class="product-list">
                                                        <div class="product-image">
                                                        </div>
                                                        <div class="br-be-0 br-te-0">
                                                            <a class="">
                                                                <img src="{{ asset('storage/' . $row['tipekamar']['banner']) }}"
                                                                    alt="img" class="cover-image br-7 w-100">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 col-md-12 border-end my-auto">
                                                    <div class="card-body">
                                                        <div class="mb-3">
                                                            <a class="">
                                                                <h3 class="fw-bold fs-30 mb-3 text-primary">
                                                                    {{$row['tipekamar']['nama'] }}
                                                                </h3>
                                                                <div class="mb-2 text-warning">
                                                                    <a class="bi bi-tv fs-15 text-black"> TV &nbsp</a>
                                                                    <a class="bi bi-wifi fs-15 text-black"> Wifi &nbsp</a>
                                                                    <a class="text-black"><img
                                                                            src="{{ asset('assets/iconfonts/parkir.png') }}"
                                                                            width="25">Parkir &nbsp</a>
                                                                    <a class="bi bi-bell fs-15 text-black"> Resepsionis 24
                                                                        Jam</a>
                                                                </div>
                                                            </a>
                                                            <p class="fs-16">{{ $row['tipekamar']['keterangan'] }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-12 col-md-12 my-auto">
                                                    <div class="card-body p-0">
                                                        <div class="price h3 text-center mb-5 fw-bold">Rp
                                                            {{ $row['tipekamar']['harga'] }} <p class="h6 text-danger text-center">per
                                                                kamar per malam</p>
                                                        </div>
                                                        <form action="{{ url('booking/' .Crypt::encryptString($row['tipekamar']['id'])). '/pesan' }}"
                                                            method="get">
                
                                                            <button type="submit" class="btn btn-primary btn-block"><i
                                                                    class="bi bi-calendar2-check mx-2"></i>Pesan
                                                                Sekarang</button>
                                                            <input type="hidden" value="{{ $checkin }}"
                                                                name="checkin">
                                                            <input type="hidden" value="{{ $checkout }}" name="checkout">
                                                            <input type="hidden" value="{{ $jumlah_tamu }}" name="jumlah_tamu">
                                                         

                                                        </form>


                                                        {{-- <a href="{{ url ('detail/'. Crypt::encryptString($row['tipekamar']['id'])) }}"
                                                            class="btn btn-outline-primary btn-block mt-2">Lihat
                                                            Detail Kamar</a> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
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
@endsection
