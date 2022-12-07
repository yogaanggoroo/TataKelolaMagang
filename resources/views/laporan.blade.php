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
                            <h2>LAPORAN</h2>
                        </div>
                    </div>


                    <div class="col-md-12 pt-2">
                        <button class="btn float-start" id="submit" type=''
                            style="background-color: #F66951; color: white;">Download Laporan</button>
                    </div>

                    <div class="container py-5 h-100">
                        <form action="add" method="POST">
                            @csrf

                            <div class="row">

                                <div class="form-outline w-100">
                                    <label class="" for="namaLengkap">Nama Lengkap<span class="text-danger">*</label>
                                    <input type="text" id="namaLengkap" class="form-control" name="name"
                                        placeholder="Masukkan nama lengkap" required />
                                </div>

                                <div class="form-outline pt-3">
                                        <label for="division" class="">Divisi<span class="text-danger">*</label>
                                            <select name="division" class="form-control" id="" required>
                                                <option selected disabled>Pilih Divisi</option>
                                                    <option value="keuangan">Keuangan</option>
                                                    <option value="anggaran">Anggaran</option>
                                                    <option value="akuntansi">Akuntansi</option>
                                                    <option value="pengembangan talenta">Pengembangan Talenta</option>
                                                    <option value="sistem dan teknologi informasi">Sistem dan Teknologi Informasi</option>
                                                    <option value="risk management">Risk Management</option>
                                                    <option value="pengelolaan aset">Pengelolaan Aset</option>
                                                    <option value="hukum korporat">Hukum Korporat</option>
                                            </select>
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-outline w-100 pt-3">
                                    <label class="" for="tanggalLaporan">Tanggal<span class="text-danger">*</label>
                                    <input type="date" id="tanggalLaporan" name="date" class="form-control" required />
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-outline w-100 pt-3">
                                    <label for="laporanPeserta" class="">Laporan<span class="text-danger">*</label>
                                    <textarea class="form-control" id="laporanPeserta" rows="3" name="reports"
                                        placeholder="Isi laporan" required></textarea>
                                </div>

                            </div>

                            <div class="d-grid mt-4 pt-4">
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-block mb-3"
                                    style="background-color: #0E4770; color: white;">Save</button>
                            </div>

                            <div class="d-grid">
                                <button type="" class="btn btn-block mb-3"
                                    style="background-color: #F66951; color: white;">Download Laporan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('template.footer')
</x-app-layout>
