<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="" content="firdausyogaanggoro@gmail.com, ahmadsultoni24psp@gmail.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/css/app.css">
    <title>Login</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #0E4770">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="/img/logo_pln1.png" alt="Logo PLN" width="100">
                </a>
            </div>
        </nav>
    </header>

    <div class="container-fluid">
        <div class="container text-center">
            <h1 class="pt-lg-5">APLIKASI MONITORING MAGANG</h1>
            <img src="/img/logo_pln2.png" class="img-fluid pt-4" alt="logo-pln2" width="204" height="136">
        </div>

        <div class="container-sm pt-4">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-outline mb-4">
                    <label for="email" class="form-label">{{ __('Email') }} </label> <br>
                    <input id="email" class="form-control" type="email" name="email" :value="old('email')" required
                        autofocus />
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
                    <button type="submit" class="btn btn-block mb-3" style="background-color: #0E4770; color: white;">
                        {{ __('Log in') }}
                    </button>
                </div>

                <!-- Register buttons -->
                <div class="text-center pt-5">
                    <p>Belum punya akun? <a href="/register">Register</a></p>
                </div>
            </form>
        </div>
    </div>

    <footer class="text-center text-lg-start" style="background-color: #0E4770;">

        <div class="copyright text-center p-3 text-white">
            PLN (Persero) Kantor Pusat Jalan Trunojoyo Blok M-I No.135 Kebayoran Baru, Jakarta 12160, Indonesia
        </div>

    </footer>

</body>

</html>
