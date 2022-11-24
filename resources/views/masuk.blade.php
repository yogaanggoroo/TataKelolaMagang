<x-app-layout>
    <x-slot name="header">

        @include('template.navbar-user')

        <script src="{{ asset('js/jam.js') }}"></script>
        <style>
            #watch {
                color: rgb(252, 150, 65);
                position: absolute;
                z-index: 1;
                height: 40px;
                width: 700px;
                overflow: show;
                margin: auto;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                font-size: 10vw;
                -webkit-text-stroke: 3px rgb(210, 65, 36);
                text-shadow: 4px 4px 10px rgba(201, 65, 36, 0.4),
                    4px 4px 20px rgba(210, 45, 26, 0.4),
                    4px 4px 30px rgba(210, 25, 16, 0.4),
                    4px 4px 40px rgba(210, 15, 06, 0.4),
            }
        </style>
    </x-slot>

    <!-- ISI -->

    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-start align-items-center">
                <ol>
                  <li><a href="{{ route('presensi') }}">Presensi</a></li>
                  <li>Check-In</li>
                </ol>
            </div>
        </div>
    </section>

    <div class="pt-sm-5">
        <!-- Main content -->
        <div class="vh-100 container ">
            <div class="justify-content-center">
                <div class="card card-info card-outline">
                    <div class="card-header text-center">
                        <h2 style="color: black;">Presensi Masuk</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('simpan-masuk') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <center>
                                    <label id="clock" style="font-size: 100px; color: #0A77DE; -webkit-text-stroke: 3px #00ACFE;
                                                text-shadow: 4px 4px 10px #36D6FE,
                                                4px 4px 20px #36D6FE,
                                                4px 4px 30px#36D6FE,
                                                4px 4px 40px #36D6FE;">
                                    </label>
                                </center>
                            </div>
                            <center>
                                <div class="form-group">
                                    <button type="submit"
                                        class="btn btn-presensi btn-outline-primary">Klik Untuk
                                        Presensi Masuk</button>
                                </div>
                            </center>
                        </form>

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
