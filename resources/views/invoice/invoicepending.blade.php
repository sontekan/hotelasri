@extends('index')

@section('content')
    <!--app-content open-->
<div class="main-content app-content mt-0">
   <div class="side-app">

       <!-- CONTAINER -->
       <div class="main-container container-fluid">

           <!-- PAGE-HEADER -->
           <div class="page-header">
               <h1 class="page-title">Empty</h1>
               <div>
                   <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                       <li class="breadcrumb-item active" aria-current="page">Empty</li>
                   </ol>
               </div>
           </div>
           <!-- PAGE-HEADER END -->

           <!-- ROW-1 OPEN -->
           <!-- Row -->
           <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <a class="header-brand" href="index.html">
                                    <img src="{{asset ('assets')}}/images/brand/logo-green-update.png" class="header-brand-img logo-3" alt="Sash logo">
                                    <img src="{{asset ('assets')}}/images/brand/logo-white-update.png" class="header-brand-img logo" alt="Sash logo">
                                </a>
                                <div>
                                    <address class="pt-3">
                                        Jl. Hasanudin Timur No.78 Genteng<br> 
                                        Kabupaten Banyuwangi, Jawa Timur 65144<br>
                                        pelanggan@hotelasri.com
                                    </address>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-lg-6">
                                <p class="h3">Kepada :</p>
                                <p class="fs-18 fw-semibold mb-0"> {{$data->nama_pemesan}}</p>
                                <address>
                                    {{$data->email}}<br>
                                        {{$data->no_hp}}
                                        
                                    </address>
                            </div>
                            <div class="col-lg-6 text-end">
                                <p class="h4 fw-semibold">Detail Pembayaran:</p>
                                <p class="mb-1">Total : Rp.{{number_format($data->gross_amount, 2, ',','.')}}</p>
                                <p class="mb-1">Tipe Pembayaran: {{$data->payment_type}}</p>
                                <p class="mb-1">Tanggal: {{date('d/m/Y',strtotime ($data->transaction_time))}}</p>
                               
                            </div>
                        </div>
                        <div class="table-responsive push">
                            <table class="table table-bordered table-hover mb-0 text-nowrap">
                                <tbody>
                                    <tr class=" ">
                                        <th class="text-center">No</th>
                                        <th>Pesanan</th>
                                       
                                        <th>Harga</th>
                                        <th>Diskon</th>
                                        <th class="text-end">Total</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>
                                            <p class="font-w600 mb-1">Kamar Tipe {{$data->nama}}</p>
                                        </td>
                                       
                                        <td>
                                            <p class="font-w600 mb-1">Rp.{{number_format($data->harga, 2, ',','.')}}</p>
                                        </td>
                                        <td>
                                            <p class="font-w600 mb-1">Rp.0,00</p>
                                        </td>
                                        <td class="text-end">Rp.{{number_format($data->harga, 2, ',','.')}}</td>
                                    </tr>
                                    @if ($data->fasilitas == 0)
                                        
                                    @else
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>
                                            <p class="font-w600 mb-1">Extra Bed</p>
                                        </td>
                                        
                                        <td>
                                            <p class="font-w600 mb-1">Rp.{{number_format($data->fasilitas,2, ',','.')}}</p>
                                        </td>
                                        <td>
                                            <p class="font-w600 mb-1">Rp.0,00</p>
                                        </td>
                                        <td class="text-end">Rp.{{number_format($data->fasilitas,2, ',','.')}}</td>
                                    </tr>
                                    @endif
                                    <tr>

                                    </tr>
                                    <tr>
                                        <td colspan="4" class="fw-bold text-uppercase text-end">Total</td>
                                        <td class="fw-bold text-end h4">{{number_format($data->gross_amount, 2, ',','.')}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-6">
                                <p class="h5 fw-semibold"><span class="text-red">*</span>Pembayaran Belum Berhasil !</p> 
                                <p class="h6 fw-semibold">Cek Email Anda Untuk Melihat Instruksi Pembayaran</p>
                            </div>
                            <div class="col-lg-6 text-end">
                                <a type="button" class="btn btn-primary mb-1" href="{{url('/')}}"><i class="icon icon-home"></i> Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COL-END -->
        </div>
           <!-- /Row -->
       </div>
       <!-- CONTAINER CLOSED -->
   </div>
</div>
<!--app-content closed-->
</div> 
@endsection