<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="" content="firdausyogaanggoro@gmail.com, ahmadsultoni24psp@gmail.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Register</title>
    <link rel="stylesheet" href="/css/register.css">
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration my-lg-5" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Registration</h3>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 mb-4 w-100">
                                        <div class="form-outline w-100">
                                            <label for="name" class="form-label">{{ __('Name') }}</label> <br>
                                            <input id="name" class="form-control form-control-lg" type="text"
                                                name="name" :value="old('name')" required autofocus
                                                autocomplete="name" />
                                        </div>
                                    </div>

                                    <div class="form-outline w-100">

                                        <label for="email" class="form-label">{{ __('Email') }}</label> <br>
                                        <input id="email" class="form-control form-control-lg" type="email" name="email"
                                            :value="old('email')" required />
                                    </div>

                                    <div class="form-outline pt-3">
                                        <label for="password" class="form-label">{{ __('Password') }}</label>
                                        <input id="password" class="form-control form-control-lg" type="password"
                                            name="password" required autocomplete="new-password" />
                                    </div>

                                    <div class="form-outline pt-3">
                                        <label for="password_confirmation" class="form-label"
                                            value="{{ __('Confirm Password') }}">{{ __('Confirm Password') }}</label>
                                        <br>
                                        <input id="password_confirmation" class="form-control form-control-lg"
                                            type="password" name="password_confirmation" required
                                            autocomplete="new-password" />
                                    </div>

                                </div>

                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="mt-4">
                                        <label for="terms">
                                            <div class="flex items-center">
                                                <input type="checkbox" name="terms" id="terms" />

                                                <div class="ml-2">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank"
                                                        href="'.route('terms.show').'"
                                                        class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms
                                                        of
                                                        Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank"
                                                        href="'.route('policy.show').'"
                                                        class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy
                                                        Policy').'</a>',
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    @endif

                                <div class="flex items-center justify-content-end mt-4">
                                    <a href="{{ route('login') }}" class="">{{ __('Already registered?') }}</a>

                                    <div class="d-grid mt-3">
                                        <button type="submit" class="btn btn-block mb-3"
                                            style="background-color: #0E4770; color: white;">{{ __('Register') }}</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
