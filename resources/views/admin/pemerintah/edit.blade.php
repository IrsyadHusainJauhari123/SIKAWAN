@extends('components.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5"></div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-header">Table Edit Menu pemerintah</h4>
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST"
                    action="{{ url('pemerintah', $pemerintah->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" value="{{ $pemerintah->nama }}"
                            name="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="periode">Periode</label>
                        <input type="text" class="form-control" id="periode" value="{{ $pemerintah->periode }}"
                            name="periode" placeholder="Periode">
                    </div>

                    <div class="form-group">
                        <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                        <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir"
                            placeholder="Pendidikan_terakhir" value="{{ $pemerintah->pendidikan_terakhir }}">
                    </div>

                    <div class="form-group">
                        <label for="jabatan"> Jabatan</label>
                        <input type="text" class="form-control" id="masa_jabatan" value="{{ $pemerintah->jabatan }}"
                            name="jabatan" placeholder="jabatan">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal_lahir</label>
                        <input type="text" class="form-control" id="tanggal_lahir"
                            value="{{ $pemerintah->tanggal_lahir }}" name="tanggal_lahir" placeholder="tanggal_lahir">
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" value="{{ $pemerintah->tempat_lahir }}"
                            name="tempat_lahir" placeholder="tempat_lahir">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="level" class="form-control">
                            <option value="{{ $pemerintah->level }}">{{ $pemerintah->level }}</option>
                            <option value="Bupati">Bupati</option>
                            <option value="WakilBupati">WakilBupati</option>
                            <option value="Camat">Camat</option>
                            <option value="WakilCamat">WakilCamat</option>
                            {{-- <option value="Galeri">Galeri</option> --}}
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Isi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $pemerintah->deskripsi }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="foto">Masukan Foto</label>
                                <input type="file" class="form-control" id="foto" name="foto"
                                    value="{{ $pemerintah->foto }}">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat"
                            value="{{ $pemerintah->alamat }}">
                    </div>

                    <div class="modal-footer">
                        <button style="background-color: chocolate" type="submit" class="btn btn-"> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
