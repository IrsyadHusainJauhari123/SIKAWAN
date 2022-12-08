@extends ('components.admin')

@section('content')
    <div class="container-fluid">
        <p class="h1 mb-0 text-gray-800" style="font-size: 40px">Dashboard</p>
        <hr class="sedebar-divider d-none d-md-block">
        <div>
            <p class="h4 mb-0 text-gray-800" style="font-size: 20px">Selamat Datang</p>
            <h4 class="h6 mb-0 text-gray-900" style="font-size: 35px">{{ auth()->user()->nama }}</h4>
        </div>




        <div class="col-xl-6 grid-margin stretch-card flex-column">
            {{-- <h5 style="text-align: center" class="mb-2 text-titlecase mb-4">Data Menu Kecamatan Delta Pawan</h5> --}}
            <div class="row" style="margin-top: 4%">
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-inbox"></i></span>

                        <div class="info-box-content" style="color: #059bac">
                            <span class="info-box-text">Berita</span>
                            <span class="info-box-number">
                                <h4>{{ $berita->count() }}</h4>
                                <a href="{{ url('berita') }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-book"></i></span>

                        <div class="info-box-content" style="color:     #059bac">
                            <span class="info-box-text">Kegiatan</span>
                            <span class="info-box-number">
                                <h4>{{ $kegiatan->count() }}</h4>
                                <a href="{{ url('kegiatan') }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
