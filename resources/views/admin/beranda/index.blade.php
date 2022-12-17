@extends('components.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Halaman Beranda</strong></h4>
                        <a style="background-color: chocolate" href="{{ url('beranda/create') }}" class="btn btn- float-right">
                            <i class="fa fa-plus"></i>Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="container">
                                <table id="table1" class="table table-bordered">
                                    <thead style="background-color: chocolate" class="btn-primary">
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Foto1</th>
                                        <th>Foto2</th>
                                        <th>Youtube</th>
                                        <th>Isi</th>
                                        <th width="100px">Aksi</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($list_beranda as $beranda)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                {{-- <td>{{ $beranda->foto }}</td> --}}
                                                <td>
                                                    <img style="height: 20px" src="{{ "/public/$beranda->foto" }}"
                                                        alt="">
                                                </td>
                                                <td>
                                                    <img style="height: 20px" src="{{ "/public/$beranda->foto1" }}"
                                                        alt="">
                                                </td>
                                                <td>
                                                    <img style="height: 20px" src="{{ "/public/$beranda->foto2" }}"
                                                        alt="">
                                                </td>
                                                <td>{{ $beranda->youtub }}</td>
                                                <td>{{ $beranda->isi }}</td>
                                                <td>

                                                    <div class="btn-group">
                                                        <a href="{{ url('beranda', $beranda->id) }}/edit"
                                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        @include('components.utils.delete', [
                                                            'url' => url('beranda', $beranda->id),
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
