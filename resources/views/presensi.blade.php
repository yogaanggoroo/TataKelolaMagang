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
                <div class="pt-sm-3">
                    <div class="card-header" style="background-color: #0E4770;">
                        <div class="pt-lg-1">

                            <h2>PRESENSI MAGANG</h2>
                        </div>
                    </div>

                    <div class="container py-5 h-100">
                        <div class="row d-flex align-items-center justify-content-center h-100">
                            <div class="col-md-8 col-lg-7 col-xl-6">
                                <img src="/img/presensi-magang.svg" class="img-fluid" alt="Presence image">
                            </div>
                            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                                <form>
                                    <!-- Name input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="namaLengkap">Nama Lengkap</label>
                                        <input type="text" id="namaLengkap" class="form-control form-control-lg"
                                            placeholder="Masukkan nama lengkap" />
                                    </div>

                                    <!-- Division input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="divisi">Divisi</label>
                                        <input type="text" id="divisi" class="form-control form-control-lg"
                                            placeholder="Masukkan divisi" />
                                    </div>

                                    <!-- Division input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="tanggalPresensi">Tanggal</label>
                                        <input type="date" id="tanggalPresensi" class="form-control form-control-lg" />
                                    </div>

                                    <!-- Division input -->
                                    <div class="form-outline mb-4">
                                        <label for="keteranganPeserta" class="form-label">Keterangan</label>
                                        <select class="form-select" id="keteranganPeserta" name="Keterangan">
                                            <option>Hadir</option>
                                            <option>Izin</option>
                                            <option>Sakit</option>
                                        </select>
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
