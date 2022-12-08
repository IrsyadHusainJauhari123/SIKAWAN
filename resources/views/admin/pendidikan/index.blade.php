@extends('components.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12  mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Info pendidikan</strong></h4>
                        <a style="background-color: chocolate" href="{{ url('pendidikan/create') }}"
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
                                        @foreach ($list_pendidikan as $pendidikan)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pendidikan->judul }}</td>
                                                <td>{{ $pendidikan->tanggal }}</td>
                                                <td>{{ $pendidikan->nama_pembuat }}</td>
                                                {{-- <td>{{ $pendidikan->level_bidang }}</td> --}}
                                                {{-- <td>{{ $pendidikan->foto }}</td> --}}
                                                <td>{{ $pendidikan->isi }}</td>
                                                {{-- <td>
                                                    <img style="height: 10px" src="{{ "/public/$pendidikan->foto" }}"
                                                        alt="">
                                                <td> --}}
                                                {{-- <td>
                                                    <img style="height: 10px" src="{{ "/public/$pendidikan->foto1" }}"
                                                        alt="">
                                                <td>
                                                <td>
                                                    <img style="height: 10px" src="{{ "/public/$pendidikan->foto2" }}"
                                                        alt="">
                                                <td> --}}

                                                {{-- <td>{{ $pendidikan->deskripsi }}</td> --}}
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('pendidikan', $pendidikan->id) }}/edit"
                                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        @include('components.utils.delete', [
                                                            'url' => url('pendidikan', $pendidikan->id),
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
