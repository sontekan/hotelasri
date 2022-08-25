<div class="modal fade" id="tambah">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Tambah Fasilitas Kamar</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="post" action="{{url('fasilitas')}}" class="form-horizontal">
                    @csrf
                    <div class=" row mb-4">
                        <label for="inputName" class="col-md-3 form-label">Nama</label>
                        <div class="col-md-9">
                            <input name="fasilitas" type="text" class="form-control" placeholder="TV">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
            </div>
        </form>
        </div>
    </div>
</div>