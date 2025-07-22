<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager">
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager">
    
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/css/signup.css">
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/css/fontawesome-free-6.5.2-web/css/all.min.css">

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
        <form method="POST" autocomplete="on" action="{{ route('register') }}">
            @csrf

            <div class="logo">
                <img src="/images/sda.png" class="sda_logo" alt="Church Logo">
            </div>
            <h2 class="form-title">Sign up</h2>

            <div class="input-row">
                <div class="input-group">
                    <input id="name" name="name" value="{{ old('name') }}" type="text" required autofocus autocomplete="name" class="input" />
                    <label for="name" class="placeholder" data-icon="u">Name</label>
                </div>

                <div class="input-group">
                    <input id="email" name="email" value="{{ old('email') }}" type="email" required autocomplete="email" class="input" />
                    <label for="email" class="placeholder" data-icon="e">Email Address</label>
                </div>

                <div class="input-group">
                    <input id="phone" name="phone" value="{{ old('phone') }}" type="tel" pattern="[0-9]{10}" maxlength="10" required autocomplete="tel" class="input" />
                    <label for="phone" class="placeholder" data-icon="u">Phone</label>
                </div>

                <div class="input-group">
                    <select class="gender-select" name="gender" id="gender" required>
                        <option value="" disabled selected>Select Gender</option>
                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>

                <div class="input-group">
                    <input id="address" name="address" value="{{ old('address') }}" type="text" required autocomplete="address" class="input" />
                    <label for="address" class="placeholder" data-icon="u">Address</label>
                </div>

                <div class="input-group">
                    <input id="birthday" type="date" name="birthday" min="1900-01-02" required class="input" value="{{ old('birthday') }}" autocomplete="bday">
                    <label for="birthday" class="placeholder" data-icon="u">Date of Birth</label>
                </div>

                <div class="input-group">
                    <input id="password" name="password" required autocomplete="new-password" type="password" class="input_1" />
                    <label for="password" class="placeholder_1" data-icon="p">Password</label>
                </div>

                <div class="input-group">
                    <input id="password_confirmation" name="password_confirmation" required autocomplete="new-password" type="password" class="input_1" />
                    <label for="password_confirmation" class="placeholder_1" data-icon="p">Confirm Password</label>
                </div>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-label for="terms">
                    <div class="flex items-center">
                        <x-checkbox name="terms" id="terms" required />
                        <div class="ms-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md">Terms of Service</a>',
                                'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md">Privacy Policy</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-label>
            </div>
            @endif

            <button type="submit" class="submitbtn">
                <i class="fa-solid fa-user-plus"></i> {{ __('Register') }}
            </button>

            <p class="member">Already a Member?</p>
            <a href="{{ route('login') }}" class="to_login">
                <button type="button" class="loginbtn">
                    <i class="fa-solid fa-right-from-bracket"></i> Go to Log in
                </button>
            </a>
        </form>
    </div>

    <script src="/images/script.js"></script>
</body>

</html>
