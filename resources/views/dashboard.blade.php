<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Participant') }}
        </h2>
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

    <section class="pt-5 py-5 p-5" style="background-color: #EFF0F0;">
        <div class="container py-5 p-5 text-light">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card" style="border-radius: 25px; background-color: #0E4770;">
                        <div class="card-body p-md-5">
                            <h2 class="txt-content mb-4 pb-2 pb-md-0 mb-md-5 text-center">
                                Kenapa harus mengikuti Program <br> Magang
                                PT PLN (Persero)</h2>
                            <div class="list-magang pt-1 text-center">
                                <ol>
                                    <li>1. Belajar dan memperluas jaringan di PT PLN (Persero)</li>
                                    <li>2. Menambah wawasan dalam dunia pekerjaan</li>
                                    <li>3. Mentor - mentor yang baik dan berpengalaman</li>
                                    <li>4. Mendapatkan sertifikat</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: #EFF0F0;">
        <div class="container h-100 text-black">
            <div class="d-flex">
                <div class="">
                    <h2 class="text-black">Syarat dan Ketentuan</h2>
                    <h3 class="text-black pt-3" style="font-size: 17px;">A. Kriteria Peserta Magang</h3>
                    <p class="pt-1" style="font-size: 15px; font-weight: 300;">Mahasiswa yang melakukan magang harus
                        memenuhi ketentuan sebagai berikut:
                    </p>
                    <div class="p-1">
                        <p style="font-size: 15px; font-weight: 300;">1. Sehat secara jasmani dan rohani. <br>
                            2. Mahasiswa aktif untuk jenjang pendidikan S1/D4 dan D3. <br>
                            3. Telah menempuh 4 semester untuk jenjang D3. <br>
                            4. Telah menempuh 5 semester untuk jenjang S1/D4. <br>
                            5. Tidak sedang bekerja di instansi manapun.
                        </p>
                    </div>

                    <h3 class="text-black pt-3" style="font-size: 17px;">B. Persyaratan Administrasi</h3>

                    <div class="p-1">
                        <p style="font-size: 15px; font-weight: 300;">1. Surat Pengantar dari Universitas.</p>
                        <p style="font-size: 15px; font-weight: 300;">2. Proposal Magang yang berisikan :</p>
                        <div class="p-1">
                            <li style="font-size: 15px; font-weight: 300;">Keterangan data mahasiswa (Nama, NIM, Kontak
                                Pribadi, Fakultas/Program Studi/Jurusan, Semester)</li>
                            <li style="font-size: 15px; font-weight: 300;">Durasi dan periode magang</li>
                            <li style="font-size: 15px; font-weight: 300;">Maksud dan tujuan magang</li>
                            <li style="font-size: 15px; font-weight: 300;">Harapan atau target yang akan dicapai</li>
                            <li style="font-size: 15px; font-weight: 300;">Bidang pekerjaan yang diminati</li>
                        </div>
                        <p style="font-size: 15px; font-weight: 300;">3. Curriculum Vitae</p>
                    </div>
                </div>

                <div class="col-xl-5">
                    <img src="/img/persyaratan.svg" class="" alt="persyaratan">
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
