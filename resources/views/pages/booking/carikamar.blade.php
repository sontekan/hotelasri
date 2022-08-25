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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title center-block">Cek Ketersediaan Kamar</div>
                        </div>
                            <div class="card-body">
                                <form method="post" action="{{ url('booking/kamar-tersedia') }}">
                                    @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                            </div>
                                            <input id="checkin" name="checkin" class="form-control fc-datepicker" placeholder="Check In"
                                               type="text">
                                              
                                        </div>
                                        @error('checkin')
                                        <p class="text-red">{{$message}}</p> 
                                    @enderror
                                    </div>
                                    <div class="col-md-4 mt-4 mt-md-0">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <span class="fa fa-calendar tx-16 lh-0 op-6"></span>
                                            </div>
                                            <input id="checkout" name="checkout" class="form-control fc-datepicker" placeholder="Check Out"
                                                type="text">
                                                
                                        </div>
                                        @error('checkout')
                                                <p class="text-red">{{$message}}</p> 
                                            @enderror
                                    </div>
                                    <div class="col-md-2 mt-4 mt-md-0">
                                        <div class="input-group">
                                           
                                                <select name="jumlah_tamu"
                                                class="form-control select2 form-select select2-hidden-accessible"
                                                data-placeholder="Tamu" tabindex="-1" aria-hidden="true">
                                                <option label="Tamu"></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                               
                                            </select>
                                           
                        
                                        </div>
                                        @error('jumlah_tamu')
                                                <p class="text-red">{{$message}}</p> 
                                            @enderror
                                    </div>
                                    <div class="col-md-2 mt-2 mt-md-0">
                                        <div class="input-group">
                                            <input type="submit" class="form-control btn btn-primary center-block"
                                                value="Cek Ketersedian">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div> 
                    </div>
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
