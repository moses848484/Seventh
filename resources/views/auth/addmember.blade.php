<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager" />
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
    </style>
</head>

<body>
    <div class="container bg-white p-4 rounded shadow mt-2">
        <!-- Display validation errors -->
        <div id="error-messages"></div>
        
        <!-- Display success message -->
        <div id="success-message"></div>

        <form method="POST" action="/add_members" enctype="multipart/form-data" id="registrationForm">
            <input type="hidden" name="_token" value="csrf_token_placeholder">

            <div class="text-center mb-4">
                <img src="/images/sda.png" class="sda_logo mb-3" alt="Logo" style="width: 55px;">
                <h2 class="text-primary">Registration</h2>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="form-floating">
                        <input id="fname" name="fname" type="text" required autofocus class="form-control" placeholder=" ">
                        <label for="fname">First Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input id="mname" name="mname" type="text" class="form-control" placeholder=" ">
                        <label for="mname">Middle Name</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="form-floating">
                        <input id="lname" name="lname" type="text" required class="form-control" placeholder=" ">
                        <label for="lname">Last Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input id="mobile" name="mobile" type="tel" required class="form-control" placeholder=" ">
                        <label for="mobile">Mobile Number</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                    <select id="ministry" name="ministry" required class="form-select">
                        <option value="" disabled selected>Select Ministry</option>
                        <option value="None">None</option>
                        <option value="Choir">Choir</option>
                        <option value="Ushering">Ushering</option>
                        <option value="Prayer Band">Prayer Band</option>
                        <option value="Technical">Technical</option>
                        <option value="Prayer Warrior">Prayer Warrior</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select id="registeras" name="registeras" required class="form-select">
                        <option value="" disabled selected>Register As</option>
                        <option value="Visitor">Visitor</option>
                        <option value="Member">Member</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <div class="form-floating">
                        <input id="address" name="address" type="text" required autocomplete="address" class="form-control" placeholder=" ">
                        <label for="address">Address</label>
                    </div>
                </div>
            </div>

            <div id="map"></div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="form-floating">
                        <input id="occupation" name="occupation" type="text" required class="form-control" placeholder=" ">
                        <label for="occupation">Occupation</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input id="email" name="email" type="email" required class="form-control" placeholder=" ">
                        <label for="email">Email Address</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label class="textcolor form-label fw-bold">Upload Baptism Certificate</label>
                    <div class="file-input-wrapper">
                        <input id="document" name="document" type="file" required accept=".pdf,.doc,.docx,.jpg,.jpeg,.png">
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
                </div>

                <div class="col-md-6">
                    <label class="textcolor form-label fw-bold" for="birthday">Date Of Birth</label>
                    <input id="birthday" type="date" name="birthday" required class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                    <select id="marital" name="marital" required class="form-select">
                        <option value="" disabled selected>Marital Status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Widowed">Widowed</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select id="gender" name="gender" required class="form-select">
                        <option value="" disabled selected>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12">
                    <label class="textcolor form-label fw-bold" for="registrationdate">Date Of Registration</label>
                    <input id="registrationdate" type="datetime-local" name="registrationdate" required class="form-control">
                </div>
            </div>

            <button type="submit" class="btn btn-success w-100 py-2">
                <i class="fa-solid fa-user-plus"></i>&nbsp;Add Member
            </button>
        </form>
    </div>

    <footer class="footer mt-5 py-3">
        <div class="container">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">
                    Copyright © University SDA Church 2024
                </span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                    Computer Science Dept - Computer Systems Engineering from University Of Zambia
                </span>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGq_U4H3gTYCoglVeSGbYo8NZkmMWn7kc&libraries=places"></script>
    
    <script>
        // File upload handling
        document.getElementById('document').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const display = document.querySelector('.file-input-display');
            const fileName = document.getElementById('file-name');
            
            if (file) {
                // Check file size (2MB = 2 * 1024 * 1024 bytes)
                if (file.size > 2 * 1024 * 1024) {
                    alert('File size exceeds 2MB. Please choose a smaller file.');
                    e.target.value = '';
                    return;
                }
                
                // Check file type
                const allowedTypes = ['.pdf', '.doc', '.docx', '.jpg', '.jpeg', '.png'];
                const fileExtension = '.' + file.name.split('.').pop().toLowerCase();
                
                if (!allowedTypes.includes(fileExtension)) {
                    alert('Invalid file type. Please upload PDF, DOC, DOCX, JPG, JPEG, or PNG files only.');
                    e.target.value = '';
                    return;
                }
                
                display.classList.add('has-file');
                fileName.textContent = file.name;
                fileName.style.display = 'block';
            } else {
                display.classList.remove('has-file');
                fileName.style.display = 'none';
            }
        });

        // Form submission handling
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            const fileInput = document.getElementById('document');
            
            if (!fileInput.files.length) {
                e.preventDefault();
                alert('Please select a baptism certificate file to upload.');
                return false;
            }
            
            // Show loading state
            const submitBtn = e.target.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i>&nbsp;Adding Member...';
            
            // Re-enable button after 10 seconds (failsafe)
            setTimeout(() => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
            }, 10000);
        });

        // Google Maps functionality
        let map;
        let marker;

        function initMap() {
            const defaultLocation = { lat: -15.3875, lng: 28.3228 }; // Lusaka, Zambia
            
            map = new google.maps.Map(document.getElementById("map"), {
                center: defaultLocation,
                zoom: 12,
            });

            marker = new google.maps.Marker({
                position: defaultLocation,
                map: map,
                draggable: true
            });

            const input = document.getElementById('address');
            const autocomplete = new google.maps.places.Autocomplete(input);

            autocomplete.bindTo('bounds', map);

            autocomplete.addListener('place_changed', function() {
                const place = autocomplete.getPlace();
                if (place.geometry) {
                    map.setCenter(place.geometry.location);
                    marker.setPosition(place.geometry.location);
                    map.setZoom(15);
                }
            });

            marker.addListener('dragend', function(event) {
                const lat = event.latLng.lat();
                const lng = event.latLng.lng();
                
                const geocoder = new google.maps.Geocoder();
                geocoder.geocode({ location: { lat, lng } }, function(results, status) {
                    if (status === 'OK' && results[0]) {
                        input.value = results[0].formatted_address;
                    }
                });
            });
        }

        // Initialize map when page loads
        window.addEventListener('load', initMap);

        // Set current datetime for registration date
        document.addEventListener('DOMContentLoaded', function() {
            const now = new Date();
            const localDateTime = new Date(now.getTime() - now.getTimezoneOffset() * 60000).toISOString().slice(0, 16);
            document.getElementById('registrationdate').value = localDateTime;
        });
    </script>
</body>

</html>