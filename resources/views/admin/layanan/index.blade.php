@extends('components.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Data Layanan Masyarakat</h4>

                        <a style="background-color: chocolate" href="{{ url('layanan/create') }}"
                            class="btn btn- float-right"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <div href="card-body">
                            <div href="container">
                                <table id="table1" class="table table-bordered">
                                    <thead style="background-color: chocolate" class="btn-primary">
                                        <th>No</th>
                                        <th>Deskripsi</th>
                                        <th>Level</th>
                                        <th>Keterangan</th>
                                        <th>Tanggal Masuk</th>
                                        <th width="100px">Aksi</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($list_layanan as $layanan)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $layanan->deskripsi }}</td>
                                                <td>{{ $layanan->level }}</td>
                                                <td>{{ $layanan->keterangan }}</td>
                                                <td>{{ $layanan->tanggal_masuk }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('layanan', $layanan->id) }}/edit"
                                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        @include('components.utils.delete', [
                                                            'url' => url('layanan', $layanan->id),
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
