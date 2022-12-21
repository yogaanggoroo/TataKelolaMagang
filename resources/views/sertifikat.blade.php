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
                        <form action="addss" method="POST">
                            @csrf

                            <div class="row">
                                <div class="form-outline w-100">
                                    <label class="" for="ttl">Tempat, Tanggal Lahir<span class="text-danger">*</label>
                                    <input type="text" id="ttl" class="form-control" name="ttl"
                                        placeholder="Masukkan tempat, tanggal lahir" required />
                                </div>

                                <div class="form-outline pt-3">
                                    <label for="division" class="">Divisi<span class="text-danger">*</label>
                                    <select name="division" class="form-control" id="">
                                        <option selected disabled>Pilih Divisi</option>
                                        <option value="Keuangan">Keuangan</option>
                                        <option value="Anggaran">Anggaran</option>
                                        <option value="Akuntansi">Akuntansi</option>
                                        <option value="HTD">HTD</option>
                                        <option value="Sistem & Teknologi Informasi">Sistem dan Teknologi Informasi
                                        </option>
                                        <option value="Risk Management">Risk Management</option>
                                        <option value="Pengelolaan Aset">Pengelolaan Aset</option>
                                        <option value="Hukum Korporat">Hukum Korporat</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-outline w-100 pt-3">
                                    <label class="" for="tgl_mulai">Mulai Magang<span class="text-danger">*</label>
                                    <input type="date" id="tgl_mulai" class="form-control" name="tgl_mulai" required />
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-outline w-100 pt-3">
                                    <label class="" for="tgl_akhir">Selesai Magang<span class="text-danger">*</label>
                                    <input type="date" class="form-control" name="tgl_akhir" required />
                                </div>
                            </div>

                            <div class="d-grid mt-4 pt-4">
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-save btn-block mb-3"
                                    style="background-color:#0E4770; color: white;">Save</button>
                            </div>

                            <div class="d-grid">
                                <a href="{{ ('download_sertifikat') }}" class="btn btn-block mb-3 btn-laporan">Download
                                    Sertifikat</a>
                            </div>
                        </form>
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
