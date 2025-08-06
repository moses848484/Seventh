<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager" />
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
    <link rel="stylesheet" href="<?php echo asset('css/addmember.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/fontawesome-free-6.5.2-web/css/all.min.css'); ?>"
        type="text/css">
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
            padding: 0 5px;
        }

        /* Adjustments for input border */
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            color: #04AA6D;
        }

        .form-control:focus {
            border: 2px solid #04AA6D;
            box-shadow: 0 0 0 0.2rem rgba(4, 170, 109, 0.25);
            color: #04AA6D;
        }

        .form-select {
            color: #04AA6D;
            border: 1px solid #ced4da;
        }

        .form-select:focus {
            border: 2px solid #04AA6D;
            box-shadow: 0 0 0 0.2rem rgba(4, 170, 109, 0.25);
        }

        .text-primary {
            color: #e4af00 !important;
        }

        .textcolor {
            color: #04AA6D;
        }

        .btn-success {
            background-color: #04AA6D;
            border-color: #04AA6D;
        }

        .btn-success:hover {
            background-color: #038a5a;
            border-color: #038a5a;
        }

        /* File input styling */
        .file-input-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
            width: 100%;
        }

        .file-input-wrapper input[type=file] {
            position: absolute;
            left: -9999px;
        }

        .file-input-display {
            border: 2px dashed #04AA6D;
            border-radius: 0.375rem;
            padding: 1.5rem;
            text-align: center;
            background-color: #f8f9fa;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .file-input-display:hover {
            background-color: #e9ecef;
            border-color: #038a5a;
        }

        .file-input-display.has-file {
            border-color: #28a745;
            background-color: #d4edda;
        }

        .file-icon {
            font-size: 2rem;
            color: #04AA6D;
            margin-bottom: 0.5rem;
        }

        .file-text {
            color: #6c757d;
            font-size: 0.875rem;
        }

        .file-name {
            color: #28a745;
            font-weight: 500;
            margin-top: 0.5rem;
        }

        .alert {
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
        }

        /* Map styles */
        #map {
            height: 400px;
            width: 100%;
            margin: 20px 0;
            border-radius: 0.375rem;
            border: 1px solid #dee2e6;
        }

        /* Session timeout warning */
        .session-warning {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            display: none;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .form-floating input {
                padding: 0.8rem 0.5rem;
                padding-top: 1.2rem;
            }

            .form-floating label {
                font-size: 0.85rem;
                left: 2%;
            }

            .container {
                padding: 1.5rem;
            }

            #map {
                height: 300px;
            }
        }

        @media (max-width: 576px) {
            .container {
                padding: 1rem;
            }

            .form-floating input {
                padding-top: 1.5rem;
            }

            .form-floating label {
                font-size: 0.9rem;
            }
        }

        .fa-user-plus {
            color: white;
        }
    </style>

</head>

<body>
    <x-validation-errors class="mb-4" />

    <div id="register" class="form-container">
        <form method="POST" action="{{ url('/update_registered', $data->id) }}" enctype="multipart/form-data">
            @csrf

            <div class="logo">
                <img src="/images/sda.png" class="sda_logo">
            </div>
            <h2 class="form-title">Update Member</h2>

            <div class="row mb-3 form-floating">
                <div class="col-md-6">
                    <input id="fname" name="fname" value="{{ $data->fname }}" type="text" required class="form-control"
                        placeholder=" ">
                    <label for="fname">First Name</label>
                </div>
                <div class="col-md-6">
                    <input id="mname" name="mname" value="{{ $data->mname }}" type="text" class="form-control"
                        placeholder=" ">
                    <label for="mname">Middle Name</label>
                </div>
            </div>

            <div class="row mb-3 form-floating">
                <div class="col-md-6">
                    <input id="lname" name="lname" value="{{ $data->lname }}" type="text" required class="form-control"
                        placeholder=" ">
                    <label for="lname">Last Name</label>
                </div>
                <div class="col-md-6">
                    <input id="mobile" name="mobile" value="{{ $data->mobile }}" type="number" required
                        class="form-control" placeholder=" ">
                    <label for="mobile">Mobile Number</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label class="textcolor form-label fw-bold">Ministry</label>
                    <select id="ministry" name="ministry" class="form-select" required>
                        @foreach (['None', 'Choir', 'Ushering', 'Prayer Band', 'Technical', 'Prayer Warrior'] as $option)
                            <option value="{{ $option }}" {{ $data->ministry == $option ? 'selected' : '' }}>{{ $option }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="textcolor form-label fw-bold">Register As</label>
                    <select id="registeras" name="registeras" class="form-select" required>
                        @foreach (['None', 'Visitor', 'Member'] as $option)
                            <option value="{{ $option }}" {{ $data->registeras == $option ? 'selected' : '' }}>{{ $option }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mb-3 form-floating">
                <div class="col-md-12">
                    <input id="address" name="address" type="text" value="{{ $data->address }}" required
                        class="form-control" placeholder=" ">
                    <label for="address">Address</label>
                </div>
            </div>

            <div id="map"></div>

            <div class="row mb-3 form-floating">
                <div class="col-md-6">
                    <input id="occupation" name="occupation" type="text" value="{{ $data->occupation }}" required
                        class="form-control" placeholder=" ">
                    <label for="occupation">Occupation</label>
                </div>
                <div class="col-md-6">
                    <input id="email" name="email" type="email" value="{{ $data->email }}" class="form-control"
                        placeholder=" ">
                    <label for="email">Email Address</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label class="textcolor form-label fw-bold">Gender</label>
                    <select id="gender" name="gender" class="form-select" required>
                        <option disabled {{ !$data->gender ? 'selected' : '' }}>Select</option>
                        @foreach (['Male', 'Female'] as $gender)
                            <option value="{{ $gender }}" {{ $data->gender == $gender ? 'selected' : '' }}>{{ $gender }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="textcolor form-label fw-bold">Marital Status</label>
                    <select id="marital" name="marital" class="form-select" required>
                        <option disabled {{ !$data->marital ? 'selected' : '' }}>Select</option>
                        @foreach (['Single', 'Married', 'Divorced'] as $status)
                            <option value="{{ $status }}" {{ $data->marital == $status ? 'selected' : '' }}>{{ $status }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

           <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label class="textcolor form-label fw-bold">Change Baptism Certificate</label>
                    <div class="file-input-wrapper">
                        <input id="document" name="document" type="file" required
                            accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" class="@error('document') is-invalid @enderror">
                        <div class="file-input-display" onclick="document.getElementById('document').click();">
                            <div class="file-icon">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <div class="file-text">
                                Click to select file or drag and drop
                                <br>
                                <small>Supported: PDF, DOC, DOCX, JPG, JPEG, PNG (Max: 2MB)</small>
                            </div>
                            <div class="file-name" id="file-name" style="display: none;"></div>
                        </div>
                    </div>
                    @error('document')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>
                @if (!empty($data->document))
                     <div class="col-md-6 mb-3">
                    <label class="textcolor form-label fw-bold">Current Baptism Certificate</label>
                        <a href="{{ asset('baptism_certificates/' . $data->document) }}" class="form-control"
                            target="_blank">View Baptism Certificate</a>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
               <div class="col-md-6 mb-3">
                    <label class="textcolor form-label fw-bold">Date of Birth</label>
                    <input id="birthday" name="birthday" type="date" value="{{ $data->birthday }}" class="form-control"
                        required>
                </div>
               <div class="col-md-6 mb-3">
                    <label class="textcolor form-label fw-bold">Date of Registration Update</label>
                    <input id="registrationdate" name="registrationdate" type="datetime-local"
                        value="{{ $data->registrationdate }}" class="form-control" required>
                </div>
            </div>

            <button type="submit" class="submitbtn">
                <i class="fa-solid fa-pen-to-square"></i>&nbsp;Update Member
            </button>

            @if (session('message'))
                <div class="alert alert-success mt-3">
                    {{ session('message') }}
                    @if (session('document'))
                        <p><a href="{{ asset('Baptism Certificates/' . session('document')) }}" target="_blank">View Uploaded
                                Document</a></p>
                    @endif
                </div>
            @endif

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />
                                    <div class="ms-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">Terms of Service</a>',
                    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">Privacy Policy</a>',
                ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
            @endif
        </form>
    </div>
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

    <script src="/images/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    </script>
    <script>
        let map;
        let marker;

        function initMap() {
            const defaultAddress = "{{ $data->address }}"; // Existing address
            const geocoder = new google.maps.Geocoder();

            // Geocode the existing address to get lat/lng
            geocoder.geocode({
                address: defaultAddress
            }, (results, status) => {
                if (status === google.maps.GeocoderStatus.OK) {
                    const location = results[0].geometry.location;

                    map = new google.maps.Map(document.getElementById("map"), {
                        center: location,
                        zoom: 15,
                    });

                    marker = new google.maps.Marker({
                        position: location,
                        map: map,
                        draggable: true, // Allow marker dragging
                    });

                    const input = document.getElementById('address');
                    const autocomplete = new google.maps.places.Autocomplete(input);

                    autocomplete.addListener('place_changed', function () {
                        const place = autocomplete.getPlace();
                        if (place.geometry) {
                            map.setCenter(place.geometry.location);
                            marker.setPosition(place.geometry.location);
                        }
                    });

                    marker.addListener('dragend', function (event) {
                        const lat = event.latLng.lat();
                        const lng = event.latLng.lng();
                        // Get the address from lat/lng and update the input
                        geocoder.geocode({
                            location: {
                                lat,
                                lng
                            }
                        }, function (results, status) {
                            if (status === google.maps.GeocoderStatus.OK && results[0]) {
                                input.value = results[0].formatted_address;
                            }
                        });
                    });
                } else {
                    console.error("Geocode was not successful for the following reason: " + status);
                }
            });
        }

        google.maps.event.addDomListener(window, 'load', initMap);
    </script>
</body>

</html>