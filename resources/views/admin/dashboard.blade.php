@extends ('components.admin')

@section('content')
    <div class="container-fluid">
        <p class="h1 mb-0 text-gray-800" style="font-size: 40px">Dashboard</p>
        <hr class="sedebar-divider d-none d-md-block">
        <div>
            <p class="h4 mb-0 text-gray-800" style="font-size: 20px">Selamat Datang</p>
            <h4 class="h6 mb-0 text-gray-900" style="font-size: 35px">{{ auth()->user()->nama }}</h4>
            <hr>
        </div>




        <div class="col-xl-12 grid-margin stretch-card flex-column">
            {{-- <h5 style="text-align: center" class="mb-2 text-titlecase mb-4">Data Menu Kecamatan Delta Pawan</h5> --}}
            <div class="row" style="margin-top: 4%">
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box">
                        <span style="background-color: chocolate" class="info-box-icon bg- elevation-1"><i
                                class="fas fa-bullhorn"></i></span>

                        <div class="info-box-content" style="color: chocolate">
                            <span class="info-box-text">Berita</span>
                            <span class="info-box-number">
                                <h4>{{ $berita->count() }}</h4>
                                <a style="color: chocolate" href="{{ url('berita') }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-col-sm-6 col-md-6 ">
                    <div class="info-box">
                        <span style="background-color: chocolate" class="info-box-icon bg- elevation-1"><i
                                class="fas fa-bullhorn"></i></span>

                        <div class="info-box-content"style="color: chocolate">
                            <span class="info-box-text">Kegiatan</span>
                            <span class="info-box-number">
                                <h4>{{ $kegiatan->count() }}</h4>
                                <a style="color: chocolate" href="{{ url('kegiatan') }}" class="small-box-footer">More info
                                    <i class="fas fa-arrow-circle-right"></i></a>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box">
                        <span style="background-color: chocolate" class="info-box-icon bg- elevation-1"><i
                                class="fas  fa fa-bars"></i></span>

                        <div class="info-box-content" style="color: chocolate">
                            <span class="info-box-text">Bidang Pariwisata</span>
                            <span class="info-box-number">
                                <h4>{{ $pariwisata->count() }}</h4>
                                <a style="color: chocolate" href="{{ url('pariwisata') }}" class="small-box-footer">More
                                    info <i class="fas fa-arrow-circle-right"></i></a>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-md-col-sm-6 col-md-6 ">
                    <div class="info-box">
                        <span style="background-color: chocolate" class="info-box-icon bg- elevation-1"><i
                                class="fas  fa fa-bars"></i></span>

                        <div class="info-box-content"style="color: chocolate">
                            <span class="info-box-text">Bidang Kebudayaan</span>
                            <span class="info-box-number">
                                <h4>{{ $kebudayaan->count() }}</h4>
                                <a style="color: chocolate" href="{{ url('kebudayaan') }}" class="small-box-footer">More
                                    info <i class="fas fa-arrow-circle-right"></i></a>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-md-col-sm-6 col-md-6 ">
                    <div class="info-box">
                        <span style="background-color: chocolate" class="info-box-icon bg- elevation-1"><i
                                class="fas  fa fa-bars"></i></span>

                        <div class="info-box-content"style="color: chocolate">
                            <span class="info-box-text">Bidang Pendidikan</span>
                            <span class="info-box-number">
                                <h4>{{ $pendidikan->count() }}</h4>
                                <a style="color: chocolate" href="{{ url('pendidikan') }}" class="small-box-footer">More
                                    info <i class="fas fa-arrow-circle-right"></i></a>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-md-col-sm-6 col-md-6 ">
                    <div class="info-box">
                        <span style="background-color: chocolate" class="info-box-icon bg- elevation-1"><i
                                class="fas fas fa-file"></i></span>

                        <div class="info-box-content"style="color: chocolate">
                            <span class="info-box-text">Layanan</span>
                            <span class="info-box-number">
                                <h4>{{ $layanan->count() }}</h4>
                                <a style="color: chocolate" href="{{ url('layanan') }}" class="small-box-footer">More info
                                    <i class="fas fa-arrow-circle-right"></i></a>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-md-col-sm-6 col-md-6 ">
                    <div class="info-box">
                        <span style="background-color: chocolate" class="info-box-icon bg- elevation-1"><i
                                class="fas fa-book"></i></span>

                        <div class="info-box-content"style="color: chocolate">
                            <span class="info-box-text">Profil</span>
                            <span class="info-box-number">
                                <h4>{{ $profil->count() }}</h4>
                                <a style="color: chocolate" href="{{ url('profil') }}" class="small-box-footer">More info
                                    <i class="fas fa-arrow-circle-right"></i></a>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-md-col-sm-6 col-md-6 ">
                    <div class="info-box">
                        <span style="background-color: chocolate" class="info-box-icon bg- elevation-1"><i
                                class="fas  fa fa-users"></i></span>

                        <div class="info-box-content"style="color: chocolate">
                            <span class="info-box-text">Pemerintah</span>
                            <span class="info-box-number">
                                <h4>{{ $pemerintah->count() }}</h4>
                                <a style="color: chocolate" href="{{ url('pemerintah') }}" class="small-box-footer">More
                                    info <i class="fas fa-arrow-circle-right"></i></a>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-12 col-sm-6 ">
                    <div class="info-box">
                        <span style="background-color: chocolate" class="info-box-icon bg- elevation-1"><i
                                class="fas  fa-university"></i></span>

                        <div class="info-box-content"style="color: chocolate">
                            <span class="info-box-text">kelurahan</span>
                            <span class="info-box-number">
                                <h4>{{ $kelurahan->count() }}</h4>
                                <a style="color: chocolate" href="{{ url('kelurahan') }}" class="small-box-footer">More
                                    info <i class="fas fa-arrow-circle-right"></i></a>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
