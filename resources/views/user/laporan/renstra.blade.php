\
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
                <h1 class="text-white animated zoomIn mb-3">Rencana Kerja Tahunan</h1><br>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    @foreach ($renstra as $renstra)
        <div id="content" class="pt30 pb20">
            <div class="container" itemprop="text">

                <div class="alert alert-success" style="display:none;"></div>
                <div class="alert alert-danger" style="display:none;"></div>

                <div class="row">
                    {{-- <div class="col-sm-6">
                        <div class="row g-5">
                            <div class="col-sm-12 wow fadeIn" data-wow-delay="0.1s">
                                <h2 style="margin-left: 150%" style="font-family: sans-serif" style="font-size: 30px"
                                    class="mb-2">
                                    {{ $renstra->judul }}</h2>
                            </div>

                            <br><br>

                        </div>
                    </div> --}}

                    <section class="col-sm-12">
                        <div style="margin-left: 60%" class="col-sm-12 wow fadeIn" data-wow-delay="0.1s">
                            <h2 style="font-family: sans-serif" style="font-size: 30px" class="mb-2">
                                {{ $renstra->judul }}</h2>
                            <hr>

                        </div><br>


                        <p style="margin-left: 60%" style="font-family: 'Times New Roman', Times, serif"
                            style="color: black" style="margin: 10px" style="font-size: 10px" style="margin: 10px">
                            {{ $renstra->deskripsi }}


                        </p>
                        <section class="col-sm-12">
                            <p><iframe style="margin-top: -10%" allow="autoplay" height="480"
                                    src="{{ "/public/$renstra->file" }}" width="640"></iframe></p>
                        </section>
                        <hr>
                    </section>

                </div>
            </div>
        </div>
    @endforeach
    <br>
    <br>
    </div>





    @include('user.template.footer')
    {{-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div> --}}
    @include('user.template.js')
</body>

</html>
