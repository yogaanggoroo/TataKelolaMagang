<x-app-layout>
    <x-slot name="header">
        @include('template.navbar-user')
    </x-slot>

    <!-- ISI -->
    <div class="pt-sm-4">
        <div data-aos="zoom-in" class="container-sm card">
            <div class="container pt-lg-3">
                <div class="pt-sm-3">
                    <div class="card-header" style="background-color: #0E4770;">
                        <div class="pt-lg-1">
                            <h2>PROJECT ASSIGNMENT</h2>
                        </div>
                    </div>

                    <div class="container py-5 h-100">
                        <div class="row d-flex align-items-center justify-content-center h-100">
                            <div class="col-md-8 col-lg-7 col-xl-6">
                                <img src="/img/project-assign.svg" class="img-fluid" alt="Presence image">
                            </div>

                            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                                <form action="adds" method="POST">
                                    @csrf

                                    <div class="form-outline mb-4">
                                        <label class="" for="namaLengkap">Nama Lengkap<span
                                                class="text-danger">*</label>
                                        <input type="text" id="namaLengkap" class="form-control" name="name"
                                            placeholder="Masukkan nama lengkap" required />
                                    </div>

                                    <!-- Division input -->
                                    <div class="form-outline mb-4">
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

                                    <div class="form-outline mb-4">
                                        <label class="" for="tanggalTugas">Tanggal<span class="text-danger">*</label>
                                        <input type="date" id="tanggalTugas" class="form-control" name="date"
                                            required />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="" for="uploadTugas">Upload Tugas<span
                                                class="text-danger">*</label>
                                        <input type="file" class="form-control" id="uploadTugas" name="upload"
                                            required />
                                    </div>

                                    <div class="d-grid mt-4 pt-4">
                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-save btn-block mb-3"
                                            style="background-color:#0E4770; color: white;">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('template.footer')
</x-app-layout>
