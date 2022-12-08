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
                        <h4><strong> Upload Data Menu pemerintah</strong></h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('pemerintah') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                            </div>

                            <div class="form-group">
                                <label for="periode">Periode</label>
                                <input type="text" class="form-control" id="periode" name="periode"
                                    placeholder="Periode">
                            </div>



                            <div class="form-group">
                                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                <input type="text" class="form-control" id="pendidikan_terakhir"
                                    name="pendidikan_terakhir" placeholder="Pendidikan_terakhir">
                            </div>

                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                    placeholder="Tempat_Lahir">
                            </div>

                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal_Lahir</label>
                                <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                    placeholder="Tempat_Lahir">
                            </div>

                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan"
                                    placeholder=" Jabatan">
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="level" class="form-control">
                                    <option>--- Level ---</option>
                                    <option value="Bupati">Bupati</option>
                                    <option value="WakilBupati">WakilBupati</option>
                                    <option value="CAMAT">CAMAT</option>
                                    <option value="Wakil Camat">Wakil Camat</option>
                                    {{-- <option value="Galeri">Galeri</option> --}}
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="deskripsi">Isi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Isi"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="foto">Masukan Foto</label>
                                        <input type="file" class="form-control" id="foto" name="foto">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    placeholder="alamat">
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
