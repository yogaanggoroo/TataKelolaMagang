<x-app-layout>
    <x-slot name="header">

        <nav>
            <div class="" id="navbarDown">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')"
                            style="color: #5F5F5F;">{{ __('Beranda') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('magang') }}" :active="request()->routeIs('magang')"
                            style="color: #5F5F5F;">{{ __('Magang') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('presensi') }}" :active="request()->routeIs('presensi')"
                            style="color: #5F5F5F;">{{ __('Presensi') }}</a>
                    </li <li class="nav-item">
                    <a class="nav-link" href="{{ route('laporan') }}" :active="request()->routeIs('laporan')"
                        style="color: #5F5F5F;">{{ __('Laporan') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tugas') }}" :active="request()->routeIs('tugas')"
                            style="color: #5F5F5F;">{{ __('Tugas') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sertifikat') }}" :active="request()->routeIs('sertifikat')"
                            style="color: #5F5F5F;">{{ __('Sertifikat') }}</a>
                    </li>
                </ul>
            </div>
        </nav>

    </x-slot>

    <!-- ISI -->
    <div class="pt-sm-4">
        <div class="container-sm card">
            <div class="container hero-text pt-lg-3">
                <img src="/img/welcome.svg" class="float-end" alt="welcome">
                <h1>Selamat Datang Peserta!</h1>
                <p>Monitoring kegiatan magang menjadi lebih terstruktur</p>
            </div>
        </div>
    </div>

    <div class="pt-sm-4">
        <div class="container-sm card">
            <div class="container pt-lg-3">
                <div class="pt-sm-2">
                    <div class="card-header" style="background-color: #0E4770;">
                        <div class="pt-lg-1 text-center">
                            <h2>Presensi Peserta Magang PT PLN (Persero)</h2>
                        </div>
                    </div>

                    <div class="presence-image">
                        <img src="/img/presensi-magang.png" class="rounded mx-auto d-block" alt="Presence image" width="300" height="300">
                    </div>

                    <div class="text-center">
                        <!-- Submit button -->
                        <button type="submit" class="btn-checkin btn" style="background-color: #28a745; color: white;"
                            >Check-In</button>

                        <button type="submit" class="btn-checkout btn" style="background-color: #dc3545; color: white;"
                            >Check-Out</button>
                    </div>

                    <div class="d-grid mt-1 pt-1">
                        <!-- Submit button -->
                        <button type="submit" class="btn-history btn btn-block mb-3"
                            style="background-color: #0E4770; color: white;">History</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-4">
        <footer>

            <div class="copyright p-3 text-white">
                PLN (Persero) Kantor Pusat Jalan Trunojoyo Blok M-I No.135 Kebayoran Baru, Jakarta 12160, Indonesia
            </div>

        </footer>
    </div>
</x-app-layout>
