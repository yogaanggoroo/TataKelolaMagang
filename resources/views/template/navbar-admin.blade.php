<nav id="navbar" class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <div class="navbar-collapse justify-content-center" id="navbarDown">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('admin-dashboard') }}"
                    :active="request()->routeIs('admin-dashboard')" style="color: #5F5F5F;">{{ __('Dashboard') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin-participant') }}"
                    :active="request()->routeIs('admin-participant')" style="color: #5F5F5F;">{{ __('Data Peserta') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin-presence') }}"
                    :active="request()->routeIs('admin-presence')" style="color: #5F5F5F;">{{ __('Absensi') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin-report') }}"
                    :active="request()->routeIs('admin-report')" style="color: #5F5F5F;">{{ __('Laporan') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin-project') }}"
                    :active="request()->routeIs('admin-project')" style="color: #5F5F5F;">{{ __('Project') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin-evaluation') }}"
                    :active="request()->routeIs('admin-evaluation')" style="color: #5F5F5F;">{{ __('Penilaian') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin-certificate') }}"
                    :active="request()->routeIs('admin-certificate')" style="color: #5F5F5F;">{{ __('Sertifikat') }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
