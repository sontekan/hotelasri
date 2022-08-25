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
           <div class="row ">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row row-sm">
                            <div class="col-xl-5 col-lg-12 col-md-12">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="product-carousel">
                                            <div id="carousel-controls" class="carousel slide border" data-bs-ride="carousel">
                                                <div class="carousel-inner">
     @foreach ($foto as $row)
                                                    <div class="carousel-item {{$loop->iteration == '1' ? 'active':''}}">
                                                        <img class="d-block w-100 br-5" alt="" src="{{asset('storage/'.$row->img_src)}}" data-bs-holder-rendered="true">
                                                    </div>
     @endforeach
                                                   
                                                </div>
                                                <a class="carousel-control-prev" href="#carousel-controls" role="button" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carousel-controls" role="button" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                        {{-- <div class="clearfix carousel-slider">
                                            <div id="thumbcarousel" class="carousel slide" data-bs-interval="t">
                                                <div class="carousel-inner">
                                                    <ul class="carousel-item active">
                                                        @foreach ($foto as $row)
                                                        <li data-bs-target="#Slider" data-bs-slide-to="{{$loop->iteration}}" class="thumb {{$loop->iteration == '2' ? 'active':''}} m-2"><img src="{{asset('storage/'.$row->img_src)}}" alt="img"></li>
                                                        @endforeach
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="details col-xl-7 col-lg-12 col-md-12 mt-4 mt-xl-0">
                                <div class="mt-2 mb-4">
                                    <h3 class="mb-3 fw-semibold">{{$data->nama}}</h3>
                                    <h4 class="mt-4"><b> Deskripsi</b></h4>
                                    <p>{{$data->keterangan}}</p>
                                    <h3 class="mb-4"><span class="me-2 fw-bold fs-25">Rp.{{number_format($data->harga, 0, ',','.')}}/Permalam</span></h3>
                                    <h4 class="mb-4"><span class="me-2 fw-bold fs-25">Fasilitas : <br><h5>{{$data->fasilitas}}</h5></span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
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
@endsection