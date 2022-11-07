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

    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-center align-items-center">
                <h2 style="color: black;">Isi & Unggah Berkas</h2>
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

                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label for="email" class="">Email<span class="text-danger">*</label>
                                    <input id="email" class="form-control" type="email" name="email"
                                        placeholder="Masukkan email" required autofocus />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="name" class="">Nama Lengkap<span class="text-danger">*</label>
                                    <input type="text" id="name" class="form-control" name="name"
                                        placeholder="Masukkan nama lengkap" required autofocus />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="gender" class="">Jenis Kelamin<span class="text-danger">*</label>
                                    <input type="text" id="gender" class="form-control" name="gender"
                                        placeholder="Masukkan jenis kelamin" required autofocus />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="number" class="">Nomor Telepon<span class="text-danger">*</label>
                                    <input type="text" id="number" class="form-control" name="phone"
                                        placeholder="Masukkan Nomor Telepon" required autofocus />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="address" class="">Alamat Kampus<span class="text-danger">*</label>
                                    <input type="text" id="address" class="form-control" name="address"
                                        placeholder="Masukkan alamat kampus" required autofocus />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="fotoTerbaru" class="">Pas Foto Terbaru<span
                                            class="text-danger">*</label>
                                    <input type="file" accept="image/*" capture="camera" class="form-control"
                                        name="image" id="fotoTerbaru" required autofocus />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="proposalMagang" class="">Proposal Magang<span
                                            class="text-danger">*</label>
                                    <input type="file" class="form-control" name="upload_proposal" id="proposalMagang"
                                        required autofocus />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="suratRekomendasi" class="">Surat Rekomendasi Magang<span
                                            class="text-danger">*</label>
                                    <input type="file" class="form-control" name="upload_rekomendasi"
                                        id="suratRekomendasi" required autofocus />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="curriculumVitae" class="">Curriculum Vitae (CV)<span
                                            class="text-danger">*</label>
                                    <input type="file" class="form-control" name="upload_cv" id="curriculumVitae"
                                        required autofocus />
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="transkripNilai" class="">Transkrip Nilai<span
                                            class="text-danger">*</label>
                                    <input type="file" class="form-control" name="upload_nilai" id="transkripNilai"
                                        required autofocus />
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
