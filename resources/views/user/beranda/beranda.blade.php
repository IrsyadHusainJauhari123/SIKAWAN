<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        h2 {
            font-family: sans-serif;
        }
    </style>
    @include('user.template.css')

</head>

<body>
    <div class="container-xxl position-relative p-0">
        @include('user.template.header')

        <section class="rev_slider_wrapper">
            @foreach ($list_beranda as $beranda)
                <div style="background-size: 50PX" id="slider1" class="rev_slider" data-version="5.0">
                    <ul>
                        <li data-transition="slidingoverlayleft">
                            <img class="rsimg rsMainSlideImage" src="{{ "/public/$beranda->foto" }}" class="d-block w-100"
                                alt="...">
                            <div class="slide-content-box">
                            </div>
                        </li>

                        <li data-transition="slidingoverlayleft">
                            <img src="{{ "/public/$beranda->foto1" }}" class="d-block w-100" alt="...">
                        </li>

                        <li data-transition="slidingoverlayleft">
                            <img src="{{ "/public/$beranda->foto2" }}" class="d-block w-100" alt="...">
                        </li>

                </div>
            @endforeach

        </section><br>

        <section id="content" class="pb30">
            <div class="container">
                <div class="row">
                    <div class="text-center mb20">

                        <h1 style="font-size: 250%" itemprop="name">SELAMAT DATANG DIWEBSITE KECAMATAN DELTA PAWAN
                            KABUPATEN KETAPANG</h1>
                        <hr>
                        <h2 style="color: rgb(251, 123, 32)">Jl. Letjend S. Parman No.78811, Sampit, Kec. Delta Pawan,
                            Kabupaten Ketapang, Kalimantan
                            Barat 78811</h2>
                    </div>
                    <div class="col-md-4">
                        <article class="iconBloghome">
                            <i style="margin-left: -5%" class="fa fa-check"></i>
                            <table style="background-color: #f0b172" border="0" bordercolor="#ccc" cellpadding="0"
                                cellspacing="0" height="500" style="background-color: beige,border-style:hidden;"
                                width="1200">
                                <tbody>
                                    <tr>
                                        <th halign="center" valign="top" widthpx">
                                            <iframe width="500" height="500" src="{{ $beranda->youtub }}"
                                                &autoplay="1" frameborder="0"
                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>

                                            </iframe>
                                        </th>
                                        <th>&nbsp;</th>
                                        <th valign="top">
                                            <h3 align="center"><br>
                                                <strong>Sambutan Camat Ketapang</strong>
                                                <hr>
                                                <p style="padding-right: 20%">{{ $beranda->isi }}</p>
                                                <hr>

                                    </tr>
                                </tbody>
                            </table>
                        </article>
                        <br>
                        <hr>

                        <i style="margin-left: -5%" class="fa fa-check"></i>
                        <div class="container">
                            <h2 class="btn btn-primary" class="mb-4 wow fadeIn" data-wow-delay="0.1s">berita Terbaru
                                Kecamatan Delta Pawan
                            </h2>
                        </div>
                        <div class="container">
                            <div class="row g-5">

                                @foreach ($list_berita as $berita)
                                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                                        <strong>
                                            <article>
                                                <div class="card" style="background-size: 10%;" style="width: 25rem;">
                                                    <br> <img src="{{ "/public/$berita->foto" }}" class="card-img-top"
                                                        alt="...">
                                                    <strong>
                                                        <div class="card-body"
                                                            style="background-color: rgb(245, 241, 241)">
                                                            <br>
                                                            <div class="text-overflow">
                                                                <h3 style="padding: 10px"
                                                                    style="font-family: sans-serif"
                                                                    style="padding: 10px" style="font-size: 15px"
                                                                    style="margin: 10px" class="card-title">
                                                                    {{ $berita->judul }}</h3><br>
                                                                {{-- <p class="card-text" style="color: black">{{ $berita->isi }}</p><br> --}}

                                                                <p style="text-align: right" class="btn btn-danger">
                                                                    {{ $berita->created_at->isoFormat('dddd, D MMMM Y') }}
                                                                </p>

                                                                <a href="{{ url('berita', $berita->id) }}"
                                                                    style="background-position: right"
                                                                    class="btn btn-primary">Read
                                                                    More</a>

                                                            </div>
                                                        </div>
                                                    </strong>
                                                </div>
                                            </article>
                                        </strong>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><br>
        <!-- Footer Start -->
        @include('user.template.footer')
        <!-- Footer End -->


        <!-- Back to Top -->


        <!-- JavaScript Libraries -->
        @include('user.template.js')
</body>

</html>
