@extends('components.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12  mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Info kebudayaan</strong></h4>
                        <a style="background-color: chocolate" href="{{ url('kebudayaan/create') }}"
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
                                        @foreach ($list_kebudayaan as $kebudayaan)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $kebudayaan->judul }}</td>
                                                <td>{{ $kebudayaan->tanggal }}</td>
                                                <td>{{ $kebudayaan->nama_pembuat }}</td>
                                                {{-- <td>{{ $kebudayaan->level_bidang }}</td> --}}
                                                {{-- <td>{{ $kebudayaan->foto }}</td> --}}
                                                <td>{{ $kebudayaan->isi }}</td>
                                                {{-- <td>
                                                    <img style="height: 10px" src="{{ "/public/$kebudayaan->foto" }}"
                                                        alt="">
                                                <td> --}}
                                                {{-- <td>
                                                    <img style="height: 10px" src="{{ "/public/$kebudayaan->foto1" }}"
                                                        alt="">
                                                <td>
                                                <td>
                                                    <img style="height: 10px" src="{{ "/public/$kebudayaan->foto2" }}"
                                                        alt="">
                                                <td> --}}

                                                {{-- <td>{{ $kebudayaan->deskripsi }}</td> --}}
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('kebudayaan', $kebudayaan->id) }}/edit"
                                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        @include('components.utils.delete', [
                                                            'url' => url('kebudayaan', $kebudayaan->id),
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
