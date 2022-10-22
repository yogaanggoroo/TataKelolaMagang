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
            <h4 class="card-header text-center">PROGRAM MAGANG PT PLN (PERSERO)</h4>
            <div class="card-body">
                <p class="card-text">PT PLN (Persero) membuka kesempatan kepada seluruh Warga Negara Indonesia yang
                    berstatus mahasiswa tingkat akhir atau lulusan baru Perguruan Tinggi serta memiliki integritas dan
                    komitmen yang tinggi untuk mengikuti program magang.</p> <br>

                <p>Persyaratan Magang :</p> <br>
                <p>1. Warga negara Indonesia <br>
                    2. Sehat Jasmani dan Rohani; <br>
                    3. Berusia paling rendah 18 tahun <br>
                    4. Mahasiswa tingkat akhir (telah menempuh minimal 75% dari keseluruhan perkuliahan sesuai
                    programnya) atau lulusan perguruan tinggi program Diploma III (vokasi) atau Sarjana (S1); <br>
                    5. IPK minimal 3.00 <br>
                    6. Dokumen kelengkapan administrasi pendaftaran adalah sebagai berikut:

                    <li>Proposal yang memuat daftar riwayat hidup, tujuan magang, indeks prestasi kumulatif, dan
                        bidang kerja yang diminati.
                    </li>
                    <li>CV (Curriculum Vitae).</li>
                    <li>Surat pengantar atau surat rekomendasi dari perguruan tinggi asal calon peserta dengan
                        format sebagaimana terlampir.
                    </li>
                    <li>Transkip Nilai Terakhir.
                    </li>
                    <li>Kartu Identitas.</li>
                    <li>Pas Foto Terbaru.</li>
                    <li>Kelengkapan administratif lainnya sesuai dengan kebutuhan unit kerja.</li>
                </p>
            </div>
        </div>
    </div>

    <div class="pt-sm-4">
        <div class="container-sm card">
            <h4 class="card-header text-center">UNGGAH BERKAS</h4>
            <div class="card-body">
                <form>

                    <div class="row">

                        <div class="form-outline w-100">
                            <label class="form-label" for="pasFoto">{{ __('Pas Foto Terbaru') }}</label>
                            <input type="file" name="pas-foto-terbaru" class="form-control form-control-file"
                                id="pasFoto" :value="old('pas-foto-terbaru')" required />
                        </div>

                        <div class="form-outline pt-3">
                            <label class="form-label" for="proposalMagang">{{ __('Proposal Magang') }}</label>
                            <input type="file" class="form-control form-control-file" id="proposalMagang"
                                :value="old('proposal-magang')" required />
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-outline w-100 pt-3">
                            <label class="form-label"
                                for="suratRekomendasi">{{ __('Surat Rekomendasi Magang') }}</label>
                            <input type="file" class="form-control form-control-file" id="suratRekomendasi"
                                :value="old('surat-rekomendasi-magang')" required />
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-outline w-100 pt-3">
                            <label class="form-label" for="curriculumVitae">{{ __('Curriculum Vitae') }}</label>
                            <input type="file" class="form-control form-control-file" id="curriculumVitae"
                                :value="old('cv')" required />
                        </div>

                        <div class="form-outline pt-3">
                            <label for="portFolio" class="form-label">{{ __('Portfolio') }}</label>
                            <input class="form-control form-control-file" type="file" id="portFolio" multiple
                                :value="old('portfolio')" required />
                        </div>
                    </div>

                    <div class="d-grid mt-4 pt-2">
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-block mb-3"
                            style="background-color: #0E4770; color: white;">Submit</button>
                    </div>

                </form>
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
