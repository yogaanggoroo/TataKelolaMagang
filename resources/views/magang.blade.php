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
        <div class="container-sm card text-center">
            <h4 class="card-header text-center">PROGRAM MAGANG PT PLN (PERSERO)</h4>
            <div class="card-body">
                <p class="card-text">PT PLN (Persero) membuka kesempatan kepada seluruh Warga Negara Indonesia yang
                    berstatus mahasiswa tingkat akhir atau lulusan baru Perguruan Tinggi Negeri maupun Swasta serta
                    memiliki integritas
                    dan juga komitmen yang tinggi untuk mengikuti program magang.</p> <br>

                <div class="text-center pt-sm-2">
                    <h4 class="txt-magang">PROSES SELEKSI MAGANG</h4>
                    <img src="/img/alur-seleksi-magang.png" alt="alur seleksi magang" class="mx-auto d-block"
                        width="550" height="550">
                </div>


                <div class="d-grid pt-3">
                    <a href="{{ route('daftar') }}" :active="request()->routeIs('daftar')"
                        class="btn btn-magang">{{ __('Apply') }}</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('template.footer')
</x-app-layout>
