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
    <div class="vh-100 pt-sm-4">
        <div class="container-sm card">
            <div class="container pt-lg-3">
                <div class="pt-sm-3">
                    <div class="card-header" style="background-color: #0E4770;">
                        <div class="pt-lg-1">
                            <h2>SERTIFIKAT</h2>
                        </div>
                    </div>

                    <div class="container py-5 h-100">

                        <p>Selamat Anda Telah Lulus Program Magang Di PT PLN (Persero) <br> Silahkan Isi Nama Lengkap & Cetak Sertifikat
                            Dibawah Ini</p>

                        <!-- Submit button -->
                        <div class="pt-2">
                            <button type="submit" class="btn btn-block mb-3"
                                style="background-color: #0E4770; color: white;">Cetak PDF</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <footer>

            <div class="copyright p-3 text-white">
                PLN (Persero) Kantor Pusat Jalan Trunojoyo Blok M-I No.135 Kebayoran Baru, Jakarta 12160, Indonesia
            </div>

        </footer>
</x-app-layout>
