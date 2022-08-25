@extends('index')

@section('content')
    <!--app-content open-->
<div class="main-content app-content mt-0">
   <div class="side-app">

       <!-- CONTAINER -->
       <div class="main-container container-fluid">

           <!-- PAGE-HEADER -->
           <div class="page-header">
               <h1 class="page-title">Pengguna</h1>
               <div>
                   <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="javascript:void(0)">Pengguna</a></li>
                       <li class="breadcrumb-item active" aria-current="page">Lihat Pengguna</li>
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
                <h3 class="card-title">Pengguna</h3>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                    <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i>{{session('success')}}
                </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">No</th>
                                <th class="wd-15p border-bottom-0">Nama</th>
                                <th class="wd-20p border-bottom-0">Email</th>
                                <th class="wd-20p border-bottom-0">Role</th>
                                <th class="wd-10p border-bottom-0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $row)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->role}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{url ('user/'. Crypt::encryptString($row->id)). '/edit'}}"> <span class="fe fe-edit"> Edit</span></a>
                                    <a class="btn btn-danger" href="{{url ('user/'. Crypt::encryptString($row->id).'/delete')}}"> <span class="fe fe-trash"> Hapus</span></a>
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

