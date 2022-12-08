@extends('components.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Info Kegiatan</strong></h4>
                        <a style="background-color: chocolate" href="{{ url('kegiatan/create') }}"
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
                                        <th>Tahun</th>
                                        {{-- <th>Foto</th> --}}

                                        {{-- <th>Deskripsi</th> --}}
                                        <th width="100px">Aksi</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($list_kegiatan as $kegiatan)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $kegiatan->judul }}</td>
                                                <td>{{ $kegiatan->tanggal }}</td>
                                                <td>{{ $kegiatan->nama_pembuat }}</td>
                                                {{-- <td>{{ $kegiatan->foto }}</td> --}}
                                                <td>{{ $kegiatan->tahun }}</td>
                                                {{-- <td>{{ $kegiatan->deskripsi }}</td> --}}
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('kegiatan', $kegiatan->id) }}/edit"
                                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        @include('components.utils.delete', [
                                                            'url' => url('kegiatan', $kegiatan->id),
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
