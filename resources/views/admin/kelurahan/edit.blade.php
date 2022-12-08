@extends('components.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3><strong>Edit Data Kelurahan</strong></h3>
                    </div>
                    <div class="card-header">
                        <form action="{{ url('kelurahan', $kelurahan->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" name="judul" value="{{ $kelurahan->judul }}">
                            </div>
                            <div class="form-group">
                                <label for="nama_kelurahan">Nama Kelurahan</label>
                                <input type="text" class="form-control" name="nama_kelurahan"
                                    value="{{ $kelurahan->nama_kelurahan }}">
                            </div>
                            <div class="form-group">
                                <label for="nama_desa">Nama Desa</label>
                                <input type="text" class="form-control" name="nama_desa"
                                    value="{{ $kelurahan->nama_desa }}">
                            </div>
                            {{-- <div class="form-group">
                                <label for="jumlah_rt">Jumlah RT</label>
                                <input type="text" class="form-control" name="jumlah_rt"
                                    value="{{ $kelurahan->jumlah_rt }}">
                            </div>
                            <div class="form-group">
                                <label for="jumlah_rw">Jumlah RW</label>
                                <input type="text" class="form-control" name="jumlah_rw"
                                    value="{{ $kelurahan->jumlah_rw }}">
                            </div>
                            <div class="form-group">
                                <label for="jumlah_dusun">Jumlah Dusun</label>
                                <input type="text" class="form-control" name="jumlah_dusun"
                                    value="{{ $kelurahan->jumlah_dusun }}">
                            </div> --}}
                            <div class="form-group">
                                <label for="kepala_desa">Kepala Desa</label>
                                <input type="text" class="form-control" name="kepala_desa"
                                    value="{{ $kelurahan->kepala_desa }}">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{ $kelurahan->alamat }}">
                            </div>
                            <div class="form-group">
                                <label for="nama">Isi </label>
                                <textarea name="isi" style="width: 100%; height: 150px;">{{ $kelurahan->isi }}</textarea>
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
