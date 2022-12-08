@extends('components.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Data Kelurahan dan Desa</strong></h4>
                        <a style="background-color: chocolate" href="{{ url('kelurahan/create') }}"
                            class="btn btn- float-right"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="container">
                                <table id="table1" class="table table-bordered">
                                    <thead style="background-color: chocolate" class="btn-primary">
                                        <th>No</th>
                                        <th>Nama Kelurahan</th>
                                        <th>Nama Desa</th>
                                        {{-- <th>Jumlah RT</th>
                                        <th>Jumlah RW</th>
                                        <th>Jumlah Dusun</th> --}}
                                        <th>Kepala Desa</th>
                                        <th>Alamat</th>
                                        <th>Isi</th>
                                        <th width="100px">Aksi</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($list_kelurahan as $kelurahan)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $kelurahan->nama_kelurahan }}</td>
                                                <td>{{ $kelurahan->nama_desa }}</td>
                                                {{-- <td>{{ $kelurahan->jumlah_rt }}</td>
                                                <td>{{ $kelurahan->jumlah_rw }}</td>
                                                <td>{{ $kelurahan->jumlah_dusun }}</td> --}}
                                                <td>{{ $kelurahan->kepala_desa }}</td>
                                                <td>{{ $kelurahan->alamat }}</td>
                                                <td>{{ $kelurahan->isi }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('kelurahan', $kelurahan->id) }}/edit"
                                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        @include('components.utils.delete', [
                                                            'url' => url('kelurahan', $kelurahan->id),
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
