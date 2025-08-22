<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="https://seventh-production.up.railway.app/images/sda3.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Prayer Request - SDA Church</title>
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/bootstrap.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .orange-separator {
            height: 4px;
            background: #e4af00;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .prayer-hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .prayer-hero h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .prayer-hero p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .prayer-form-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            padding: 40px;
            margin-top: -50px;
            position: relative;
            z-index: 2;
        }

        .form-group label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }

        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 12px 15px;
            transition: all 0.3s ease;
            font-size: 16px;
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        .form-check-input {
            width: 20px;
            height: 20px;
            margin-top: 2px;
        }

        .form-check-label {
            font-weight: 500;
            margin-left: 10px;
        }

        .btn-prayer {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
            padding: 15px 40px;
            border-radius: 50px;
            font-size: 18px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-prayer:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
            color: white;
        }

        .prayer-info {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
        }

        .prayer-info h4 {
            color: #667eea;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .privacy-note {
            background: #e3f2fd;
            border-left: 4px solid #2196f3;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .privacy-note i {
            color: #2196f3;
            margin-right: 8px;
        }

        .required {
            color: #e74c3c;
        }

        @media (max-width: 768px) {
            .prayer-hero h1 {
                font-size: 2rem;
            }
            
            .prayer-form-container {
                padding: 25px;
                margin: 20px 10px;
            }
        }
    </style>
</head>

<body>
    @include('home.header')

    <!-- Orange Separator Line -->
    <div class="orange-separator"></div>

    <!-- Prayer Hero Section -->
    <div class="prayer-hero">
        <div class="container">
            <h1><i class="fas fa-praying-hands"></i> Prayer Request</h1>
            <p>We believe in the power of prayer and would be honored to pray with you</p>
        </div>
    </div>

    <!-- Prayer Form Section -->
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="prayer-form-container">
                    <!-- Prayer Information -->
                    <div class="prayer-info">
                        <h4><i class="fas fa-heart text-danger"></i> How We Pray Together</h4>
                        <p class="mb-2">Your prayer request will be:</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success"></i> Prayed for by our pastoral team</li>
                            <li><i class="fas fa-check text-success"></i> Kept confidential and treated with respect</li>
                            <li><i class="fas fa-check text-success"></i> Shared only with our prayer ministry (unless marked private)</li>
                        </ul>
                    </div>

                    <!-- Prayer Request Form -->
                    <form method="POST" action="{{ route('prayer.store') }}">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Your Name <span class="required">*</span></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                           id="name" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                           id="email" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                                           id="phone" name="phone" value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="request_type">Prayer Category <span class="required">*</span></label>
                                    <select class="form-control @error('request_type') is-invalid @enderror" 
                                            id="request_type" name="request_type" required>
                                        <option value="">Select a category</option>
                                        <option value="personal" {{ old('request_type') == 'personal' ? 'selected' : '' }}>Personal</option>
                                        <option value="family" {{ old('request_type') == 'family' ? 'selected' : '' }}>Family</option>
                                        <option value="health" {{ old('request_type') == 'health' ? 'selected' : '' }}>Health</option>
                                        <option value="financial" {{ old('request_type') == 'financial' ? 'selected' : '' }}>Financial</option>
                                        <option value="spiritual" {{ old('request_type') == 'spiritual' ? 'selected' : '' }}>Spiritual</option>
                                        <option value="other" {{ old('request_type') == 'other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @error('request_type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="prayer_request">Your Prayer Request <span class="required">*</span></label>
                            <textarea class="form-control @error('prayer_request') is-invalid @enderror" 
                                      id="prayer_request" name="prayer_request" rows="6" 
                                      placeholder="Please share what you'd like us to pray for..." required>{{ old('prayer_request') }}</textarea>
                            @error('prayer_request')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">Minimum 10 characters</small>
                        </div>

                        <div class="form-group">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="1" id="is_urgent" name="is_urgent"
                                       {{ old('is_urgent') ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_urgent">
                                    <i class="fas fa-exclamation-triangle text-warning"></i> This is an urgent prayer request
                                </label>
                            </div>
                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="is_private" name="is_private"
                                       {{ old('is_private') ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_private">
                                    <i class="fas fa-lock text-info"></i> Keep this prayer request private (pastoral team only)
                                </label>
                            </div>
                        </div>

                        <div class="privacy-note">
                            <i class="fas fa-shield-alt"></i>
                            <strong>Privacy Promise:</strong> We respect your privacy and will never share your personal information. 
                            Your prayer request will only be shared with our trusted prayer ministry team unless you mark it as private.
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-prayer">
                                <i class="fas fa-paper-plane"></i> Submit Prayer Request
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('home.footer')

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>