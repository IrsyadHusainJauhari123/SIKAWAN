<!DOCTYPE html>

<html lang="en">

<head>
    <style>
        .hr {
            background-color: green;
        }
    </style>
    @include('user.template.css')
</head>

<body>
    {{-- <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
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
                <h1 class="text-white animated zoomIn mb-3">Menu Layanan</h1><br>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    </div><br>
    <div class="col-lg-7">
        <div class="row g-5">
            <div class="col-sm-12 wow fadeIn" data-wow-delay="0.1s">
                <div class="container">
                    <style>
                        h2 {
                            margin: 20x;
                            padding-left: 15%;
                        }
                    </style>

                    <h2>Dokumen Pendukung | <strong>Pembuatan KTP</strong></h2>
                    <hr>
                </div>
            </div>
        </div>
    </div>


    <div class="divider divider-green divider-small mb-xl">

    </div>
    <div style="margin-left: 10%" class="container">
        <div style="background-color: #b06010" class="btn  btn-featured-boxes-style-8">
            <div class="row">
                <div style="background-size: 800px;" class="col-md-12">
                    <div style="background-size: 250%" class="featured-box featured-box-primary featured-box-text-left">
                        <div style="padding: 30px" class="box-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <style>
                                        i {
                                            color: black;
                                            margin: 10px;

                                        }

                                        h1 {
                                            /* text-align: justify; */
                                            font-family: sans-serif;
                                            font-size: 30px;
                                        }
                                    </style>
                                    <i style="size: 100px" class=" fa fa-book pull-left mr-lg-1"></i>
                                    <h1 style="text-align: justify"> File Membuat Kartu Tanda Penduduk Kecamatan Delta
                                        Pawan
                                    </h1>

                                </div>
                            </div>
                        </div>

                        {{-- <div class="row">
                                            <div class="col-md-12"> --}}
                        @foreach ($ktp as $ktp)
                            <div style="padding-left: 15%" class="row">
                                <div style="right: 13%" class="col-md-12"><br>
                                    <a href="{{ "/public/$ktp->file" }}" download
                                        class="btn btn-lg btn-primary mr-xs mb-lg">DOWLOAD</a>
                                    <a href="{{ "/public/$ktp->file" }}"
                                        class="btn btn-lg btn-warning mr-xs mb-lg">INFO</a>
                                </div>

                            </div><br>
                        @endforeach
                    </div>
                    <div class="container-xxl py-2">
                        <div class="container">
                            <div class="col-lg-7">
                                {{-- <div class="row g-5">
                                    <div class="col-sm-12 wow fadeIn" data-wow-delay="0.1s">
                                        <h3 class="mb-2">{{ $ktp->judul }}</h3>
                                        <p>{{ $ktp->deskripsi }}</p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <hr><br>
    <p style="text-align: center">
        <span style="font-size: 30pt">
            <strong>Diagram Alur</strong>
        </span>

    </p><br>
    <center> <img style="width: 10%" src="{{ url('public/haha') }}/panah.png" alt="logo"><br></center>
    <p><br>
        {{-- <center> <img style="width: 75%; height:auto;" src="{{ "/public/$ktp->foto" }}"></center> --}}
    </p><br><br><br><br><br><br><br><br>
    {{-- <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-item active">
            <img style="padding-inline: 20%" src="{{ "/public/$ktp->foto" }}" alt="Card image">
        </div>
    </div>
    </div> --}}

    {{-- </div>
    </div>
    </div>
    </div> --}}
    @include('user.template.footer')
    {{-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div> --}}
    @include('user.template.js')
</body>
<html>
