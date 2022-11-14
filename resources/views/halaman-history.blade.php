<x-app-layout>
    <x-slot name="header"></x-slot>

    <!-- ISI -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-start align-items-center">
                <ol>
                    <li><a href="{{ route('presensi') }}">Presensi</a></li>
                    <li>History</li>
                </ol>
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
