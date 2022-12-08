@php

    function checkRouteActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp
<aside style="background-color: rgb(200, 104, 35)" class="main-sidebar sidebar-dark-warning elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('public/template') }}/index3.html" class="brand-link">
        <img src="{{ url('public') }}/aa.png" alt="Admin|SIKAWAN Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light"><strong style="color: white"> Admin | Kecamatan</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img style="width: 25px" src="{{ url('public') }}/aa.png" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><strong style="color: white">Admin|SIKAWAN</strong></a>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('dashboard') }}" class="nav-link {{ checkRouteActive('dashboard') }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('beranda') }}" class="nav-link {{ checkRouteActive('beranda') }}">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            Beranda Depan
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('profil') }}" class="nav-link {{ checkRouteActive('profil') }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Profil
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('kelurahan') }}" class="nav-link {{ checkRouteActive('kelurahan') }}">
                        <i class="nav-icon fas fa-university""></i>
                        <p>
                            Kelurahan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('layanan') }}" class="nav-link {{ checkRouteActive('layanan') }}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Layanan
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-bullhorn" aria-hidden="true"></i>
                        <p>
                            NEWS
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('berita') }}" class="nav-link {{ checkRouteActive('berita') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('kegiatan') }}"" class="nav-link {{ checkRouteActive('kegiatan') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kegiatan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ url('pemerintah') }}" class="nav-link {{ checkRouteActive('pemerintah') }}">
                        <i class="nav-icon fa fa-users" aria-hidden="true"></i>
                        <p>
                            Daftar Pemerintah
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-bars" aria-hidden="true"></i>
                        <p>
                            Inovasi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('pariwisata') }}" class="nav-link {{ checkRouteActive('pariwisata') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bidang Pariwisata</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('kebudayaan') }}"" class="nav-link {{ checkRouteActive('kebudayaan') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bidang Kebudayaan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('pendidikan') }}"" class="nav-link {{ checkRouteActive('pendidikan') }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bidang Pendidikan</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ url('datakecamatan') }}" class="nav-link {{ checkRouteActive('datakecamatan') }}">
                        <i class="nav-icon fa  fa-folder-open" aria-hidden="true"></i>
                        <p>
                            file Kerja Kecamatan
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('user') }}" class="nav-link {{ checkRouteActive('user') }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            User
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('setting') }}" class="nav-link {{ checkRouteActive('setting') }}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Setting
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('login') }}" class="nav-link {{ checkRouteActive('logout') }}">
                        <i class="nav-icon fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        <p>
                            LOG-OUT
                        </p>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- /.sidebar-menu -->
    </div>


    <!-- /.sidebar -->
</aside>
