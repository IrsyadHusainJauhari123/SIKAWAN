@extends('components.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3><strong>Data Kelurahan</strong></h3>
                    </div>
                    <div class="card-header">
                        <form action="{{ url('kelurahan') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" name="judul">
                            </div>
                            <div class="form-group">
                                <label for="nama_kelurahan">Nama Kelurahan</label>
                                <input type="text" class="form-control" name="nama_kelurahan">
                            </div>
                            {{-- <div class="form-group">
                                <label for="jumlah_rw">Jumlah Dusun</label>
                                <input type="text" class="form-control" name="jumlah_dusun">
                            </div>
                            <div class="form-group">
                                <label for="jumlah_rt">Jumlah RT</label>
                                <input type="text" class="form-control" name="jumlah_rt">
                            </div>
                            <div class="form-group">
                                <label for="jumlah_dusun">Jumlah RW</label>
                                <input type="text" class="form-control" name="jumlah_rw">
                            </div> --}}
                            <div class="form-group">
                                <label for="nama_desa">Nama Desa</label>
                                <input type="text" class="form-control" name="nama_desa">
                            </div>
                            <div class="form-group">
                                <label for="kepala_desa">Kepala Desa</label>
                                <input type="text" class="form-control" name="kepala_desa">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat">
                            </div>
                            <div class="form-group">
                                <label for="nama">Isi </label>
                                <textarea name="isi" style="width: 100%; height: 150px;"></textarea>
                            </div>
                            <button style="background-color: chocolate" class="btn btn- float-right"><i
                                    class="fa fa-save"></i> Simpan Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
