<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager" />
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/addmember.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.5.2-web/css/all.min.css') }}" type="text/css">
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
            top: -25%;
            transform: translateY(-100%);
            font-size: 0.80rem;
            color: #04AA6D;
            background-color: white;
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
    <!-- Session timeout warning -->
    <div class="alert alert-warning alert-dismissible session-warning" role="alert">
        <strong>Session Warning:</strong> Your session will expire soon. Please save your work.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>

    <div class="container bg-white p-4 rounded shadow mt-2">
        <!-- Display validation errors -->
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Please fix the following errors:</strong>
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        
        <!-- Display success message -->
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle"></i> {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <form method="POST" action="{{ url('/add_members') }}" enctype="multipart/form-data" id="registrationForm">
            @csrf

            <div class="text-center mb-4">
                <img src="{{ asset('images/sda.png') }}" class="sda_logo mb-3" alt="Logo" style="width: 55px;">
                <h2 class="text-primary">Registration</h2>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="form-floating">
                        <input id="fname" name="fname" type="text" required autofocus 
                               class="form-control @error('fname') is-invalid @enderror" 
                               placeholder=" " value="{{ old('fname') }}">
                        <label for="fname">First Name</label>
                        @error('fname')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input id="mname" name="mname" type="text" 
                               class="form-control @error('mname') is-invalid @enderror" 
                               placeholder=" " value="{{ old('mname') }}">
                        <label for="mname">Middle Name</label>
                        @error('mname')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="form-floating">
                        <input id="lname" name="lname" type="text" required 
                               class="form-control @error('lname') is-invalid @enderror" 
                               placeholder=" " value="{{ old('lname') }}">
                        <label for="lname">Last Name</label>
                        @error('lname')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input id="mobile" name="mobile" type="tel" required 
                               class="form-control @error('mobile') is-invalid @enderror" 
                               placeholder=" " value="{{ old('mobile') }}">
                        <label for="mobile">Mobile Number</label>
                        @error('mobile')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                    <select id="ministry" name="ministry" required 
                            class="form-select @error('ministry') is-invalid @enderror">
                        <option value="" disabled {{ old('ministry') ? '' : 'selected' }}>Select Ministry</option>
                        <option value="None" {{ old('ministry') == 'None' ? 'selected' : '' }}>None</option>
                        <option value="Choir" {{ old('ministry') == 'Choir' ? 'selected' : '' }}>Choir</option>
                        <option value="Ushering" {{ old('ministry') == 'Ushering' ? 'selected' : '' }}>Ushering</option>
                        <option value="Prayer Band" {{ old('ministry') == 'Prayer Band' ? 'selected' : '' }}>Prayer Band</option>
                        <option value="Technical" {{ old('ministry') == 'Technical' ? 'selected' : '' }}>Technical</option>
                        <option value="Prayer Warrior" {{ old('ministry') == 'Prayer Warrior' ? 'selected' : '' }}>Prayer Warrior</option>
                    </select>
                    @error('ministry')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <select id="registeras" name="registeras" required 
                            class="form-select @error('registeras') is-invalid @enderror">
                        <option value="" disabled {{ old('registeras') ? '' : 'selected' }}>Register As</option>
                        <option value="Visitor" {{ old('registeras') == 'Visitor' ? 'selected' : '' }}>Visitor</option>
                        <option value="Member" {{ old('registeras') == 'Member' ? 'selected' : '' }}>Member</option>
                    </select>
                    @error('registeras')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <div class="form-floating">
                        <input id="address" name="address" type="text" required autocomplete="address" 
                               class="form-control @error('address') is-invalid @enderror" 
                               placeholder=" " value="{{ old('address') }}">
                        <label for="address">Address</label>
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="form-floating">
                        <input id="occupation" name="occupation" type="text" required 
                               class="form-control @error('occupation') is-invalid @enderror" 
                               placeholder=" " value="{{ old('occupation') }}">
                        <label for="occupation">Occupation</label>
                        @error('occupation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input id="email" name="email" type="email" required 
                               class="form-control @error('email') is-invalid @enderror" 
                               placeholder=" " value="{{ old('email') }}">
                        <label for="email">Email Address</label>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label class="textcolor form-label fw-bold">Upload Baptism Certificate</label>
                    <div class="file-input-wrapper">
                        <input id="document" name="document" type="file" required 
                               accept=".pdf,.doc,.docx,.jpg,.jpeg,.png"
                               class="@error('document') is-invalid @enderror">
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

                <div class="col-md-6">
                    <label class="textcolor form-label fw-bold" for="birthday">Date Of Birth</label>
                    <input id="birthday" type="date" name="birthday" required 
                           class="form-control @error('birthday') is-invalid @enderror"
                           value="{{ old('birthday') }}">
                    @error('birthday')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                    <select id="marital" name="marital" required 
                            class="form-select @error('marital') is-invalid @enderror">
                        <option value="" disabled {{ old('marital') ? '' : 'selected' }}>Marital Status</option>
                        <option value="Single" {{ old('marital') == 'Single' ? 'selected' : '' }}>Single</option>
                        <option value="Married" {{ old('marital') == 'Married' ? 'selected' : '' }}>Married</option>
                        <option value="Divorced" {{ old('marital') == 'Divorced' ? 'selected' : '' }}>Divorced</option>
                        <option value="Widowed" {{ old('marital') == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                    </select>
                    @error('marital')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <select id="gender" name="gender" required 
                            class="form-select @error('gender') is-invalid @enderror">
                        <option value="" disabled {{ old('gender') ? '' : 'selected' }}>Select Gender</option>
                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                    @error('gender')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12">
                    <label class="textcolor form-label fw-bold" for="registrationdate">Date Of Registration</label>
                    <input id="registrationdate" type="datetime-local" name="registrationdate" required 
                           class="form-control @error('registrationdate') is-invalid @enderror"
                           value="{{ old('registrationdate') }}">
                    @error('registrationdate')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-success w-100 py-2" id="submitBtn">
                <i class="fa-solid fa-user-plus"></i>&nbsp;Add Member
            </button>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="terms" id="terms" required>
                        <label class="form-check-label" for="terms">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' =>
                                    '<a target="_blank" href="' .
                                    route('terms.show') .
                                    '" class="text-decoration-none">terms of service</a>',
                                'privacy_policy' =>
                                    '<a target="_blank" href="' .
                                    route('policy.show') .
                                    '" class="text-decoration-none">privacy policy</a>',
                            ]) !!}
                        </label>
                    </div>
                </div>
            @endif
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
    <script>
        // CSRF Token setup for AJAX requests
        document.addEventListener('DOMContentLoaded', function() {
            const csrfToken = document.querySelector('meta[name="csrf-token"]');
            if (csrfToken) {
                window.Laravel = {
                    csrfToken: csrfToken.getAttribute('content')
                };
            }
        });

        // Session timeout warning (25 minutes for 30-minute session)
        let sessionWarningTimer;
        let sessionTimeout = 25 * 60 * 1000; // 25 minutes in milliseconds

        function showSessionWarning() {
            document.querySelector('.session-warning').style.display = 'block';
        }

        function resetSessionTimer() {
            clearTimeout(sessionWarningTimer);
            sessionWarningTimer = setTimeout(showSessionWarning, sessionTimeout);
            document.querySelector('.session-warning').style.display = 'none';
        }

        // Reset timer on user activity
        ['click', 'keypress', 'scroll', 'mousemove'].forEach(event => {
            document.addEventListener(event, resetSessionTimer, true);
        });

        // Initial timer setup
        resetSessionTimer();

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
                    display.classList.remove('has-file');
                    fileName.style.display = 'none';
                    return;
                }
                
                // Check file type
                const allowedTypes = ['pdf', 'doc', 'docx', 'jpg', 'jpeg', 'png'];
                const fileExtension = file.name.split('.').pop().toLowerCase();
                
                if (!allowedTypes.includes(fileExtension)) {
                    alert('Invalid file type. Please upload PDF, DOC, DOCX, JPG, JPEG, or PNG files only.');
                    e.target.value = '';
                    display.classList.remove('has-file');
                    fileName.style.display = 'none';
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

        // Form submission handling with double-submit prevention
        let isSubmitting = false;
        
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            if (isSubmitting) {
                e.preventDefault();
                return false;
            }

            const fileInput = document.getElementById('document');
            
            if (!fileInput.files.length) {
                e.preventDefault();
                alert('Please select a baptism certificate file to upload.');
                return false;
            }

            // Validate required fields
            const requiredFields = this.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    isValid = false;
                } else {
                    field.classList.remove('is-invalid');
                }
            });

            if (!isValid) {
                e.preventDefault();
                alert('Please fill in all required fields.');
                return false;
            }
            
            // Show loading state
            isSubmitting = true;
            const submitBtn = document.getElementById('submitBtn');
            const originalText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i>&nbsp;Adding Member...';
            
            // Re-enable button after 15 seconds (failsafe for network issues)
            setTimeout(() => {
                if (isSubmitting) {
                    isSubmitting = false;
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;
                }
            }, 15000);
        });

        // Re-enable form submission when page becomes visible again (handles back button)
        document.addEventListener('visibilitychange', function() {
            if (!document.hidden) {
                isSubmitting = false;
                const submitBtn = document.getElementById('submitBtn');
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="fa-solid fa-user-plus"></i>&nbsp;Add Member';
            }
        });

        // Set current datetime for registration date if not already set
        document.addEventListener('DOMContentLoaded', function() {
            const registrationDateInput = document.getElementById('registrationdate');
            if (!registrationDateInput.value) {
                const now = new Date();
                const localDateTime = new Date(now.getTime() - now.getTimezoneOffset() * 60000).toISOString().slice(0, 16);
                registrationDateInput.value = localDateTime;
            }
        });

        // Auto-dismiss alerts after 5 seconds
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                if (alert.classList.contains('alert-success')) {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                }
            });
        }, 5000);
    </script>
</body>

</html>