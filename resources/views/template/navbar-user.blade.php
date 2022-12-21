<nav id="navbar" class="navbar navbar-expand-lg stroke">
    <div class="container">
        <div class="navbar-collapse justify-content-center" id="navbarDown">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link {{ set_active('dashboard') }}" href="{{ route('dashboard') }}"
                    :active="request()->routeIs('dashboard')" style="color: #5F5F5F;">{{ __('Beranda') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ set_active('program') }}" href="{{ route('program') }}"
                    :active="request()->routeIs('program')" style="color: #5F5F5F;">{{ __('Program') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ set_active('presensi') }}" href="{{ route('presensi') }}"
                    :active="request()->routeIs('presensi')" style="color: #5F5F5F;">{{ __('Presensi') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ set_active('laporan') }}" href="{{ route('laporan') }}"
                    :active="request()->routeIs('laporan')" style="color: #5F5F5F;">{{ __('Laporan') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ set_active('tugas') }}" href="{{ route('tugas') }}"
                    :active="request()->routeIs('tugas')" style="color: #5F5F5F;">{{ __('Tugas') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ set_active('dashboard') }}" href="{{ route('sertifikat') }}"
                    :active="request()->routeIs('sertifikat')" style="color: #5F5F5F;">{{ __('Sertifikat') }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
