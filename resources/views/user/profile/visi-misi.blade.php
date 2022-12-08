<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        p {
            text-align: justify;
            font-size: 100px;
            font-family: sans-serif;
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

    <div class="container-xxl position-relative p-0">
        @include('user.template.header')

        <div class="container-xxl bg-primary page-header" style="background-color: #964B00"
            style="border-bottom-right-radius: 80px; border-bottom-left-radius: 80px;"><br>
            <div class="container text-center">
                <h1 class="text-white animated zoomIn mb-3">Visi-Misi</h1><br>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    {{-- <div class="container-xxl position-relative p-0">

            <div class="container-xxl bg-primary page-header"
                style="border-bottom-right-radius: 80px; border-bottom-left-radius: 80px;">
                <div class="container text-center">
                    <h1 class="text-white animated zoomIn mb-3">Visi dan Misi P4MP</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Profile</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Visi - Misi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div> --}}



    <div class="container-xxl py-2">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                    @foreach ($visi as $visi)
                        <h2 style="font-family: sans-serif" class="mb-4">Visi</h2>
                        <img class="img-fluid w-100 mb-4" src="{{ "/public/$visi->foto" }}" alt="">
                        <p>
                            {!! nl2br($visi->deskripsi) !!}
                        </p>
                    @endforeach
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    @foreach ($misi as $misi)
                        <h2 style="font-family: sans-serif" class="mb-4">Misi</h2>
                        <img class="img-fluid w-100 mb-4" src="{{ "/public/$visi->foto" }}" alt="">
                        <p style="text-align: justify;" style="font-family: sans-serif" style="color: black"
                            style="text-align: justify;" style="font-size: 20px;">
                            {!! nl2br($misi->deskripsi) !!}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div><br>

    @include('user.template.footer')
    {{-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div> --}}
    @include('user.template.js')
</body>

</html>
