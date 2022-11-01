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
                            <h2>LAPORAN</h2>
                        </div>
                    </div>

                    <div class="container py-5 h-100">

                        <form action="add" method="POST">
                            @csrf

                            <div class="row">

                                <div class="form-outline w-100">
                                    <label class="form-label" for="namaLengkap">Nama Lengkap</label>
                                    <input type="text" id="namaLengkap" class="form-control" name="name"
                                        placeholder="Masukkan nama lengkap" />
                                </div>

                                <div class="form-outline pt-3">
                                    <label class="form-label" for="divisi">Divisi</label>
                                    <input type="text" id="divisi" class="form-control" name="division"
                                        placeholder="Masukkan divisi" />
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-outline w-100 pt-3">
                                    <label class="form-label" for="tanggalLaporan">Tanggal</label>
                                    <input type="date" id="tanggalLaporan" name="date" class="form-control" />
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-outline w-100 pt-3">
                                    <label for="laporanPeserta" class="form-label">Laporan</label>
                                    <textarea class="form-control" id="laporanPeserta" rows="3" name="reports"
                                        placeholder="Isi laporan"></textarea>
                                </div>

                            </div>

                            <div class="d-grid mt-4 pt-4">
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-block mb-3"
                                    style="background-color: #0E4770; color: white;">Save</button>
                            </div>

                        </form>

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
