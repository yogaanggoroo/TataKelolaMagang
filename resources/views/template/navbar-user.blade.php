<nav id="navbar" class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <div class="navbar-collapse justify-content-center" id="navbarDown">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('dashboard') }}"
                    :active="request()->routeIs('dashboard')" style="color: #5F5F5F;">{{ __('Beranda') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('magang') }}"
                    :active="request()->routeIs('magang')" style="color: #5F5F5F;">{{ __('Magang') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('presensi') }}"
                    :active="request()->routeIs('presensi')" style="color: #5F5F5F;">{{ __('Presensi') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('laporan') }}"
                    :active="request()->routeIs('laporan')" style="color: #5F5F5F;">{{ __('Laporan') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tugas') }}"
                    :active="request()->routeIs('tugas')" style="color: #5F5F5F;">{{ __('Tugas') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sertifikat') }}"
                    :active="request()->routeIs('sertifikat')" style="color: #5F5F5F;">{{ __('Sertifikat') }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
