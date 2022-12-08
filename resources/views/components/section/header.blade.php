<nav style="background-color: chocolate" class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- SEARCH FORM -->
    {{-- <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form> --}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item
            nav-date dropdown">
                <a class="nav-link d-flex justify-content-center align-items-center" href="javascript:;">
                    <h6 class="date mb-0">
                        <?php
                        $hari = ['Sun', 'Mon', 'Tues', 'Wed', 'Thur', 'Fri', 'Sat'];
                        $bulan = [1 => 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                        $tgl = date('d');
                        $bln = date('n');
                        $hr = date('w');
                        $thn = date('Y');
                        echo 'Today : ';
                        echo "<b>$hari[$hr], $tgl $bulan[$bln] $thn</b>";
                        ?>
                    </h6>
                    <i class="typcn typcn-calendar"></i>
                </a>
            </li>
        </ul>
        {{-- <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a> --}}
        <li class="nav-item dropdown">
            <a class="nav-link" class="brand-text font-weight-primary" style="color: white" data-toggle="dropdown"
                href="#">
                @if (Auth::check())
                    {{ request()->user()->nama }}
                @else
                    Silahkan Masuk
                @endif

            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <img src="{{ url('public/template') }}/dist/img/user1-128x128.jpg" alt="User Avatar"
                    style="height: 100%;" class="img-circle">
            </a>
        </li>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
                <i class="fa fa-user"></i>profile
            </a>
            <a href="#" class="dropdown-item">
                <i class="fa fa-cog"></i>Setting
            </a>
            <!-- Message End -->
            </a>
            <a href="{{ url('login') }}" class="dropdown-item">
                <i class="fas fa-sign-out"></i>Logout
            </a>
        </div>
        </li>
        </li>
    </ul>
</nav>
