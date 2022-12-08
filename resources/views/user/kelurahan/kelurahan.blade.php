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
                <h1 class="text-white animated zoomIn mb-3">Data Kelurahan Kecamatan Delta Pawan</h1><br>
                <nav aria-label="breadcrumb">
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
                    <center>
                        <p style="color: black" style="text-align: center" style="font-size: 16px">
                            <strong>Daftar Data Kelurahan Kecamatan Delta Pawan</strong>
                        </p><br>
                    </center>

                    <hr>

                    <table class="table table-bordered">
                        <strong>
                            <tbody>
                                <strong>

                                    <td><strong>
                                            <center>No </center>
                                        </strong></td>

                                    <td><strong>
                                            <center>Kelurahan</center>
                                        </strong></td>


                                    <td><strong>
                                            <center> Desa</center>
                                        </strong></td>

                                    <td><strong>
                                            <center> Kepala Desa</center>
                                        </strong></td>

                                    {{-- <td><strong>
                                            <center>Jumlah RT
                                        </strong></center>
                                    </td>

                                    <td><strong>
                                            <center>Jumlah Dusun
                                            </center>
                                        </strong></td>

                                    <td><strong>
                                            <center>Jumlah RW
                                            </center>
                                        </strong></td> --}}



                                    <td><strong>
                                            <center>Alamat
                                        </strong></center>
                                    </td>
                                </strong>


                            </tbody>
                        </strong>


                        <tbody>
                            @foreach ($list_kelurahan as $kelurahan)
                                <tr>

                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kelurahan->nama_kelurahan }}</td>
                                    <td>{{ $kelurahan->nama_desa }}</td>
                                    <td>{{ $kelurahan->kepala_desa }}</td>
                                    {{-- <td>{{ $kelurahan->jumlah_rt }}</td>
                                    <td>{{ $kelurahan->jumlah_dusun }}</td>
                                    <td>{{ $kelurahan->jumlah_rw }}</td> --}}
                                    <td>{{ $kelurahan->alamat }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </strong>
                    <hr>
                    @foreach ($list_kelurahan as $kelurahan)
                        <p>{{ $kelurahan->isi }}</p><br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

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
