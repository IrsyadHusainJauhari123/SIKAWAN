@extends('components.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5"></div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Upload Pendidikan</strong></h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('pendidikan') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="nama">Judul pendidikan</label>
                                <input type="text" class="form-control" id="nama" name="judul" placeholder="Nama">
                            </div>

                            <div class="form-group">
                                <label for="nama">Isi pendidikan </label>
                                <textarea name="isi" style="width: 100%; height: 150px;" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Pembuat</label>
                                <input type="text" class="form-control" id="nama" name="nama_pembuat"
                                    placeholder="nama_pembuat">
                            </div>
                            <div class="form-group">
                                <label for="nama">Tanggal</label>
                                <input type="text" class="form-control" id="tanggal" name="tanggal"
                                    placeholder="Tanggal">
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="foto">Masukan Foto</label>
                                        <input type="file" class="form-control" id="foto" name="foto">
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="foto1">Masukan Foto</label>
                                        <input type="file" class="form-control" id="foto1" name="foto1">
                                    </div>
                                </div>



                                <div class="col-md-3">
                                    <label for="foto2">Masukan Foto</label>
                                    <input type="file" class="form-control" id="foto2" name="foto2">
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
