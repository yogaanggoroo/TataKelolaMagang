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

    </-- ISI -->
    <div class="hero-image">
        <div class="container">
            <div class="row justify-content-between">
                <div
                    class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start pt-3">
                    <div class="hero-text pt-lg-5">
                        <h1 class="txt-header">PROGRAM MAGANG PT PLN (PERSERO)</h1>
                        <p class="txt-hero pt-2">Suatu program belajar secara
                            langsung pada PT PLN (Persero) sekaligus berlatih bekerja secara langsung selama beberapa
                            waktu</p>
                        <div class="d-flex pt-2">
                            <a href="{{ route('magang') }}" :active="request()->routeIs('magang')"
                                class="btn-registration">{{ __('Daftar Magang') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100 text-light">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card"
                        style="border-radius: 25px; background-color: #0E4770;">
                        <div class="card-body p-md-5">

                            <h2 class="txt-content mb-4 pb-2 pb-md-0 mb-md-5 text-center">
                                Kenapa harus mengikuti Program <br> Magang
                                PT PLN (Persero)</h2>
                            <div class="list-magang pt-1 text-center">
                                <p>1. Belajar dan memperluas jaringan di PT PLN (Persero) <br>
                                    2. Menambah wawasan dalam dunia pekerjaan <br>
                                    3. Mentor - mentor yang baik dan berpengalaman <br>
                                    4. Mendapatkan sertifikat
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>

        <div class="copyright p-3 text-white">
            PT PLN (Persero) Kantor Pusat Jalan Trunojoyo Blok M-I No.135 Kebayoran Baru, Jakarta 12160, Indonesia
        </div>

    </footer>
</x-app-layout>
