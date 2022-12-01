<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="" content="firdausyogaanggoro@gmail.com, ahmadsultoni24psp@gmail.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/css/login.css">
    <link rel="icon" type="image/png" href="/img/logo_pln2.png">
    <title>Login</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #0E4770">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="/img/logo_pln1.png" alt="Logo PLN" width="100">
                </a>
                <div class="collapse navbar-collapse" id="navbar">
                    <div class="navbar-nav">
                        <a class="nav-link" href="/pdf/buku-panduan.pdf" style="color: white;">
                            {{ __('Buku Panduan') }}
                        </a>
                    </div>
                </div>

            </div>
        </nav>
    </header>

    <!-- ISI -->
    <section class="">
        <div class="container py-3 ">
            <div data-aos="zoom-in" class="row justify-content-center align-items-center ">
                <div class="col-12 col-lg-9 col-xl-6">
                    <div class="card card-registration my-lg-5" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <div class="text-center">
                                <h1 class="header-login pt-lg-2">APLIKASI MONITORING MAGANG</h1>
                                <img src="/img/logo_pln2.png" class="img-fluid pt-3" alt="logo-pln2" width="114"
                                    height="46">
                            </div>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-outline mb-4">
                                    <label for="email" class="form-label">{{ __('Email') }} </label> <br>
                                    <input id="email" class="form-control" type="email" name="email"
                                        :value="old('email')" required autofocus />
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="password" class="form-label">{{ __('Password') }} </label> <br>
                                    <input id="password" class="form-control" type="password" name="password" required
                                        autocomplete="current-password" />
                                </div>

                                <div class="block mt-1">
                                    <label for="remember_me" class="flex items-center">
                                        <input type="checkbox" id="remember_me" name="remember">
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>

                                <div class="mt-2">
                                    @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                    @endif
                                </div>

                                <div class="d-grid pt-5">
                                    <button type="submit" class="btn btn-block mb-3"
                                        style="background-color: #0E4770; color: white;">
                                        {{ __('Login') }}
                                    </button>
                                </div>

                                <!-- Register buttons -->
                                <div class="txt-register text-center pt-4">
                                    <p>Belum punya akun? <a href="/register">Register</a></p>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>

        <div class="copyright p-3 text-white">
            PT PLN (Persero) Kantor Pusat Jalan Trunojoyo Blok M-I No.135 Kebayoran Baru, Jakarta 12160, Indonesia
        </div>

    </footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
