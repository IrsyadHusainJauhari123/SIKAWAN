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
                        <h4><strong> Upload Data Menu Profile</strong></h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('profil') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="level" class="form-control">
                                    <option>--- Level ---</option>
                                    <option value="Visi">Visi</option>
                                    <option value="Misi">Misi</option>
                                    <option value="Tupoksi">Tupoksi</option>
                                    <option value="Sejarah">Sejarah</option>
                                    <option value="galeri">Struktur Anggota</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="deskripsi">Isi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Isi"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="foto">Masukan File / Dokumen</label>
                                        <input class="form-control"type="file" id="foto" name="foto">
                                    </div>
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
