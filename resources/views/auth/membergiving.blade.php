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
    <title>Giving</title>
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
            transform: translateY(-50%);
            transition: all 0.2s ease-in-out;
            color: #04AA6D;
            pointer-events: none;
            background-color: transparent !important;
        }

        .form-floating input:focus+label,
        .form-floating input:not(:placeholder-shown)+label {
            top: -10%;
            transform: translateY(-100%);
            font-size: 15px !important;
            color: #04AA6D !important;
            width: auto !important;
            background-color: transparent !important;
        }

        /* Adjustments for input border */
        .form-control {
            border: 1px solid #ffffffff;
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

        .fa-dollar-sign {
            color: #ffffffff;
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

        <form method="POST" action="{{ url('/add_givings') }}" id="givingForm">
            @csrf

            <div class="text-center mb-4">
                <img src="{{ asset('images/sda.png') }}" class="sda_logo mb-3" alt="Logo" style="width: 55px;">
                <h2 class="text-primary">Giving</h2>
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
                        <label for="mobile">Mobile Money Number</label>
                        @error('mobile')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="form-floating">
                        <input id="amount" name="amount" type="number" required step="0.01" min="0"
                               class="form-control @error('amount') is-invalid @enderror" 
                               placeholder=" " value="{{ old('amount') }}">
                        <label for="amount">Amount (ZMW)</label>
                        @error('amount')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <select id="giving" name="giving" required 
                            class="form-select @error('giving') is-invalid @enderror">
                        <option value="" disabled {{ old('giving') ? '' : 'selected' }}>Select Giving Type</option>
                        <option value="Offering" {{ old('giving') == 'Offering' ? 'selected' : '' }}>Offering</option>
                        <option value="Tithe" {{ old('giving') == 'Tithe' ? 'selected' : '' }}>Tithe</option>
                        <option value="Other" {{ old('giving') == 'Other' ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('giving')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12">
                    <div class="form-floating">
                        <input id="comment" name="comment" type="text" required 
                               class="form-control @error('comment') is-invalid @enderror" 
                               placeholder=" " value="{{ old('comment') }}">
                        <label for="comment">Comment / Purpose</label>
                        @error('comment')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success w-100 py-2" id="submitBtn">
                <i class="fa-solid fa-dollar-sign"></i>&nbsp;Submit Giving
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

        // Form submission handling with double-submit prevention
        let isSubmitting = false;
        
        document.getElementById('givingForm').addEventListener('submit', function(e) {
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

            // Validate amount is positive
            const amountField = document.getElementById('amount');
            if (amountField.value && parseFloat(amountField.value) <= 0) {
                amountField.classList.add('is-invalid');
                isValid = false;
                alert('Amount must be greater than 0.');
            }

            if (!isValid) {
                e.preventDefault();
                alert('Please fill in all required fields correctly.');
                return false;
            }
            
            // Show loading state
            isSubmitting = true;
            const submitBtn = document.getElementById('submitBtn');
            const originalText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i>&nbsp;Processing...';
            
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
                submitBtn.innerHTML = '<i class="fa-solid fa-dollar-sign"></i>&nbsp;Submit Giving';
            }
        });

        // Format amount input to show decimal places
        document.getElementById('amount').addEventListener('blur', function() {
            if (this.value) {
                this.value = parseFloat(this.value).toFixed(2);
            }
        });

    </script>
</body>

</html>