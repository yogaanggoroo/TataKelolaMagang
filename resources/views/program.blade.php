<x-app-layout>
    <x-slot name="header">
        @include('template.navbar-user')
    </x-slot>

    <!-- ISI -->
    <div class="pt-sm-4">
        <div data-aos="zoom-in-up" class="container-sm card text-center">
            <div class="card-header text-center">
                <h3 style="color: black;">PROGRAM MAGANG PT PLN (PERSERO)</h3>
            </div>
            <div class="card-body magang">
                <p class="card-text" style="font-weight: 300;">PT PLN (Persero) membuka kesempatan dan peluang kepada
                    seluruh Warga Negara Indonesia yang
                    berstatus mahasiswa/i tingkat akhir atau lulusan baru Perguruan Tinggi Negeri maupun Swasta serta
                    memiliki integritas dan juga komitmen yang tinggi untuk mengikuti program magang.</p> <br>

                <h3 class="txt-magang">APA SAJA MANFAAT PROGRAM MAGANG?</h3>
                <div id="manfaat-magang" class="d-flex align-items-start mb-3 p-2" style="font-weight: 300;">
                    <div class="col">
                        <img src="/img/list-1.svg" alt="list-1" height="150" width="150" class="mx-auto d-block list-1">
                        Mendapatkan pemahaman tentang hubungan antara teori di kampus dan penerapannya di lapangan.
                    </div>
                    <div class="col">
                        <img src="/img/list-2.svg" alt="list-2" height="150" width="150" class="mx-auto d-block list-2">
                        Memperoleh gambaran yang lebih komprehensif dan jelas mengenai dunia kerja.</div>
                    <div class="col">
                        <img src="/img/list-3.svg" alt="list-3" height="150" width="150" class="mx-auto d-block list-3">
                        Meningkatkan wawasan, relasi, dan pengalaman dalam lingkungan profesional yang sebenarnya.</div>
                    <div class="col">
                        <img src="/img/list-4.svg" alt="list-4" height="150" width="150" class="mx-auto d-block list-4">
                        Sarana bagi mahasiswa/i dalam memperoleh dan menerima bahan untuk tugas akhir kuliah.</div>
                </div>

                <div id="proses-seleksi-magang">
                    <div class="text-center pt-sm-2">
                        <h3 class="txt-magang">PROSES SELEKSI MAGANG</h3>
                        <img src="/img/alur-seleksi-magang.png" alt="alur seleksi magang" class="mx-auto d-block"
                            width="550" height="550">
                    </div>
                </div>

                <div class="d-grid pt-3">
                    <a href="{{ route('daftar') }}" :active="request()->routeIs('daftar')"
                        class="btn btn-magang">{{ __('Apply') }}</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('template.footer')
</x-app-layout>
