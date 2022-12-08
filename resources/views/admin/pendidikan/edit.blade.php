@extends('components.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-header">Table Edit Menu Pendidikan</h4><br>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST"
                            action="{{ url('pendidikan', $pendidikan->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama">Judul pendidikan</label>
                                <input type="text" class="form-control" id="nama" name="judul" placeholder="Nama"
                                    value="{{ $pendidikan->judul }}">
                            </div>


                            <div class="form-group">
                                <label for="nama"> Isi pendidikan </label>
                                <textarea name="isi"style="width: 100%; height: 150px;"> {{ $pendidikan->isi }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Pembuat</label>
                                <input type="text" class="form-control" id="nama" name="nama_pembuat"
                                    placeholder="nama_pembuat" value="{{ $pendidikan->nama_pembuat }}">
                            </div>
                            <div class="form-group">
                                <label for="nama">Tanggal</label>
                                <input type="text" class="form-control" id="tanggal" name="tanggal"
                                    placeholder="Tanggal" value="{{ $pendidikan->tanggal }}">
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="foto">Masukan Foto</label>
                                        <input class="form-control"type="file" id="foto" name="foto"
                                            value="{{ $pendidikan->foto }}">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="foto1">Masukan Foto</label>
                                        <input class="form-control" type="file" id="foto1" name="foto1"
                                            value="{{ $pendidikan->foto1 }}">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="foto2">Masukan Foto</label>
                                    <input class="form-control" type="file" id="foto2" name="foto2"
                                        value="{{ $pendidikan->foto2 }}">
                                </div>
                            </div>


                            <button style="background-color: chocolate" class="btn btn- float-right"><i
                                    class="fa fa-save"></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
