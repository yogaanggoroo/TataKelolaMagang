<x-app-layout>
    <x-slot name="header">
        @include('template.navbar-admin')
    </x-slot>

    </-- ISI -->
    <div class="hero-image">
        <div class="container">
            <div class="row justify-content-between">
                <div class="d-flex flex-column text-lg-start pt-3">
                    <div class="hero-text pt-lg-5">
                        <h1 class="txt-header col-lg-5">PROGRAM MAGANG PT PLN (PERSERO)</h1>
                        <p class="txt-hero col-lg-6 pt-2">Suatu program belajar secara
                            langsung pada PT PLN (Persero) sekaligus berlatih bekerja secara langsung selama beberapa
                            waktu bisa memahami sistem kerja dunia profesional yang sebenarnya.</p>
                        <div class="d-flex pt-3">
                            <a href="{{ route('magang') }}" :active="request()->routeIs('magang')"
                                class="btn-registration">{{ __('Daftar Magang') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('template.footer')
</x-app-layout>
