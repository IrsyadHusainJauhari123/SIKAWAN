<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        .p {
            font-family: sans-serif;
            font-size: 20px;
        }
    </style>
    @include('user.template.css')
</head>

<body>
    <div class="container-xxl position-relative p-0">
        @include('user.template.header')

        <div class="container-xxl bg-primary page-header" style="background-color: #964B00"
            style="border-bottom-right-radius: 80px; border-bottom-left-radius: 80px;"><br>
            <div class="container text-center">
                <h1 class="text-white animated zoomIn mb-3">Sejarah</h1><br>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- <div class="col-sm-5-xs">
                    <div class="col-ms-5 hidden-xs">
                        <div class="breadcrumb" class="breadcrumb-clearfix">
                            <a href="" title="SELAMAT DATANG DIWEBSITE KECAMATAN DELTA PAWAN"> Profile</a>
                            <span> VISI DAN MISI</span>
                        </div>
                    </div>
                </div>
            </div> --}}
    </header>



    <div class="container-xxl py-2">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 wow zoomIn" data-wow-delay="0.1s">
                    @foreach ($sejarah as $sejarah)
                        {{-- <h2 class="mb-4" style="text-align: center">Sejarah Kecamatan Delta Pawan</h2> --}}
                        <strong>
                            <div class=" card-title">
                                <strong>
                                    <h2 style="font-family: sans-serif" style="font-size: 35px" class="mb-4"
                                        style="text-align: left">
                                        <br>{{ $sejarah->nama }}
                                    </h2>

                                </strong>
                            </div>
                        </strong>
                        <br>
                        <img class="img-fluid w-100 mb-4" src="{{ "/public/$sejarah->foto" }}" alt="">
                        <hr>


                        <p>
                            <style>
                                p {
                                    font-family: sans-serif;
                                    font-size: 20px;
                                    color: black;
                                    text-align: justify;
                            </style>
                            <br>
                            {!! nl2br($sejarah->deskripsi) !!}
                            <hr>
                        </p>
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
