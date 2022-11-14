<x-app-layout>
    <x-slot name="header"></x-slot>

    <!-- ISI -->
    <div class="vh-100 pt-sm-4">
        <div class="container-sm card">
            <div class="container pt-lg-3">
                <div class="pt-sm-1">
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
                                    <label class="" for="namaLengkap">Nama Lengkap</label>
                                    <input type="text" id="namaLengkap" class="form-control" name="name"
                                        placeholder="Masukkan nama lengkap" required />
                                </div>

                                <div class="form-outline pt-3">
                                    <label class="" for="divisi">Divisi</label>
                                    <input type="text" id="divisi" class="form-control" name="division"
                                        placeholder="Masukkan divisi" required />
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-outline w-100 pt-3">
                                    <label class="" for="tanggalLaporan">Tanggal</label>
                                    <input type="date" id="tanggalLaporan" name="date" class="form-control" required />
                                </div>

                            </div>

                            <div class="row">

                                <div class="form-outline w-100 pt-3">
                                    <label for="laporanPeserta" class="">Laporan</label>
                                    <textarea class="form-control" id="laporanPeserta" rows="3" name="reports"
                                        placeholder="Isi laporan" required></textarea>
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

    <!-- Footer -->
    @include('template.footer')
</x-app-layout>
