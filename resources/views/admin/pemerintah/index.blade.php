@extends('components.admin')

@section('content')
    <div class="container">
        <div class="card mt-3 pt-3">
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        <div class="container-fluid">
                            <div class="col-md-8">
                                <h4><strong> Menu pemerintah </strong></h4>
                            </div>
                            <div class="">
                                <a style="background-color: chocolate" style="margin-right: 3%"
                                    href="{{ url('pemerintah/create') }}" class="btn btn  float-right"><i
                                        class="fa fa-plus"></i> Tambah data</a>
                            </div><br>
                            <div class="card-body">
                                <div class="container">
                                    <table id="table1" class="table table-bordered">
                                        <thead style="background-color: chocolate" class="btn-primary">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Tempat Lahir</th>
                                            <th>Periode</th>
                                            <th>Pendidikan Terakhir</th>
                                            <th>Jabatan</th>
                                            <th>Alamat</th>
                                            {{-- <th>Level</th> --}}
                                            <th width="100px">Aksi</th>
                                        </thead>
                                        @foreach ($list_pemerintah as $pemerintah)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pemerintah->nama }}</td>
                                                <td>{{ $pemerintah->tanggal_lahir }}</td>
                                                <td>{{ $pemerintah->tempat_lahir }}</td>
                                                <td>{{ $pemerintah->periode }}</td>
                                                <td>{{ $pemerintah->pendidikan_terakhir }}</td>
                                                <td>{{ $pemerintah->jabatan }}</td>
                                                <td>{{ $pemerintah->alamat }}</td>
                                                {{-- <td>{{ $pemerintah->level }}</td> --}}
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('pemerintah', $pemerintah->id) }}/edit"
                                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        @include('components.utils.delete', [
                                                            'url' => url('pemerintah', $pemerintah->id),
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
    </div>
@endsection
