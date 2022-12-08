<!DOCTYPE html>
<html lang="en">

<head>

    @include('user.template.css')

</head>

<body>
    {{-- <div class="container-xxl p-0"> --}}
    <!-- Spinner Start -->
    {{-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> --}}
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
        @include('user.template.header')

        <div class="container-xxl bg-primary page-header" style="background-color: #964B00"
            style="border-bottom-right-radius: 80px; border-bottom-left-radius: 80px;"><br>
            <div class="container text-center">
                <h1 style="font-size: 30px" style="font-family: sans-serif" class="text-white animated zoomIn mb-3">
                    Inovasi Pendidikan Kecamatan Delta Pawan Kabupaten Ketapang
                </h1><br>
                {{-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                    </ol> --}}

                <form action="{{ url('Pendidikan') }}" method="post">
                    @csrf
                    <div style="height: 100px" class="position-relative w-50 mt-">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                            placeholder="Cari pendidikan" style="height: 25px;" name="judul" id="q"
                            value="{{ $judul ?? '' }}"><br>
                        <button style="padding: 10px" class="label label-default"
                            class="btn btn-dark float-right mt-1"><i class="fa fa-search"></i>
                            Filter</button>
                    </div>
                </form>
                </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- <div class="container-xxl bg-primary page-header">
            <div class="container text-center">
                <h1 class="text-white animated zoomIn mb-3">Berita P4MP</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Serba Serbi P4MP</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Berita P4MP</li>
                    </ol>
                    <ol style="margin-top: 20px">
                        <form action="{{ url('Berita') }}" method="post">
                            @csrf
                            <div class="position-relative w-100 mt-3">
                                <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                                    placeholder="Cari Berita" style="height: 48px;" name="judul" id="q"
                                    value="{{ $judul ?? '' }}">
                                <button type="submit"
                                    class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                        class="fa fa-paper-plane text-primary fs-4"></i></button>
                            </div>
                        </form>
                    </ol>
                </nav>
            </div>
        </div>
    </div> --}}
    <!-- Navbar & Hero End -->


    <!-- Features Start -->
    {{-- <div class="container py-2"> --}}
    <div class="container">
        <div class="row g-5">
            @foreach ($list_pendidikan as $pendidikan)
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <strong>
                        <article>
                            <div class="card" style="background-size: 10%;" style="width: 25rem;">
                                <br> <img src="{{ "/public/$pendidikan->foto" }}" class="card-img-top" alt="...">
                                <strong>
                                    <div class="card-body" style="background-color: rgb(245, 241, 241)"><br>
                                        <div class="text-overflow">
                                            <h3>
                                                {{ $pendidikan->judul }}
                                            </h3><br>
                                            {{-- <p class="card-text" style="color: black">{{ $pendidikan->isi }}</p><br> --}}

                                            <p style="margin-left: 5%" style="text-align: right" class="btn btn-danger">
                                                {{ $pendidikan->created_at->isoFormat('dddd, D MMMM Y') }}</p>

                                            <a style="margin-left: 2%" href="{{ url('pendidikan', $pendidikan->id) }}"
                                                style="background-position: right" class="btn btn-primary">Read
                                                More</a>

                                        </div><br>
                                    </div>
                                </strong>
                    </strong>



                    {{-- <div class="card shadow border-0">
                                <a href="{{ url('pendidikan', $pendidikan->id) }}">
                                    <div class="carousel-item active">
                                        <img style="width: 100%;" src="{{ "/public/$pendidikan->foto" }}">
                                        <div class="carousel-caption d-none d-md-block"
                                            style="margin-bottom: -20px; height: 50px;">
                                            <p style="opacity: 100%">{{ $pendidikan->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <p class="card-text">{{ $pendidikan->judul }}</p>
                                </div>
                            </div> --}}
                </div>
        </div>
        @endforeach
        {{-- {!! $list_pendidikan->links() !!} --}}
    </div>
    </div>
    <br><br>


    <!-- Features End -->


    <!-- Footer Start -->
    @include('user.template.footer')
    <!-- Footer End -->


    <!-- Back to Top -->


    <!-- JavaScript Libraries -->
    @include('user.template.js')
</body>

</html>
