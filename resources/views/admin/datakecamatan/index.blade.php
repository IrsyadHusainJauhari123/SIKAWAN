@extends('components.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Data Kecamatan</strong></h4>
                        <a style="background-color: chocolate" href="{{ url('datakecamatan/create') }}"
                            class="btn btn- float-right"><i class="fa fa-plus"></i>Tambah Data File</a>
                    </div>
                    <div class="card-body">
                        <div href="card-body">
                            <div href="container">
                                <table id="table1" class="table table-bordered">
                                    <thead style="background-color: chocolate" class="btn-primary">
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Level</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($list_datakecamatan as $datakecamatan)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $datakecamatan->judul }}</td>
                                                {{-- <td>{{ $datakecamatan->deskripsi }}</td> --}}
                                                <td>{{ $datakecamatan->level }}</td>
                                                <td>{{ $datakecamatan->deskripsi }}</td>
                                                {{-- <td>{{ $datakecamatan->keterangan }}</td>
                                            <td>{{ $datakecamatan->tanggal_masuk }}</td> --}}
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('datakecamatan', $datakecamatan->id) }}/edit"
                                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        @include('components.utils.delete', [
                                                            'url' => url('datakecamatan', $datakecamatan->id),
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
