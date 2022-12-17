<!DOCTYPE html>
<html lang="en">

<head>
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
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            @include('user.template.header')

            <div class="container-xxl bg-primary page-header">
                <div class="container text-center">
                    <h1 class="text-white animated zoomIn mb-3">{{ $pariwisata->judul }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ url('pariwisata') }}">pariwisata</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">{{ $pariwisata->judul }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div> --}}
    <div class="container-xxl position-relative p-0">
        @include('user.template.header')

        <div class="container-xxl bg-primary page-header" style="background-color: #964B00"
            style="border-bottom-right-radius: 80px; border-bottom-left-radius: 80px;"><br>
            <div class="container text-center">
                <h1 style="font-size: 30px" style="font-family: sans-serif" class="text-white animated zoomIn mb-3">
                    Pariwisata Detail</h1><br>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                    </ol>
                </nav>
            </div>
        </div>
    </div><br>
    <!-- Navbar & Hero End -->


    <!-- Features Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <section class="rev_slider_wrapper">
                        <div id="slider1" class="rev_slider" data-version="5.0">
                            <ul>
                                <li data-transition="slidingoverlayleft">
                                    <img class="rsimg rsMainSlideImage" src="{{ "/public/$pariwisata->foto" }}"
                                        class="d-block w-100" alt="...">
                                    <div class="slide-content-box">
                                    </div>
                                </li>


                                <li data-transition="slidingoverlayleft">

                                    <img src="{{ "/public/$pariwisata->foto1" }}" class="d-block w-100" alt="...">
                                <li data-transition="slidingoverlayleft">

                                    <img src="{{ "/public/$pariwisata->foto1" }}" class="d-block w-100" alt="...">
                        </div>
                    </section>
                </div>

                <div class="col-sm-6">
                    <div class="row g-5">
                        <div class="col-sm-12 wow fadeIn" data-wow-delay="0.1s">
                            <h2 style="font-family: sans-serif" style="margin: 10px" style="font-size: 30px"
                                class="mb-2">
                                {{ $pariwisata->judul }}</h2>
                            <br>
                            <hr>
                            <div style="margin: 14px" class="mb10 labels" dir="ltr">
                                <span style="background-color: blue" class="label label-default">
                                    <i style="margin: 5px" class="fa fa-thumb-tack">{{ $pariwisata->tanggal }}
                                    </i>
                                </span>
                                <span style="margin: 5px" style class="label label-default" style="">
                                    <i style="margin: 2.4px" class="fa fa-user">{{ $pariwisata->nama_pembuat }}
                                    </i>
                                </span><br>
                            </div>
                            <p style="font-family: 'Times New Roman', Times, serif" style="color: black"
                                style="margin: 10px" style="font-size: 10px" style="margin: 10px">
                                {{ $pariwisata->isi }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body><br>
<!-- Features End -->


<!-- Footer Start -->
@include('user.template.footer')
<!-- Footer End -->


<!-- Back to Top -->
{{-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div> --}}

<!-- JavaScript Libraries -->
@include('user.template.js')
</body>

</html>
