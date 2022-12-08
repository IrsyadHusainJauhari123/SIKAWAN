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
                        <h4><strong>Upload Data </strong></h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('datakecamatan') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            {{-- <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" id="keterangan">
                            </div> --}}

                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    placeholder="judul">
                            </div>

                            <div class="form-group">
                                <label for="layanan">Data file Kecamatan</label>
                                <select name="level" class="form-control">
                                    <option>--- Level ---</option>
                                    <option value="Rkt">RKT</option>
                                    <option value="Renstra">RENSTRA</option>
                                    <option value="Penjajian kerja">Penjanjian Kerja</option>
                                    <option value="Lkjip">LKJIP</option>
                                </select>
                            </div>
                            {{-- <div class="form-group">
                                <label for="tanggal_masuk">Tangal Masuk</label>
                                <input type="text" class="form-control" name="tanggal_masuk" id="tanggal_masuk">
                            </div> --}}
                            <div class="form-group">
                                <label for="file">Masukan File Pdf | *Max 5Mb </label>
                                <input type="file" class="form-control" id="file" name="file"
                                    required="required">
                            </div>

                            <div class="form-group">
                                <label for="nama">Deskripsi Kegiatan</label><br>
                                <textarea name="deskripsi" style="width: 100%; height: 150px;"></textarea>
                            </div>
                            {{-- <div class="form-group">
                                <label for="foto">Masukan Foto Alur </label>
                                <input type="file" class="form-control" id="foto" name="foto"
                                    required="required">
                            </div>
                            <div class="form-group">
                                <label for="nama">Deskripsi</label>
                                <textarea name="deskripsi" style="width: 100%; height: 150px;"></textarea>
                            </div> --}}

                            <button style="background-color: chocolate" class="btn btn- float-right"><i
                                    class="fa fa-save"></i>Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
