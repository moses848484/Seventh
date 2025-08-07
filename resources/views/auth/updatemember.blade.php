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
            ;
            color: #04AA6D !important;
            ;
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

        .fa-user-plus {
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
        <form method="POST" action="{{ url('/update_registered', $data->id) }}" enctype="multipart/form-data">
            @csrf

            <div class="logo">
                <img src="/images/sda.png" class="sda_logo">
            </div>
            <h2 class="form-title">Update Member</h2>

      <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="form-floating">
                        <input id="fname" name="fname" type="text" required autofocus 
                               class="form-control @error('fname') is-invalid @enderror" 
                               placeholder=" " value="{{ $data->fname }}">
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
                               placeholder=" " value="{{ $data->mname }}">
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
                               placeholder=" " value="{{ $data->lname }}">
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
                               placeholder=" " value="{{ $data->mobile }}">
                        <label for="mobile">Mobile Number</label>
                        @error('mobile')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
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

            <div class="row mb-3">
                <div class="col-12">
                    <div class="form-floating">
                        <input id="address" name="address" type="text" required autocomplete="address"
                            class="form-control @error('address') is-invalid @enderror" placeholder=" "
                            value="{{ $data->address }}">
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
                            class="form-control @error('occupation') is-invalid @enderror" placeholder=" "
                            value="{{ $data->occupation }}">
                        <label for="occupation">Occupation</label>
                        @error('occupation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input id="email" name="email" type="email" required
                            class="form-control @error('email') is-invalid @enderror" placeholder=" "
                            value="{{ $data->email }}">
                        <label for="email">Email Address</label>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
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
                        <input id="document" name="document" type="file" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png"
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

                @if (!empty($data->document))
                    <div class="col-md-6 mb-3">
                        <label class="textcolor form-label fw-bold">Current Baptism Certificate</label>
                        <div class="current-certificate-wrapper">
                            <!-- View Certificate Button -->
                            <a href="{{ asset('storage/baptism-certificates/' . $data->document) }}"
                                class="btn btn-outline-primary btn-sm mb-2 d-block" target="_blank">
                                <i class="fas fa-eye me-1"></i> View Current Certificate
                            </a>

                            <!-- Certificate Info -->
                            <div class="certificate-info p-3 bg-light rounded">
                                <div class="d-flex align-items-center mb-2">
                                    @php
                                        $extension = strtolower(pathinfo($data->document, PATHINFO_EXTENSION));
                                        $isPdf = in_array($extension, ['pdf']);
                                        $isImage = in_array($extension, ['jpg', 'jpeg', 'png']);
                                        $isDoc = in_array($extension, ['doc', 'docx']);
                                    @endphp

                                    <!-- File Type Icon -->
                                    @if($isPdf)
                                        <i class="fas fa-file-pdf text-danger me-2 fs-4"></i>
                                    @elseif($isImage)
                                        <i class="fas fa-file-image text-success me-2 fs-4"></i>
                                    @elseif($isDoc)
                                        <i class="fas fa-file-word text-primary me-2 fs-4"></i>
                                    @else
                                        <i class="fas fa-file text-secondary me-2 fs-4"></i>
                                    @endif

                                    <div>
                                        <div class="fw-bold text-muted small">Current File</div>
                                        <div class="text-truncate" style="max-width: 200px;" title="{{ $data->document }}">
                                            {{ $data->document }}
                                        </div>
                                    </div>
                                </div>

                                <!-- Preview for images -->
                                @if($isImage)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/baptism-certificates/' . $data->document) }}"
                                            alt="Certificate Preview" class="img-thumbnail"
                                            style="max-width: 150px; max-height: 150px; cursor: pointer;"
                                            onclick="window.open('{{ asset('storage/baptism-certificates/' . $data->document) }}', '_blank')">
                                    </div>
                                @endif

                                <!-- PDF Embed Preview (optional) -->
                                @if($isPdf)
                                    <div class="mt-2">
                                        <small class="text-muted">
                                            <i class="fas fa-info-circle me-1"></i>
                                            Click "View Current Certificate" to open PDF
                                        </small>
                                    </div>
                                @endif
                            </div>

                            <!-- Download Link -->
                            <a href="{{ asset('storage/baptism-certificates/' . $data->document) }}"
                                class="btn btn-outline-secondary btn-sm mt-2" download>
                                <i class="fas fa-download me-1"></i> Download
                            </a>
                        </div>
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

            <button type="submit" class="btn btn-success w-100 py-2">
                <i class="fa-solid fa-pen-to-square"></i>&nbsp;Update Member
            </button>

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
        // Handle file input display
        document.getElementById('document').addEventListener('change', function (e) {
            const fileNameDiv = document.getElementById('file-name');
            const fileInputDisplay = document.querySelector('.file-input-display');

            if (e.target.files.length > 0) {
                const fileName = e.target.files[0].name;
                const fileSize = (e.target.files[0].size / (1024 * 1024)).toFixed(2); // Convert to MB

                fileNameDiv.innerHTML = `
            <div class="selected-file">
                <i class="fas fa-file me-2"></i>
                <span class="file-name-text">${fileName}</span>
                <small class="text-muted d-block">${fileSize} MB</small>
            </div>
        `;
                fileNameDiv.style.display = 'block';

                // Change the display style to show selected file
                fileInputDisplay.style.borderColor = '#28a745';
                fileInputDisplay.style.backgroundColor = '#f8f9fa';
            } else {
                fileNameDiv.style.display = 'none';
                fileInputDisplay.style.borderColor = '';
                fileInputDisplay.style.backgroundColor = '';
            }
        });
    </script>
</body>

</html>