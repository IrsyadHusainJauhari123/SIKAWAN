@extends('components.admin')

@section('content')
    <div class="container">
        <div class="card mt-3 pt-3">
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        <div class="container-fluid">
                            <div class="col-md-8">
                                <h4><strong> Menu Profil </strong></h4>
                            </div>
                            <div class="">
                                <a style="background-color: chocolate" style="margin-right: 3%"
                                    href="{{ url('profil/create') }}" class="btn btn- float-right"><i
                                        class="fa fa-plus"></i> Tambah Data</a>
                            </div><br>
                            <div class="card-body">
                                <div class="container">
                                    <table id="table1" class="table table-bordered">
                                        <thead style="background-color: chocolate" class="btn-">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Level</th>
                                            <th width="100px">Aksi</th>
                                        </thead>
                                        @foreach ($list_profil as $profil)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $profil->nama }}</td>
                                                <td>{{ $profil->level }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('profil', $profil->id) }}/edit"
                                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        @include('components.utils.delete', [
                                                            'url' => url('profil', $profil->id),
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
