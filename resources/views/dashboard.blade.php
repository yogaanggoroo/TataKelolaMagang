<x-app-layout>
    <x-slot name="header">
        @include('template.navbar-user')
    </x-slot>

    </-- ISI -->
    <div class="hero-image">
        <div class="container">
            <div class="row justify-content-between">
                <div class="d-flex flex-column text-lg-start pt-3">
                    <div class="hero-text pt-lg-5">
                        <h1 data-aos="zoom-in-up" class="txt-header">PROGRAM MAGANG PERGURUAN TINGGI <br> DI LINGKUNGAN
                            PT PLN (PERSERO)</h1>
                        <p data-aos="zoom-in-up" class="txt-hero col-8 pt-2">Suatu program belajar yang memperkenalkan
                            dan mengembangkan kemampuan mahasiswa/i
                            secara langsung pada PT PLN (Persero) sekaligus berlatih bekerja secara langsung selama
                            beberapa
                            waktu sehingga bisa memahami sistem dan cara kerja dunia profesional yang sebenarnya.</p>
                        <div data-aos="zoom-in-up" class="d-flex pt-3">
                            <a href="{{ route('program') }}" :active="request()->routeIs('program')"
                                class="btn-registration">{{ __('Program Magang') }}</a>
                            <a href="#persyaratan" class="btn-persyaratan ml-3">{{ __('Cek Persyaratan Umum') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="about featured-services" class="about featured-services" style="background-color: #EFF0F0;">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3>Kenapa harus mengikuti <span>Program Magang
                        PT PLN (Persero) ?</span>
                </h3>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <p class="description">Belajar dan memperluas jaringan di PT PLN (Persero)</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <p class="description">Menambah wawasan dan relasi dalam dunia pekerjaan</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <p class="description">Mentor - mentor yang baik dan berpengalaman pada perusahaan</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <p class="description">Mendapatkan sertifikat yang penting untuk dunia pekerjaan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="call-to-action" class="call-to-action pt-5">
        <div class="container" data-aos="zoom-out">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h3 style="font-weight: 500;">Bagaimana Proses Seleksi Magang ?</h3>
                    <p style="font-weight: 300;" class="pt-1">Silahkan klik untuk mengetahui bagaimana proses seleksi
                        magang.
                    </p>
                    <a class="cta-btn" href="{{ route('program#proses-seleksi-magang') }}">Cek Proses Seleksi Magang</a>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5" style="background-color: #EFF0F0;">
        <div class="container text-black pt-5" style="background-color: #EFF0F0;">
            <div class="d-flex" id="persyaratan">
                <div class="">
                    <h2 data-aos="fade-right" class="text-black">Syarat dan Ketentuan</h2>
                    <h3 data-aos="fade-right" class="text-black pt-3" style="font-size: 17px;">
                        A. Kriteria Peserta Magang
                    </h3>
                    <p data-aos="fade-right" class="pt-1" style="font-size: 15px; font-weight: 300;">
                        Mahasiswa yang melakukan magang harus memenuhi ketentuan sebagai berikut:
                    </p>
                    <div class="p-1">
                        <p data-aos="fade-right" style="font-size: 15px; font-weight: 300;">1. Sehat secara jasmani dan
                            rohani. <br>
                            2. Mahasiswa aktif untuk jenjang pendidikan S1/D4 dan D3. <br>
                            3. Telah menempuh 4 semester untuk jenjang D3. <br>
                            4. Telah menempuh 5 semester untuk jenjang S1/D4. <br>
                            5. Tidak sedang bekerja di instansi manapun.
                        </p>
                    </div>

                    <h3 data-aos="fade-right" class="text-black pt-3" style="font-size: 17px;">
                        B. Persyaratan Administrasi
                    </h3>

                    <div data-aos="fade-right" class="p-1">
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
                        <p style="font-size: 15px; font-weight: 300;">4. Transkrip nilai mahasiswa/i</p>
                    </div>
                </div>
                <div data-aos="fade-left" class="col-xl-5">
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
