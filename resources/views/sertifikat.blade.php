<x-app-layout>
    <x-slot name="header">
        @include('template.navbar-user')
    </x-slot>

    <!-- ISI -->
    <div class="vh-100 pt-sm-4">
        <div data-aos="zoom-in" class="container-sm card">
            <div class="container pt-lg-3">
                <div class="pt-sm-1">
                    <div class="card-header" style="background-color: #0E4770;">
                        <div class="pt-lg-1">
                            <h2>SERTIFIKAT</h2>
                        </div>
                    </div>

                    <div class="container py-4 h-100">

                        <!-- <p>Selamat Anda Telah Lulus Program Magang Di PT PLN (Persero)</p> -->

                        <p>Silahkan Isi & Cetak Sertifikat Dibawah Ini</p>

                        <!-- Cetak Sertifikat -->
                        <div class="pt-2">
                            <a href="https://forms.gle/jpXsoqnb66SbvmGW8" class="btn btn-block mb-3"
                            style="background-color: #0E4770; color: white;" >Cetak Sertifikat</a>
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
