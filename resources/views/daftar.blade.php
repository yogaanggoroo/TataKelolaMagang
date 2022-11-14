<x-app-layout>
    <x-slot name="header"></x-slot>

    <!-- ISI -->

    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-start align-items-center">
                <ol>
                  <li><a href="{{ route('magang') }}">Magang</a></li>
                  <li>Daftar</li>
                </ol>
            </div>
        </div>
    </section>

    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="">
                        <form action="addss" class="mt-5 border p-4 bg-light shadow" method="POST">
                            @csrf

                            <div class="card-header text-center">
                                <h4 style="color: black;">Isi & Unggah Berkas</h4>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label for="email" class="">Email<span class="text-danger">*</label>
                                    <input id="email" class="form-control" type="email" name="email"
                                        placeholder="Masukkan email" required autofocus />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="name" class="">Nama Lengkap<span class="text-danger">*</label>
                                    <input type="text" id="name" class="form-control" name="name"
                                        placeholder="Masukkan nama lengkap" required />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="gender" class="">Jenis Kelamin<span class="text-danger">*</label>
                                    <input type="text" id="gender" class="form-control" name="gender"
                                        placeholder="Masukkan jenis kelamin" required />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="number" class="">Nomor Telepon<span class="text-danger">*</label>
                                    <input type="text" id="number" class="form-control" name="phone"
                                        placeholder="Masukkan Nomor Telepon" required />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="address" class="">Alamat Kampus<span class="text-danger">*</label>
                                    <input type="text" id="address" class="form-control" name="address"
                                        placeholder="Masukkan alamat kampus" required />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="fotoTerbaru" class="">Pas Foto Terbaru<span
                                            class="text-danger">*</label>
                                    <input type="file" accept="image/*" capture="camera" class="form-control"
                                        name="image" id="fotoTerbaru" required />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="proposalMagang" class="">Proposal Magang<span
                                            class="text-danger">*</label>
                                    <input type="file" class="form-control" name="upload_proposal" id="proposalMagang"
                                        required />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="suratRekomendasi" class="">Surat Rekomendasi Magang<span
                                            class="text-danger">*</label>
                                    <input type="file" class="form-control" name="upload_rekomendasi"
                                        id="suratRekomendasi" required />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="curriculumVitae" class="">Curriculum Vitae (CV)<span
                                            class="text-danger">*</label>
                                    <input type="file" class="form-control" name="upload_cv" id="curriculumVitae"
                                        required />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="transkripNilai" class="">Transkrip Nilai<span
                                            class="text-danger">*</label>
                                    <input type="file" class="form-control" name="upload_nilai" id="transkripNilai"
                                        required />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="portFolio" class="">Portfolio<span class="text-danger">*</label>
                                    <input type="file" class="form-control" name="upload_portfolio" id="portFolio" />
                                </div>

                                <div class="col-md-12">
                                    <button class="btn float-end" id="submit" type='submit'
                                        style="background-color: #0E4770; color: white;">Submit</button>
                                </div>
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
