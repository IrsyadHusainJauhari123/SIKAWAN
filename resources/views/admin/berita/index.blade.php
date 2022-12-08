@extends('components.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12  mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Info berita</strong></h4>
                        <a style="background-color: chocolate" href="{{ url('berita/create') }}"
                            class="btn btn- float-right"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="container">
                                <table id="table1" class="table table-datatable table-bordered">
                                    <thead style="background-color: chocolate" class="btn-primary">
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Tanggal</th>
                                        <th>Nama Pembuat</th>
                                        <th>Berita</th>
                                        {{-- <th>Foto</th> --}}


                                        {{-- <th>Deskripsi</th> --}}
                                        <th width="100px">Aksi</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($list_berita as $berita)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $berita->judul }}</td>
                                                <td>{{ $berita->tanggal }}</td>
                                                <td>{{ $berita->nama_pembuat }}</td>
                                                {{-- <td>{{ $berita->foto }}</td> --}}
                                                <td>{{ $berita->isi }}</td>
                                                {{-- <td>
                                                    <img style="height: 10px" src="{{ "/public/$berita->foto" }}"
                                                        alt="">
                                                <td> --}}
                                                {{-- <td>
                                                    <img style="height: 10px" src="{{ "/public/$berita->foto1" }}"
                                                        alt="">
                                                <td>
                                                <td>
                                                    <img style="height: 10px" src="{{ "/public/$berita->foto2" }}"
                                                        alt="">
                                                <td> --}}

                                                {{-- <td>{{ $berita->deskripsi }}</td> --}}
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('berita', $berita->id) }}/edit"
                                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        @include('components.utils.delete', [
                                                            'url' => url('berita', $berita->id),
                                                        ])
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
