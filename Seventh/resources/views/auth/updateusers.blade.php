<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager" />
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
    <link rel="stylesheet" href="<?php echo asset('css/addmember.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/fontawesome-free-6.5.2-web/css/all.min.css'); ?>" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Update Member</title>
    <style>
                /* Custom Autofill input styling */
                input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 30px white inset !important;
            box-shadow: 0 0 0 30px white inset !important;
            -webkit-text-fill-color: #04AA6D !important;
        }

        /* Floating Label Styles */
        .form-floating {
            position: relative;
        }

        .form-floating input {
            padding: 1rem 0.75rem;
            padding-top: 1.5rem;
        }

        .textcolor {
            color: #04AA6D;
        }

        .form-floating label {
            position: absolute;
            top: 45%;
            left: 3%;
            transform: translateY(-50%);
            transition: all 0.2s ease-in-out;
            color: #04AA6D;
            pointer-events: none;
        }

        .form-floating input:focus+label,
        .form-floating input:not(:placeholder-shown)+label {
            top: 25%;
            transform: translateY(-100%);
            font-size: 0.80rem;
            color: #04AA6D;
            background: white;
        }

        /* Adjustments for input border */
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            color: #04AA6D;
        }

        .form-control:focus {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            color: #04AA6D;
        }

        .text-primary {
            color: #e4af00 !important;
        }

                /* Responsive adjustments */
                @media (max-width: 1200px) {
            .form-floating input {
                padding: 0.7rem 0.25rem;
                padding-top: 1rem;
                margin-bottom: 18px;
            }

            .form-floating label {
                font-size: 0.75rem;
                margin-top: -5px;
                margin-left: 7px;
            }

            .form-select {
                color: #04AA6D;
                border-color: #04AA6D;
            }

            .form-floating label:focus {
                font-size: 0.9rem;
                padding: 0.75rem 1rem;
            }

            .btn {
                font-size: 1rem;
            }

            .container {
                padding: 2rem;
            }

            .footer span {
                font-size: 0.85rem;
            }
        }

                /* Responsive adjustments */
        @media (max-width: 768px) {
            .form-floating input {
                padding: 0.7rem 0.25rem;
                padding-top: 1rem;
                margin-bottom: 18px;
            }

            .form-floating label {
                font-size: 0.75rem;
                margin-top: -5px;
                margin-left: 7px;
            }

            .form-floating label:focus {
                font-size: 0.9rem;
                padding: 0.75rem 1rem;
            }

            .btn {
                font-size: 1rem;
            }

            .container {
                padding: 2rem;
            }

            .footer span {
                font-size: 0.85rem;
            }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .form-floating input {
                padding: 0.7rem 0.25rem;
                padding-top: 1rem;
                margin-bottom: 18px;
            }

            .form-floating label {
                font-size: 0.75rem;
                margin-top: -5px;
                margin-left: 7px;
            }

            .form-floating label:focus {
                font-size: 0.9rem;
                padding: 0.75rem 1rem;
            }

            .btn {
                font-size: 1rem;
            }

            .container {
                padding: 2rem;
            }

            .footer span {
                font-size: 0.85rem;
            }
        }

        @media (max-width: 576px) {
            .form-floating input {
                padding: 0.7rem 0.25rem;
                padding-top: 2rem;
                margin-bottom: 18px;
            }

            .form-floating label {
                font-size: 1rem;
                margin-top: -5px;
                margin-left: 7px;
            }

            .form-floating label:focus {
                font-size: 0.9rem;
                padding: 0.75rem 1rem;
            }

            .container {
                padding: 1rem;
            }

            .textcolor {
                color: #04AA6D;
            }

            .footer span {
                font-size: 0.75rem;
            }
        }
    </style>
</head>

<body>
    <x-validation-errors class="mb-4" />
    <div id="register" class="form-container">
        <form method="POST" autocomplete="on" action="{{ url('/update_users', $users->id) }}"
            enctype="multipart/form-data">
            @csrf

            <div class="logo">
                <img src="/images/sda.png" class="sda_logo">
            </div>
            <h2 class="form-title">Update User</h2>

            <div class="row mb-3 form-floating">
                <div class="col-md-6">
                    <input id="name" name="name" value="{{ $users->name }}" type="text" required autofocus
                        class="form-control" placeholder=" ">
                    <label for="name">Names</label>
                </div>
                <div class="col-md-6">
                    <input id="email" name="email" value="{{ $users->email }}" type="text" class="form-control"
                        placeholder=" ">
                    <label for="email">Email Address</label>
                </div>
            </div>

            <div class="row mb-3 form-floating">
                <div class="col-md-6">
                    <input id="address" name="address" value="{{ $users->address }}" type="text" required
                        class="form-control" placeholder=" ">
                    <label for="address">Residence Address</label>
                </div>
                <div class="col-md-6">
                    <input id="phone" name="phone" value="{{ $users->phone }}" type="number" required
                        class="form-control" placeholder=" ">
                    <label for="phone">Mobile Number</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 col-sm-6">
                    <label class="textcolor" for="date">Date Of Birth</label>
                    <input id="date" name="birthday" value="{{ $users->birthday }}" type="date"
                        step="1" required class="form-control" placeholder=" ">
                </div>
            
                <div class="col-md-6 col-sm-6">
                    <label class="textcolor" for="gender">Gender</label>
                    <select id="gender" name="gender" required class="form-select" placeholder=" ">
                        <option value="" disabled {{ !$users->gender ? 'selected' : '' }}>Gender</option>
                        <option value="Male" {{ $users->gender == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ $users->gender == 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
            </div>   
            

            <button type="submit" value="Sign up" name="submit" class="submitbtn"><i
                    class="fa-solid fa-pen-to-square"></i>&nbsp;Update User</button>

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
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted1 d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                University
                SDA Church 2024</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-white">
                Computer Science Dept
                <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank" class="text-white">
                    Computer Systems Engineering
                </a> from University Of Zambia
            </span>
        </div>
    </footer>
    </div>
    </div>

    <script src="/images/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
