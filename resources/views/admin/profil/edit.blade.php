@extends('components.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5"></div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-header">Table Edit Menu Profile</h4>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST"
                            action="{{ url('profil', $profil->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" value="{{ $profil->nama }}"
                                    name="nama" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="level" class="form-control">
                                    <option value="{{ $profil->level }}">{{ $profil->level }}</option>
                                    <option value="Visi">Visi</option>
                                    <option value="Misi">Misi</option>
                                    <option value="Tupoksi">Tupoksi</option>
                                    <option value="LatarBelakang">Latar Belakang</option>
                                    <option value="Galeri">Galeri</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Isi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $profil->deskripsi }}</textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="foto">Masukan File / Dokumen</label>
                                        <input class="form-control"type="file" id="foto" name="foto"
                                            value="{{ $profil->foto }}">
                                    </div>
                                </div>
                            </div>
                            <button style="background-color: chocolate" class="btn btn- float-right"><i
                                    class="fa fa-save"></i>
                                Simpan</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
