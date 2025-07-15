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
        /* Map styles */
        #map {
            height: 400px;
            /* Set the desired height */
            width: 100%;
            /* Full width */
            margin: 20px 0;
            /* Margin for spacing */
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGq_U4H3gTYCoglVeSGbYo8NZkmMWn7kc&libraries=places">
    </script>
</head>

<body>
    <x-validation-errors class="mb-4" />
    <div id="register" class="container bg-white p-4 rounded shadow mt-2">
        <form method="POST" action="{{ url('/add_members') }}" enctype="multipart/form-data">
            @csrf

            <div class="text-center mb-4">
                <img src="/images/sda.png" class="sda_logo mb-3" alt="Logo" style="width: 55px;">
                <h2 class="text-primary">Registration</h2>
            </div>

            <div class="row mb-3 form-floating">
                <div class="col-md-6">
                    <input id="fname" name="fname" type="text" required autofocus class="form-control"
                        placeholder=" ">
                    <label for="fname">First Name</label>
                </div>
                <div class="col-md-6">
                    <input id="mname" name="mname" type="text" class="form-control" placeholder=" ">
                    <label for="mname">Middle Name</label>
                </div>
            </div>

            <div class="row mb-3 form-floating">
                <div class="col-md-6">
                    <input id="lname" name="lname" type="text" required class="form-control" placeholder=" ">
                    <label for="lname">Last Name</label>
                </div>
                
                <div class="col-md-6">
                    <input id="mobile" name="mobile" type="number" required class="form-control" placeholder=" ">
                    <label for="mobile">Mobile Number</label>
                </div>
            </div>

            <div class="row mb-3 form-floating">
                <div class="col-md-6 mb-3 mb-md-0"> <!-- Add mb-3 for mobile spacing -->
                    <select id="ministry" name="ministry" required class="form-select" placeholder=" ">
                        <option value="" disabled selected>Ministry</option>
                        <option value="None">None</option>
                        <option value="Choir">Choir</option>
                        <option value="Ushering">Ushering</option>
                        <option value="Prayer Band">Prayer Band</option>
                        <option value="Technical">Technical</option>
                        <option value="Prayer Warrior">Prayer Warrior</option>
                    </select>
                </div>
            
                <div class="col-md-6">
                    <select id="registeras" name="registeras" required class="form-select" placeholder=" ">
                        <option value="" disabled selected>Register As</option>
                        <option value="None">None</option>
                        <option value="Visitor">Visitor</option>
                        <option value="Member">Member</option>
                    </select>
                </div>
            </div>
            

            <div class="row mb-3 form-floating">
                <div class="col-md-12">
                    <input id="address" name="address" type="text" required autocomplete="address"
                        class="form-control" placeholder=" ">
                    <label for="address">Address</label>
                </div>
            </div>

            <div id="map"></div>

            <div class="row mb-3 form-floating">
                <div class="col-md-6">
                    <input id="occupation" name="occupation" type="text" required autofocus class="form-control"
                        placeholder=" ">
                    <label for="occupation">Occupation</label>
                </div>
                <div class="col-md-6">
                    <input id="email" name="email" type="text" class="form-control" placeholder=" ">
                    <label for="email">Email Address</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label class="textcolor" for="document" class="form-label">Upload Baptism Certificate</label>
                    <input id="document" name="document" type="file" required class="form-control">
                </div>

                <div class="col-md-6">
                    <label class="textcolor" for="date">Date Of Birth</label>
                    <input id="date" type="date" step="1" name="birthday" required
                        class="form-control" placeholder=" ">
                </div>
            </div>

            <div class="row mb-3 form-floating">
                <div class="col-md-6 mb-3 mb-md-0"> <!-- Add mb-3 for mobile spacing -->
                    <select id="marital" name="marital" required class="form-select" placeholder=" " >
                        <option value="" disabled selected>Marital Status</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <select id="gender" name="gender" required class="form-select" placeholder=" ">
                        <option value="Select Gender" disabled selected>Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            

            <div class="row mb-3">
                <div class="col-md-12">
                        <label class="textcolor" for="registrationdate">Date Of Registration</label>
                        <input id="date" type="datetime-local" step="1" name="registrationdate" required
                            class="form-control" placeholder=" ">
                    </div>
                </div>
       
            

            <button type="submit" value="Sign up" name="submit" class="btn btn-success w-100">
                <i class="fa-solid fa-user-plus"></i>&nbsp;Register
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
                <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank"
                    class="text-white">
                    Computer Systems Engineering
                </a> from University Of Zambia
            </span>
        </div>
    </footer>

    <script>
        let map;
        let marker;

        function initMap() {
            const defaultLocation = {
                lat: -34.397,
                lng: 150.644
            }; // Default location (update as needed)
            map = new google.maps.Map(document.getElementById("map"), {
                center: defaultLocation,
                zoom: 15,
            });

            marker = new google.maps.Marker({
                position: defaultLocation,
                map: map,
                draggable: true // Allow the marker to be draggable
            });

            const input = document.getElementById('address');
            const autocomplete = new google.maps.places.Autocomplete(input);

            autocomplete.bindTo('bounds', map);

            autocomplete.addListener('place_changed', function() {
                const place = autocomplete.getPlace();
                if (place.geometry) {
                    map.setCenter(place.geometry.location);
                    marker.setPosition(place.geometry.location);
                }
            });

            marker.addListener('dragend', function(event) {
                const lat = event.latLng.lat();
                const lng = event.latLng.lng();
                // Get the address from lat/lng (optional, you can implement this if needed)
                const geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    location: {
                        lat,
                        lng
                    }
                }, function(results, status) {
                    if (status === google.maps.GeocoderStatus.OK && results[0]) {
                        input.value = results[0].formatted_address;
                    }
                });
            });
        }

        google.maps.event.addDomListener(window, 'load', initMap);
    </script>

    <script src="/images/script.js"></script>

</body>

</html>
