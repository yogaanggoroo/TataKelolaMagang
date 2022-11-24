<x-app-layout>
    <x-slot name="header">
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-light">
            <div class="container-fluid">
                <div class="navbar-collapse justify-content-center" id="navbarDown">
                    <ul class="nav justify-content-center">
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
    </x-slot>

    </-- ISI -->
    <div class="hero-image">
        <div class="container">
            <div class="row justify-content-between">
                <div class="d-flex flex-column text-lg-start pt-3">
                    <div class="hero-text pt-lg-5">
                        <h1 class="txt-header col-lg-5">PROGRAM MAGANG PT PLN (PERSERO)</h1>
                        <p class="txt-hero col-lg-6 pt-2">Suatu program belajar secara
                            langsung pada PT PLN (Persero) sekaligus berlatih bekerja secara langsung selama beberapa
                            waktu bisa memahami sistem kerja dunia profesional yang sebenarnya.</p>
                        <div class="d-flex pt-3">
                            <a href="{{ route('magang') }}" :active="request()->routeIs('magang')"
                                class="btn-registration">{{ __('Daftar Magang') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>

        <div class="copyright p-3 text-white">
            PT PLN (Persero) Kantor Pusat Jalan Trunojoyo Blok M-I No.135 Kebayoran Baru, Jakarta 12160, Indonesia
        </div>

    </footer>
</x-app-layout>
