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
    <title>Registration</title>
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
    <div id="register" class="container bg-white p-4 rounded shadow mt-2">
        <form method="POST" action="{{ url('/add_strategicplan') }}" enctype="multipart/form-data">
            @csrf

            <div class="text-center mb-4">
                <img src="/images/sda.png" class="sda_logo mb-3" alt="Logo" style="width: 55px;">
                <h2 class="text-primary">Strategic Plan</h2>
            </div>

            <div class="row mb-3 form-floating">
                <div class="col-md-6">
                    <input id="no" name="no" type="number" autofocus class="form-control"
                        placeholder=" ">
                    <label for="status_color">NO</label>
                </div>
                <div class="col-md-6">
                    <input id="strategic_areas" name="strategic_areas" type="text" class="form-control"
                        placeholder=" ">
                    <label for="strategic_areas">Strategic Area</label>
                </div>
            </div>

            <div class="row mb-3 form-floating">
                <div class="col-md-6">
                    <input id="strategic_theme" name="strategic_theme" type="text" required class="form-control"
                        placeholder=" ">
                    <label for="strategic_theme">Strategic Theme</label>
                </div>

                <div class="col-md-6">
                    <input id="strategic_objectives" name="strategic_objectives" type="text" required
                        class="form-control" placeholder=" ">
                    <label for="strategic_objectives">Strategic Objectives</label>
                </div>
            </div>

            <div class="row mb-3 form-floating">
                <div class="col-md-12">
                    <input id="status_color" name="status_color" type="text" required autofocus class="form-control"
                        placeholder=" ">
                    <label for="status_color">Status Color</label>
                </div>
            </div>

            <div class="row mb-3 form-floating">
                <div class="col-md-6">
                    <input id="kpis" name="kpis" type="text" required class="form-control" placeholder=" ">
                    <label for="kpis">kpis</label>
                </div>

                <div class="col-md-6">
                    <input id="initiatives" name="initiatives" type="text" required class="form-control"
                        placeholder=" ">
                    <label for="initiatives">Initiatives/Activities</label>
                </div>
            </div>

            <div class="row mb-3 form-floating">
                <div class="col-md-6">
                    <input id="total_target" name="total_target" type="number" required autofocus class="form-control"
                        placeholder=" ">
                    <label for="total_target">Total Quoter</label>
                </div>
                <div class="col-md-6">
                    <input id="q1" name="q1" type="number" class="form-control" placeholder=" ">
                    <label for="q1">Q1</label>
                </div>
            </div>

            <div class="row mb-3 form-floating">
                <div class="col-md-6">
                    <input id="q2" name="q2" type="number" required autofocus class="form-control"
                        placeholder=" ">
                    <label for="q2">Q2</label>
                </div>
                <div class="col-md-6">
                    <input id="q3" name="q3" type="number" class="form-control" placeholder=" ">
                    <label for="q3">Q3</label>
                </div>
            </div>

            <div class="row mb-3 form-floating">
                <div class="col-md-6">
                    <input id="q4" name="q4" type="number" required autofocus class="form-control"
                        placeholder=" ">
                    <label for="q4">Q4</label>
                </div>
                
                <div class="col-md-6">
                    <input id="budget_per_initiative" name="budget_per_initiative" type="number"
                        class="form-control" placeholder=" ">
                    <label for="budget_per_initiative">Budget Per Initiative</label>
                </div>
            </div>


            <div class="row mb-3 form-floating">
                <div class="col-md-6">
                    <input id="explanation_of_variation" name="explanation_of_variation" type="text" required
                        autofocus class="form-control" placeholder=" ">
                    <label for="explanation_of_variation">Explanation Of Variation</label>
                </div>

                <div class="col-md-6">
                    <input id="resource_persource" name="resource_persource" type="text" class="form-control"
                        placeholder=" ">
                    <label for="resource_persource">Resource Persource</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="textcolor" for="start_date">Start Date</label>
                    <input id="start_date" type="datetime-local" step="1" name="start_date" required
                        class="form-control" placeholder=" ">
                </div>

                <div class="col-md-6">
                    <label class="textcolor" for="end_date">End Date</label>
                    <input id="end_date" type="datetime-local" step="1" name="end_date" required
                        class="form-control" placeholder=" ">
            </div>
        </div>

            <button type="submit" value="Sign up" name="submit" class="btn btn-success w-100">
                <i class="fa-regular fa-clipboard"></i>&nbsp;Add Strategic Plan
            </button>

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
                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">terms of service</a>',
                                    'privacy_policy' =>
                                        '<a target="_blank" href="' .
                                        route('policy.show') .
                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">privacy policy</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif
        </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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

    <script src="/images/script.js"></script>

</body>

</html>
