<x-app-layout>
    <x-slot name="header">
        @include('template.navbar-user')
    </x-slot>

    <!-- ISI -->
    <div class="pt-sm-4">
        <div data-aos="fade-right" class="container-sm card">
            <div class="container hero-text pt-lg-3">
                <img src="/img/welcome.svg" class="float-end" alt="welcome">
                <h1>Selamat Datang Peserta!</h1>
                <p>Monitoring kegiatan magang menjadi lebih terstruktur</p>
            </div>
        </div>
    </div>

    <div class="pt-sm-4">
        <div data-aos="fade-left" class="container-sm card">
            <div class="container pt-lg-3">
                <div class="pt-sm-1">
                    <div class="card-header" style="background-color: #0E4770;">
                        <div class="pt-lg-1 text-center">
                            <h2>Presensi Peserta Magang PT PLN (Persero)</h2>
                        </div>
                    </div>

                    <div class="presence-image p-3">
                        <img src="/img/presensi-magangg.svg" class="rounded mx-auto d-block" alt="Presence image"
                            width="300" height="300">
                    </div>

                    <div class="text-center">
                        <a href="{{ route('masuk') }}" :active="request()->routeIs('masuk')" class="btn btn-checkin"
                            style="background-color: #28a745; color: white;">{{ __('Check-In') }}</a>

                        <a href="{{ route('keluar') }}" :active="request()->routeIs('keluar')" class="btn btn-checkout"
                            style="background-color: #dc3545; color: white;">{{ __('Check-Out') }}</a>

                        <!-- Submit button
                        <button type="submit" class="btn-checkin btn"
                            style="background-color: #28a745; color: white;">Check-In</button>

                        <button type="submit" class="btn-checkout btn"
                            style="background-color: #dc3545; color: white;">Check-Out</button> -->
                    </div>

                    <div class="d-grid mt-1 pt-1 m-3">
                        <!-- Submit button
                        <button type="submit" class="btn-history btn btn-block mb-3"
                            style="background-color: #0E4770; color: white;">History</button> -->

                        <a href="{{ route('halaman-history') }}" :active="request()->routeIs('halaman-history')"
                            class="btn btn-primary btn-history" style="color: white;">{{ __('History') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('template.footer')
</x-app-layout>
