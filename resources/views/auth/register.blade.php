<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager" />
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/css/signup.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://seventh-production.up.railway.app/css/fontawesome-free-6.5.2-web/css/all.min.css"
        rel="stylesheet" />

    <title>Sign Up Page</title>
    <style>
        /* Autofill input styling */
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 30px white inset !important;
            /* Changes background color */
            box-shadow: 0 0 0 30px white inset !important;
            -webkit-text-fill-color: #04AA6D !important;
            /* Changes text color */
        }
    </style>
</head>

<body>
    <x-validation-errors class="mb-4" />
    <div id="register" class="form-container">
        <form method="POST" autocomplete="on" action="{{ route('register') }}">
            @csrf

            <div class="logo">
                <img src="/images/sda.png" class="sda_logo">
            </div>
            <h2 class="form-title">Sign up</h2>

            <div class="input-row">
                <div class="input-group">
                    <input id="name" name="name" :value="old('name')" type="text" required autofocus autocomplete="name"
                        class="input" />
                    <label for="name" value="{{ __('Name') }}" class="placeholder" data-icon="u">Name</label>
                </div>

                <div class="input-group">
                    <input id="email" name="email" :value="old('email')" type="email" required autocomplete="email"
                        class="input" />
                    <label for="email" value="{{ __('Email') }}" class="placeholder" data-icon="e">Email
                        Address</label>
                </div>

                <div class="input-group">
                    <input id="password" name="password" required autocomplete="new-password" type="password"
                        class="input_1" />
                    <label for="password" value="{{ __('Password') }}" data-icon="p"
                        class="placeholder_1">Password</label>
                </div>

                <div class="input-group">
                    <input id="password_confirmation" name="password_confirmation" required autocomplete="new-password"
                        type="password" class="input_1" />
                    <label for="password_confirmation" value="{{ __('Confirm Password') }}" data-icon="p"
                        class="placeholder_1">Password</label>
                </div>
            </div>

            <button type="submit" value="Sign up" name="submit" class="submitbtn"><i
                    class="fa-solid fa-user-plus"></i>&nbsp;{{ __('Register') }}</button>
            <p class="member">Already a Member?</p>
            <a href="{{ route('login') }}" class="to_login">
                <button type="button" class="loginbtn"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Go to Log
                    in</button>
            </a>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ms-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                    'terms_of_service' =>
                        '<a target="_blank" href="' .
                        route('terms.show') .
                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                        __('Terms of Service') .
                        '</a>',
                    'privacy_policy' =>
                        '<a target="_blank" href="' .
                        route('policy.show') .
                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                        __('Privacy Policy') .
                        '</a>',
                ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
            @endif
    </div>
    </form>
    </div>

    <script src="/images/script.js"></script>
</body>

</html>