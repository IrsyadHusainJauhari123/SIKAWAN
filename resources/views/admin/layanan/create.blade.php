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
                        <h4><strong>Upload Layanan </strong></h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('layanan') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" id="keterangan">
                            </div>

                            <div class="form-group">
                                <label for="layanan">Layanan Pembuatan</label>
                                <select name="level" class="form-control">
                                    <option>--- Level ---</option>
                                    <option value="Kk"> Surat Pembuatan KK</option>
                                    <option value="KTP"> Surat Pembuatan KTP</option>
                                    <option value="Penelitian"> Surat Izin Penelitian</option>
                                    <option value="Mikro"> Surat Izin Usaha MIkro</option>
                                    <option value="Pensiun"> Surat Keterangan Pensiun</option>
                                    <option value="Nikah"> Surat Diapensi Nikah</option>
                                    <option value="Waris"> Surat Keterangan Waris</option>
                                    <option value="Informasi"> Surat Permhonan Informasi Publik</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_masuk">Tangal Masuk</label>
                                <input type="text" class="form-control" name="tanggal_masuk" id="tanggal_masuk">
                            </div>
                            <div class="form-group">
                                <label for="file">Masukan File Pdf | *Max 5Mb </label>
                                <input type="file" class="form-control" id="file" name="file"
                                    required="required">
                            </div>
                            <div class="form-group">
                                <label for="foto">Masukan Foto Alur </label>
                                <input type="file" class="form-control" id="foto" name="foto"
                                    required="required">
                            </div>
                            <div class="form-group">
                                <label for="nama">Deskripsi</label>
                                <textarea name="deskripsi" style="width: 100%; height: 150px;"></textarea>
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
