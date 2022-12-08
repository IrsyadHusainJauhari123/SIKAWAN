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
                        <h3><strong> Edit Laporan Kegiatan</strong></h3>
                    </div>
                    <div class="card-header">
                        <form action="{{ url('kegiatan', $kegiatan->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    value="{{ $kegiatan->judul }}" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="text" class="form-control" id="tanggal" name="tanggal"
                                    value="{{ $kegiatan->tanggal }}" placeholder="Tanggal">
                            </div>
                            <div class="form-group">
                                <label for="nama_pembuat">Nama Pembuat</label>
                                <input type="text" class="form-control" id="nama_pembuat" name="nama_pembuat"
                                    value="{{ $kegiatan->nama_pembuat }}" placeholder="Nama_pembuat">
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="tahun">Tahun</label>
                                    <select name="tahun" class="form-control">
                                        <option value="{{ $kegiatan->tahun }}">{{ $kegiatan->tahun }}</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="foto">Masukan Foto </label>
                                        <input type="file" class="form-control" id="foto" name="foto"
                                            accept="image/*" value="{{ $kegiatan->foto }}">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="foto1">Masukan Foto </label>
                                        <input type="file" class="form-control" id="foto1" name="foto1"
                                            accept="image/*" value="{{ $kegiatan->foto1 }}">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="foto2">Masukan Foto </label>
                                    <input type="file" class="form-control" id="foto2" name="foto2"
                                        accept="image/*" value="{{ $kegiatan->foto2 }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama">Deskripsi Kegiatan</label><br>
                                <textarea name="deskripsi" style="width: 100%; height: 150px;">{{ $kegiatan->deskripsi }}</textarea>
                            </div>
                            <button style="background-color: chocolate" class="btn btn- float-right"><i
                                    class="fa fa-save"></i> Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
