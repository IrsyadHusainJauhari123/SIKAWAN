@extends('components.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3><strong>Data Beranda</strong></h3>
                    </div>
                    <div class="card-header">
                        <form action="{{ url('beranda', $beranda->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="isi">Isi</label><br>
                                <textarea name="isi" style="width: 100%; height: 150px;">{{ $beranda->isi }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="youtub"> Url Youtube</label>
                                <input type="text" class="form-control" id="youtub" name="youtub"
                                    placeholder="youtub" value="{{ $beranda->youtub }}">
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="foto" class="control-label">Foto</label>
                                        <input type="file" value="{{ $beranda->foto }}" class="form-control"
                                            name="foto" accept=".png">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="control-label">Foto1</label>
                                        <input type="file" value="{{ $beranda->foto1 }}" class="form-control"
                                            name="foto1" accept=".png">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="control-label">Foto2</label>
                                        <input type="file" value="{{ $beranda->foto2 }}" class="form-control"
                                            name="foto2" accept=".png">
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="control-label">Foto3</label>
                                        <input type="file" class="form-control" name="foto3" accept=".png">
                                    </div>
                                </div>
                            </div> --}}


                            <button style="background-color: chocolate" class="btn btn- float-right"><i class="fa fa-save">
                                    Simpan</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
