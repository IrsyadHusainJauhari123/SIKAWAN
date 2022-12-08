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
        </div> --}}
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
        @include('user.template.header')

        <div class="container-xxl bg-primary page-header" style="background-color: #964B00"
            style="border-bottom-right-radius: 80px; border-bottom-left-radius: 80px;"><br>
            <div class="container text-center">
                <h1 class="text-white animated zoomIn mb-3">Wakil Camat</h1>
                <nav aria-label="breadcrumb"><br>
                    <ol class="breadcrumb justify-content-center">
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <div class="container-xxl py-2">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 wow zoomIn" data-wow-delay="0.1s">
                    @foreach ($wakilcamat as $wakilcamat)
                        {{-- <h2 class="mb-4" style="text-align: center">wakilcamat Ketapang</h2><br> --}}
                        <center>
                            <img class="img-fluid w-100 mb-4" style="image-resolution: full-right"
                                src="{{ "/public/$wakilcamat->foto" }}" alt="">
                        </center><br>

                        <ol class="breadcrumb justify-content-center">
                        </ol>

                        <table style="width: 509px; height 184px;" border="0">
                            <tbody>
                                <tr>
                                    <td style="font-size: 20px;" style="font-family: Arial, Helvetica, sans-serif;"
                                        style="padding: 1%;"><strong
                                            style="color: rgb(105, 98, 98)">Biodata</strong><br>
                                    </td><br>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                <tr><br>

                                <tr>
                                    <td style="font-size: 20px;" style="font-family: Arial, Helvetica, sans-serif;"
                                        style="padding: 1%;">Nama</td><br>
                                    <td>:</td>
                                    <td style="font-size: 20px;" style="font-family: Arial, Helvetica, sans-serif;"
                                        style="padding: 1%;" style="color: rgb(105, 98, 98)">
                                        {{ $wakilcamat->nama }}</td>
                                </tr><br>

                                </tr>
                                <td style="font-size: 20px;" style="font-family: Arial, Helvetica, sans-serif;"
                                    style="padding: 1%;" style="color: rgb(105, 98, 98)">Periode</td>
                                <td>:</td>

                                <td style="font-size: 20px;" style="font-family: Arial, Helvetica, sans-serif;"
                                    style="padding: 1%;" style="color: rgb(105, 98, 98)">{{ $wakilcamat->periode }}</td>
                                <tr><br>

                                </tr>
                                <td style="font-size: 20px;" style="font-family: Arial, Helvetica, sans-serif;"
                                    style="padding: 1%;" style="color: rgb(105, 98, 98)">PendidikanTerakhir</td>
                                <td>:</td>

                                <td style="font-size: 20px;" style="font-family: Arial, Helvetica, sans-serif;"
                                    style="padding: 2%;" style="color: rgb(105, 98, 98)">
                                    {{ $wakilcamat->pendidikan_terakhir }}</td>

                                </tr><br>


                                <tr>
                                    <td style="font-size: 20px;" style="font-family: Arial, Helvetica, sans-serif;"
                                        style="padding: 1%;" style="color: rgb(105, 98, 98)">Tanggal Lahir</td>
                                    <td>:</td>
                                    <td style="font-size: 20px;" style="font-family: Arial, Helvetica, sans-serif;"
                                        style="padding: 1%;" style="color: rgb(105, 98, 98)">
                                        {{ $wakilcamat->tanggal_lahir }}</td>
                                <tr><br>

                                <tr>
                                    <td style="font-size: 20px;" style="font-family: Arial, Helvetica, sans-serif;"
                                        style="padding: 1%;" style="color: #666666 )">Tempat Lahir</td>

                                    <td>: </td>

                                    <td style="font-size: 20px;" style="font-family: Arial, Helvetica, sans-serif;"
                                        style="padding: 1%;" style="color: rgb(105, 98, 98)">
                                        {{ $wakilcamat->tempat_lahir }}</td>
                                <tr><br>

                                <tr>
                                    <td style="font-size: 20px;" style="font-family: Arial, Helvetica, sans-serif;"
                                        style="padding: 1%;" style="color: #666666 )">Alamat</td>
                                    <td>:</td>
                                    <td style="font-size: 20px;" style="font-family: Arial, Helvetica, sans-serif;"
                                        style="padding: 1%;" style="color: rgb(105, 98, 98)">
                                        {{ $wakilcamat->alamat }}</td>
                                <tr><br>


                            </tbody>
                        </table>
                        <div id="__zsc_">&nbsp;</div>

                        {{-- <div class="divider divider-dotted">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center" style="background-color: grey">
                                </ol>
                            </nav><br> --}}
                        {{-- <img class="" style="margin: 40px;" style="height: 10px" style="border: 0;"
                                src="{{ url('public') }}/titik.png">
                        </div> --}}
                        {{-- <tr>
                            <td class="mb-4" style="color: black" style="text-align: left">Biodata</td>
                        <tr><br> <strong <p class="mb-4" style="color: black"
                                style="text-align: justify;">{!! nl2br($wakilcamat->deskripsi) !!}
                                </p>
                            </strong><br> --}}
                    @endforeach
                </div>
            </div>
        </div>
    </div><br>




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
