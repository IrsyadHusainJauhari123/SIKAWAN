@extends('components.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-10"></div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3><strong>Laporan Kegiatan</strong></h3>
                    </div>
                    <div class="card-header">
                        <form action="{{ url('kegiatan') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    placeholder="judul">
                            </div>

                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="text" class="form-control" id="tanggal" name="tanggal"
                                    placeholder="tanggal">
                            </div>

                            <div class="form-group">
                                <label for="nama">Nama Pembuat</label>
                                <input type="text" class="form-control" id="nama_pembuat" name="nama_pembuat"
                                    placeholder="nama_pembuat">
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="nama">Tahun</label>
                                    <select class="form-control" name="tahun">
                                        <option>-- Pilih Tahun --</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2022</option>
                                        <option value="2021">2023</option>
                                        <option value="2022">2024</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="foto">Masukan Foto </label>
                                        <input type="file" id="foto" class="form-control" name="foto"
                                            required="required" accept="image/*">
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="foto">Masukan Foto </label>
                                        <input type="file" id="foto1" class="form-control" name="foto1"
                                            required="required" accept="image/*">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="foto2">Masukan Foto </label>
                                    <input type="file" id="foto2" class="form-control" name="foto2"
                                        required="required" accept="image/*">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nama">Deskripsi Kegiatan</label><br>
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
