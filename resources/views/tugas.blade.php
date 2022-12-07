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
                            <h2>PROJECT ASSIGNMENT</h2>
                        </div>
                    </div>

                    <div class="container py-5 h-100">

                        <form action="adds" method="POST">
                            @csrf

                            <div class="row">

                                <div class="form-outline w-100">
                                    <label class="" for="namaLengkap">Nama Lengkap<span class="text-danger">*</label>
                                    <input type="text" id="namaLengkap" class="form-control" name="name"
                                        placeholder="Masukkan nama lengkap" required />
                                </div>

                                <div class="form-outline pt-3">
                                    <label for="division" class="">Divisi<span class="text-danger">*</label>
                                        <select name="division" class="form-control" id="">
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
                                    <label class="" for="tanggalTugas">Tanggal<span class="text-danger">*</label>
                                    <input type="date" id="tanggalTugas" class="form-control" name="date" required />
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-outline w-100 pt-3">
                                    <label class="" for="uploadTugas">Upload Tugas<span class="text-danger">*</label>
                                    <input type="file" class="form-control" id="uploadTugas" name="upload" required />
                                </div>

                            </div>

                            <div class=" row">
                                <div class="d-grid mt-4 pt-4">
                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-block mb-3"
                                        style="background-color:#0E4770; color: white;">Save</button>
                                </div>
                            </div>

                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('template.footer')
</x-app-layout>
