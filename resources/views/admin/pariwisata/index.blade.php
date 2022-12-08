@extends('components.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12  mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Info pariwisata</strong></h4>
                        <a style="background-color: chocolate" href="{{ url('pariwisata/create') }}"
                            class="btn btn- float-right"><i class="fa fa-plus"></i>
                            Tambah Data</a>
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
                                        {{-- <th>Level Bidang</th> --}}
                                        <th>Isi</th>
                                        {{-- <th>Foto</th> --}}


                                        {{-- <th>Deskripsi</th> --}}
                                        <th width="100px">Aksi</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($list_pariwisata as $pariwisata)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pariwisata->judul }}</td>
                                                <td>{{ $pariwisata->tanggal }}</td>
                                                <td>{{ $pariwisata->nama_pembuat }}</td>
                                                {{-- <td>{{ $pariwisata->level_bidang }}</td> --}}
                                                {{-- <td>{{ $pariwisata->foto }}</td> --}}
                                                <td>{{ $pariwisata->isi }}</td>
                                                {{-- <td>
                                                    <img style="height: 10px" src="{{ "/public/$pariwisata->foto" }}"
                                                        alt="">
                                                <td> --}}
                                                {{-- <td>
                                                    <img style="height: 10px" src="{{ "/public/$pariwisata->foto1" }}"
                                                        alt="">
                                                <td>
                                                <td>
                                                    <img style="height: 10px" src="{{ "/public/$pariwisata->foto2" }}"
                                                        alt="">
                                                <td> --}}

                                                {{-- <td>{{ $pariwisata->deskripsi }}</td> --}}
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('pariwisata', $pariwisata->id) }}/edit"
                                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        @include('components.utils.delete', [
                                                            'url' => url('pariwisata', $pariwisata->id),
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
