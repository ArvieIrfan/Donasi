<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('admin') }}/images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="has-sub">
                    <a class="js-arrow" href="{{url('admin/dashboard')}}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="{{ route('jenis_bencana.index') }}">
                        <i class="far fa-copy"></i>Jenis Bencana</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="{{url('admin/informasi')}}">
                        <i class="fas fa-info"></i>Informasi Bencana</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="{{ route('relawan.index') }}">
                    <i class="fa fa-male"></i>Relawan</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fa fa-credit-card"></i>Donasi & Donatur <span class="arrow">&#9660;</span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('admin.donasi.index') }}">Donasi</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.donatur.index') }}">Donatur</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="{{url('admin/laporan')}}">
                        <i class="fas fa-desktop"></i>Laporan</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
