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
                <h2 style="color: black;">History Presensi Peserta Magang</h2>
            </div>

        </div>
    </section>

    <div class="pt-sm-5">
        <!-- Main content -->
        <div class="vh-100 container">
            <div class="justify-content-center col-md-8 offset-md-2">
                <div class="card card-info card-outline">
                    <div class="card-header text-center">
                        <h2 style="color: black;">History Presensi Peserta Magang</h2>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="label">Tanggal Awal</label>
                                        <input type="date" name="tglawal" id="tglawal" class="form-control" />
                                    </div>
                                    <div class="form-group pt-3">
                                        <label for="label">Tanggal Akhir</label>
                                        <input type="date" name="tglakhir" id="tglakhir" class="form-control" />
                                    </div>
                                    <div class="form-group pt-4">
                                        <a href="" onclick="this.href='/history/'+ document.getElementById('tglawal').value +
                                    '/' + document.getElementById('tglakhir').value "
                                            class="btn btn-primary col-md-12">
                                            Lihat <i class="fas fa-print"></i>
                                        </a>
                                    </div>
                                </div><!-- /.container-fluid -->
                            </div>
                        </div>
                    </div>
                    <!-- /.content -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Footer -->
    @include('template.footer')
</x-app-layout>
