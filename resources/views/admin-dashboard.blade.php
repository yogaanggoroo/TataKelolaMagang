<x-app-layout>
    <x-slot name="header">
        @include('template.navbar-admin')
    </x-slot>

    </-- ISI -->

    <div class="pt-sm-4">
        <div class="container-sm card">
            <div class="container hero-text pt-lg-3">
                <img src="/img/welcome.svg" class="float-end" alt="welcome">
                <h1>Selamat Datang Admin!</h1>
                <p>Monitoring kegiatan magang menjadi lebih terstruktur</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('template.footer')
</x-app-layout>
