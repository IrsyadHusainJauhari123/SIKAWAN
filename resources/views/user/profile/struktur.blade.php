<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.template.css')
</head>

<body>
    <div class="container-xxl position-relative p-0">
        @include('user.template.header')

        <div class="container-xxl bg-primary page-header" style="background-color: #964B00"
            style="border-bottom-right-radius: 80px; border-bottom-left-radius: 80px;"><br>
            <div class="container text-center">
                <h1 class="text-white animated zoomIn mb-3">Stuktur Anggota</h1><br>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                    </ol>
                </nav>
            </div>
        </div>
    </div>



    <div class="container-xxl py-2">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 wow zoomIn" data-wow-delay="0.1s">
                    @foreach ($galeri as $galeri)
                        <h2 class="mb-4" style="text-align: center">Struktur</h2><br>
                        <img class="img-fluid w-100 mb-4" src="{{ "/public/$galeri->foto" }}" alt="">
                        <strong>

                            <h1 style="font-size: 16px" class="mb-10" style="color: black"
                                style="text-align: justify;"><br>

                                {!! nl2br($galeri->deskripsi) !!}
                            </h1>
                        </strong>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('user.template.footer')
    {{-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div> --}}
    @include('user.template.js')
</body>

</html>
