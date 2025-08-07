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

        /* Body styles */
        body {
            background-color: #f8f9fa;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        /* Form container styles */
        .form-container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background: white;
            border-radius: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* Logo styles */
        .logo {
            text-align: center;
            margin-bottom: 1rem;
        }

        .sda_logo {
            width: 55px;
            height: auto;
        }

        .form-title {
            text-align: center;
            color: #e4af00;
            margin-bottom: 2rem;
            font-weight: 600;
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

        /* Button styles */
        .submitbtn {
            background-color: #04AA6D;
            border: none;
            color: white;
            padding: 0.75rem 2rem;
            font-size: 1rem;
            border-radius: 0.375rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
            margin-top: 1rem;
        }

        .submitbtn:hover {
            background-color: #038a5a;
        }

        .submitbtn:disabled {
            background-color: #6c757d;
            cursor: not-allowed;
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

        /* Current document display */
        .current-document {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 0.375rem;
            padding: 1rem;
            text-align: center;
        }

        .current-document a {
            color: #04AA6D;
            text-decoration: none;
            font-weight: 500;
        }

        .current-document a:hover {
            color: #038a5a;
            text-decoration: underline;
        }

        /* Footer styles */
        .footer {
            background-color: #04AA6D;
            color: white;
            padding: 20px 0;
            margin-top: 50px;
            text-align: center;
        }

        .text-muted1 {
            color: white !important;
        }

        .footer a {
            color: white;
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
            .form-container {
                margin: 1rem;
                padding: 1.5rem;
            }

            .form-floating input {
                padding: 0.8rem 0.5rem;
                padding-top: 1.2rem;
            }

            .form-floating label {
                font-size: 0.85rem;
                left: 2%;
            }
        }

        @media (max-width: 576px) {
            .form-container {
                padding: 1rem;
            }

            .form-floating input {
                padding-top: 1.5rem;
            }

            .form-floating label {
                font-size: 0.9rem;
            }
        }

        .fa-pen-to-square {
            color: white;
        }

        /* Fix for validation errors component */
        .validation-errors {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
            padding: 0.75rem 1.25rem;
            border-radius: 0.375rem;
            margin-bottom: 1.5rem;
        }
    </style>
</head>

<body>
    <!-- Session timeout warning -->
    <div class="alert alert-warning alert-dismissible session-warning" role="alert">
        <strong>Session Warning:</strong> Your session will expire soon. Please save your work.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>

    <!-- Validation Errors Display -->
    <x-validation-errors class="mb-4" />

    <div class="form-container">
        <form method="POST" action="{{ url('/update_registered', $data->id) }}" enctype="multipart/form-data" id="updateForm">
            @csrf

            <div class="logo">
                <img src="{{ asset('images/sda.png') }}" class="sda_logo" alt="SDA Logo">
            </div>
            <h2 class="form-title">Update Member</h2>

            <div class="row mb-3">
                <div class="col-md-6 form-floating mb-3 mb-md-0">
                    <input id="fname" name="fname" value="{{ $data->fname }}" type="text" required class="form-control @error('fname') is-invalid @enderror" placeholder=" ">
                    <label for="fname">First Name</label>
                    @error('fname')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 form-floating">
                    <input id="mname" name="mname" value="{{ $data->mname }}" type="text" class="form-control @error('mname') is-invalid @enderror" placeholder=" ">
                    <label for="mname">Middle Name</label>
                    @error('mname')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 form-floating mb-3 mb-md-0">
                    <input id="lname" name="lname" value="{{ $data->lname }}" type="text" required class="form-control @error('lname') is-invalid @enderror" placeholder=" ">
                    <label for="lname">Last Name</label>
                    @error('lname')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 form-floating">
                    <input id="mobile" name="mobile" value="{{ $data->mobile }}" type="tel" required class="form-control @error('mobile') is-invalid @enderror" placeholder=" ">
                    <label for="mobile">Mobile Number</label>
                    @error('mobile')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label class="textcolor form-label fw-bold">Ministry</label>
                    <select id="ministry" name="ministry" class="form-select @error('ministry') is-invalid @enderror" required>
                        @foreach (['None', 'Choir', 'Ushering', 'Prayer Band', 'Technical', 'Prayer Warrior'] as $option)
                            <option value="{{ $option }}" {{ $data->ministry == $option ? 'selected' : '' }}>{{ $option }}</option>
                        @endforeach
                    </select>
                    @error('ministry')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label class="textcolor form-label fw-bold">Register As</label>
                    <select id="registeras" name="registeras" class="form-select @error('registeras') is-invalid @enderror" required>
                        @foreach (['None', 'Visitor', 'Member'] as $option)
                            <option value="{{ $option }}" {{ $data->registeras == $option ? 'selected' : '' }}>{{ $option }}</option>
                        @endforeach
                    </select>
                    @error('registeras')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12 form-floating">
                    <input id="address" name="address" type="text" value="{{ $data->address }}" required class="form-control @error('address') is-invalid @enderror" placeholder=" ">
                    <label for="address">Address</label>
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 form-floating mb-3 mb-md-0">
                    <input id="occupation" name="occupation" type="text" value="{{ $data->occupation }}" required class="form-control @error('occupation') is-invalid @enderror" placeholder=" ">
                    <label for="occupation">Occupation</label>
                    @error('occupation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 form-floating">
                    <input id="email" name="email" type="email" value="{{ $data->email }}" class="form-control @error('email') is-invalid @enderror" placeholder=" ">
                    <label for="email">Email Address</label>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label class="textcolor form-label fw-bold">Gender</label>
                    <select id="gender" name="gender" class="form-select @error('gender') is-invalid @enderror" required>
                        <option value="" disabled {{ !$data->gender ? 'selected' : '' }}>Select Gender</option>
                        @foreach (['Male', 'Female'] as $gender)
                            <option value="{{ $gender }}" {{ $data->gender == $gender ? 'selected' : '' }}>{{ $gender }}</option>
                        @endforeach
                    </select>
                    @error('gender')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label class="textcolor form-label fw-bold">Marital Status</label>
                    <select id="marital" name="marital" class="form-select @error('marital') is-invalid @enderror" required>
                        <option value="" disabled {{ !$data->marital ? 'selected' : '' }}>Select Marital Status</option>
                        @foreach (['Single', 'Married', 'Divorced', 'Widowed'] as $status)
                            <option value="{{ $status }}" {{ $data->marital == $status ? 'selected' : '' }}>{{ $status }}</option>
                        @endforeach
                    </select>
                    @error('marital')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label class="textcolor form-label fw-bold">Change Baptism Certificate</label>
                    <div class="file-input-wrapper">
                        <input id="document" name="document" type="file" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" 
                               class="@error('document') is-invalid @enderror" onchange="updateFileName(this)">
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
                        <div class="current-document">
                            <div class="d-flex flex-column flex-sm-row align-items-center justify-content-center gap-2">
                                <a href="{{ asset('baptism_certificates/' . $data->document) }}" class="btn btn-outline-success btn-sm" target="_blank">
                                    <i class="fas fa-eye me-1"></i> View Certificate
                                </a>
                                <form method="POST" action="{{ url('/delete_certificate/' . $data->id) }}" 
                                      class="d-inline" onsubmit="return confirm('Delete this certificate?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                        <i class="fas fa-trash me-1"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-6 mb-3">
                        <label class="textcolor form-label fw-bold">Current Baptism Certificate</label>
                        <div class="current-document">
                            <p class="text-muted mb-0">No certificate uploaded</p>
                        </div>
                    </div>
                @endif
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3">
                    <label class="textcolor form-label fw-bold">Date of Birth</label>
                    <input id="birthday" name="birthday" type="date" value="{{ $data->birthday }}" 
                           class="form-control @error('birthday') is-invalid @enderror" required>
                    @error('birthday')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label class="textcolor form-label fw-bold">Date of Registration Update</label>
                    <input id="registrationdate" name="registrationdate" type="datetime-local" 
                           value="{{ $data->registrationdate }}" class="form-control @error('registrationdate') is-invalid @enderror" required>
                    @error('registrationdate')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="submitbtn" id="submitBtn">
                <i class="fa-solid fa-pen-to-square"></i>&nbsp;Update Member
            </button>

            <!-- Success Message Display -->
            @if (session('message'))
                <div class="alert alert-success mt-3">
                    {{ session('message') }}
                    @if (session('document'))
                        <div class="mt-2">
                            <a href="{{ asset('baptism_certificates/' . session('document')) }}" target="_blank" class="text-decoration-none">
                                <i class="fas fa-external-link-alt me-1"></i>View Uploaded Document
                            </a>
                        </div>
                    @endif
                </div>
            @endif

            <!-- Terms and Conditions -->
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="terms" id="terms" required>
                        <label class="form-check-label" for="terms">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="text-decoration-none">terms of service</a>',
                                'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="text-decoration-none">privacy policy</a>',
                            ]) !!}
                        </label>
                    </div>
                </div>
            @endif
        </form>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted1 d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                    University SDA Church 2024</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-white">
                    Computer Science Dept
                    <a href="https://www.unza.zm" target="_blank" class="text-white">
                        Computer Systems Engineering
                    </a> from University Of Zambia
                </span>
            </div>
        </div>
    </footer>

    <script src="{{ asset('images/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
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
        function updateFileName(input) {
            const file = input.files[0];
            const display = document.querySelector('.file-input-display');
            const fileName = document.getElementById('file-name');
            const errorDiv = input.parentElement.querySelector('.text-danger');

            if (file) {
                // Check file size (2MB = 2 * 1024 * 1024 bytes)
                if (file.size > 2 * 1024 * 1024) {
                    if (errorDiv) {
                        errorDiv.textContent = 'File size exceeds 2MB. Please choose a smaller file.';
                        errorDiv.classList.remove('d-none');
                    } else {
                        alert('File size exceeds 2MB. Please choose a smaller file.');
                    }
                    input.value = '';
                    display.classList.remove('has-file');
                    fileName.style.display = 'none';
                    return;
                }

                // Check file type
                const allowedTypes = ['pdf', 'doc', 'docx', 'jpg', 'jpeg', 'png'];
                const fileExtension = file.name.split('.').pop().toLowerCase();

                if (!allowedTypes.includes(fileExtension)) {
                    if (errorDiv) {
                        errorDiv.textContent = 'Invalid file type. Please upload PDF, DOC, DOCX, JPG, JPEG, or PNG files only.';
                        errorDiv.classList.remove('d-none');
                    } else {
                        alert('Invalid file type. Please upload PDF, DOC, DOCX, JPG, JPEG, or PNG files only.');
                    }
                    input.value = '';
                    display.classList.remove('has-file');
                    fileName.style.display = 'none';
                    return;
                }

                // File is valid
                if (errorDiv) {
                    errorDiv.classList.add('d-none');
                }
                display.classList.add('has-file');
                fileName.textContent = "Selected: " + file.name;
                fileName.style.display = 'block';
            } else {
                display.classList.remove('has-file');
                fileName.style.display = 'none';
                if (errorDiv) {
                    errorDiv.classList.add('d-none');
                }
            }
        }getElementById('file-name');
            const errorDiv = document.getElementById('documentError');

            if (file) {
                // Check file size (2MB = 2 * 1024 * 1024 bytes)
                if (file.size > 2 * 1024 * 1024) {
                    errorDiv.textContent = 'File size exceeds 2MB. Please choose a smaller file.';
                    errorDiv.classList.remove('d-none');
                    input.value = '';
                    display.classList.remove('has-file');
                    fileName.style.display = 'none';
                    return;
                }

                // Check file type
                const allowedTypes = ['pdf', 'doc', 'docx', 'jpg', 'jpeg', 'png'];
                const fileExtension = file.name.split('.').pop().toLowerCase();

                if (!allowedTypes.includes(fileExtension)) {
                    errorDiv.textContent = 'Invalid file type. Please upload PDF, DOC, DOCX, JPG, JPEG, or PNG files only.';
                    errorDiv.classList.remove('d-none');
                    input.value = '';
                    display.classList.remove('has-file');
                    fileName.style.display = 'none';
                    return;
                }

                // File is valid
                errorDiv.classList.add('d-none');
                display.classList.add('has-file');
                fileName.textContent = "Selected: " + file.name;
                fileName.style.display = 'block';
            } else {
                display.classList.remove('has-file');
                fileName.style.display = 'none';
                errorDiv.classList.add('d-none');
            }
        }

        // Form submission handling
        let isSubmitting = false;

        document.getElementById('updateForm').addEventListener('submit', function (e) {
            if (isSubmitting) {
                e.preventDefault();
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
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i>&nbsp;Updating Member...';

            // Re-enable button after 15 seconds (failsafe)
            setTimeout(() => {
                if (isSubmitting) {
                    isSubmitting = false;
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;
                }
            }, 15000);
        });

        // Delete certificate function - removed as it's now handled by Laravel form
        // The delete functionality is now implemented with proper Laravel form and CSRF protection

        // Re-enable form submission when page becomes visible again
        document.addEventListener('visibilitychange', function () {
            if (!document.hidden) {
                isSubmitting = false;
                const submitBtn = document.getElementById('submitBtn');
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="fa-solid fa-pen-to-square"></i>&nbsp;Update Member';
            }
        });

        // Initialize datetime for registration update
        document.addEventListener('DOMContentLoaded', function () {
            const registrationDateInput = document.getElementById('registrationdate');
            if (!registrationDateInput.value) {
                const now = new Date();
                const localDateTime = new Date(now.getTime() - now.getTimezoneOffset() * 60000).toISOString().slice(0, 16);
                registrationDateInput.value = localDateTime;
            }
        });
    </script>
</body>

</html>