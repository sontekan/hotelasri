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
                            <li class="breadcrumb-item active" aria-current="page">Edit Pengguna</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Pengguna</div>
                        </div>
                        <form action="{{url('user/'.  Crypt::encryptString($user->id))}}" method="POST">
                            @csrf
                            @method('put')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="name"
                                            value="{{$user->name}}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label for="role">Role</label>
                                        <select name="role" id="role" class="form-control select2 form-select"
                                            data-placeholder="Pilih Fasilitas">
                                            <option value="admin" {{( $user->role == 'admin') ? 'selected' : '' }}>Administrator</option>                                           
                                            <option value="resepsionis" {{( $user->role == 'resepsionis') ? 'selected' : '' }}>Resepsionis</option> 
                                            <option value="member" {{( $user->role == 'member') ? 'selected' : '' }}>Member</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-success my-1">Simpan</button>
                                <a href="{{url('user')}}" class="btn btn-danger my-1">Batal</a>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
                <!--app-content closed-->
            </div>
        </div>
    </div>
@endsection
