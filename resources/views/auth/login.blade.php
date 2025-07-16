<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager">
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager">

    <!-- Secure stylesheets -->
    <link rel="stylesheet" href="{{ secure_asset('css/signup.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/fontawesome-free-6.5.2-web/css/all.min.css') }}">

    <title>Sign Up Page</title>

    <style>
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 30px white inset !important;
            box-shadow: 0 0 0 30px white inset !important;
            -webkit-text-fill-color: #04AA6D !important;
        }
    </style>
</head>

<body>
    <x-validation-errors class="mb-4" />

    <div id="register" class="form-container">
        <form method="POST" action="{{ route('register') }}" autocomplete="on">
            @csrf

            <div class="logo">
                <img src="{{ secure_asset('images/sda.png') }}" alt="Logo" class="sda_logo">
            </div>

            <h2 class="form-title">Sign up</h2>

            <div class="input-row">
                <!-- Name -->
                <div class="input-group">
                    <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus autocomplete="name" class="input">
                    <label for="name" class="placeholder" data-icon="u">Name</label>
                </div>

                <!-- Email -->
                <div class="input-group">
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email" class="input">
                    <label for="email" class="placeholder" data-icon="e">Email Address</label>
                </div>

                <!-- Password -->
                <div class="input-group">
                    <input id="password" name="password" type="password" required autocomplete="new-password" class="input_1">
                    <label for="password" class="placeholder_1" data-icon="p">Password</label>
                </div>

                <!-- Confirm Password -->
                <div class="input-group">
                    <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password" class="input_1">
                    <label for="password_confirmation" class="placeholder_1" data-icon="p">Confirm Password</label>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="submitbtn">
                <i class="fa-solid fa-user-plus"></i>&nbsp;{{ __('Register') }}
            </button>

            <p class="member">Already a Member?</p>
            <a href="{{ route('login') }}" class="to_login">
                <button type="button" class="loginbtn">
                    <i class="fa-solid fa-right-from-bracket"></i>&nbsp;Go to Log in
                </button>
            </a>

            <!-- Terms and Privacy -->
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />
                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' . __('Terms of Service') . '</a>',
                                    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' . __('Privacy Policy') . '</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif
        </form>
    </div>

    <!-- Secure JS -->
    <script src="{{ secure_asset('images/script.js') }}"></script>
</body>

</html>
