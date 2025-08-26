<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="https://seventh-production.up.railway.app/images/sda3.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/bootstrap.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/style.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/responsive.css" />
    <link rel="stylesheet"
        href="https://seventh-production.up.railway.app/css/fontawesome-free-6.5.2-web/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <title>Church Giving</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background-color: #f8f9fa;
            color: #495057;
            min-height: 100vh;
        }

        .main-content {
            min-height: 100vh;
            background-color: #f8f9fa;
            padding: 40px 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            max-width: 800px;
            width: 100%;
            margin: 0 auto;
            background: white;
            padding: 60px 40px;
            border-radius: 0;
            box-shadow: none;
            border: none;
        }

        .header-section {
            text-align: center;
            margin-bottom: 50px;
        }

        .sda-logo {
            width: 80px;
            height: auto;
            margin: 0 auto 20px;
            display: block;
        }

        .icon-circle {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #28a745, #20c997);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px auto 30px;
            box-shadow: 0 4px 20px rgba(40, 167, 69, 0.3);
        }

        .icon-circle i {
            color: white;
            font-size: 32px;
        }

        .page-title {
            font-size: 2rem;
            font-weight: 600;
            color: #e4af00;
            margin-bottom: 15px;
            letter-spacing: -0.5px;
        }

        .page-subtitle {
            font-size: 1.1rem;
            color: #6c757d;
            font-weight: 400;
            line-height: 1.5;
            margin-bottom: 0;
        }

        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 25px;
            flex: 1;
        }

        .form-group label {
            font-weight: 500;
            color: #495057;
            margin-bottom: 8px;
            display: block;
            font-size: 14px;
        }

        .required {
            color: #e74c3c;
        }

        .form-control {
            border: 1px solid #dee2e6;
            border-radius: 4px;
            padding: 15px 20px;
            font-size: 16px;
            transition: all 0.2s ease;
            width: 100%;
            background-color: #f8f9fa;
            box-sizing: border-box;
        }

        .form-control:focus {
            border-color: #28a745;
            outline: none;
            box-shadow: 0 0 0 2px rgba(40, 167, 69, 0.2);
            background-color: #fff;
        }

        .form-control::placeholder {
            color: #adb5bd;
        }

        select.form-control {
            cursor: pointer;
            background-repeat: no-repeat;
            background-position: right 18px center;
            background-size: 16px;
            padding-right: 50px;
            background-color: #f8f9fa;
        }

        /* Icon with input styling */
        .input-with-icon {
            display: flex;
            align-items: stretch;
        }

        .icon-box {
            width: 50px;
            background-color: #e9ecef;
            border: 1px solid #dee2e6;
            border-right: none;
            border-radius: 4px 0 0 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .icon-box i {
            color: #6c757d;
            font-size: 16px;
        }

        .input-with-icon .form-control {
            border-radius: 0 4px 4px 0;
            border-left: none;
            flex: 1;
        }

        .input-with-icon .form-control:focus {
            border-left: none;
        }

        .input-with-icon .form-control:focus+.icon-box,
        .input-with-icon:focus-within .icon-box {
            border-color: #28a745;
            background-color: #f0f9ff;
        }

        .submit-btn {
            background: linear-gradient(135deg, #28a745, #20c997);
            border: none;
            padding: 14px 40px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 16px;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            width: auto;
            min-width: 160px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(40, 167, 69, 0.4);
            background: linear-gradient(135deg, #20c997, #17a2b8);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .btn-container {
            text-align: center;
            margin-top: 40px;
        }

        /* Success/Error Messages */
        .alert {
            border-radius: 6px;
            margin-bottom: 30px;
            border: none;
            padding: 15px 20px;
        }

        .alert-success {
            background-color: #d1fae5;
            color: #047857;
        }

        .alert-danger {
            background-color: #fee2e2;
            color: #dc2626;
        }

        .footer {
            background-color: #2c3e50;
            color: white;
            padding: 20px 0;
            margin-top: 40px;
            text-align: center;
        }

        .footer span {
            font-size: 0.9rem;
        }

        .footer a {
            color: #20c997;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .form-container {
                width: 100%;
                padding: 40px 25px;
            }

            .form-row {
                flex-direction: column;
                gap: 0;
            }

            .page-title {
                font-size: 1.6rem;
            }

            .page-subtitle {
                font-size: 1rem;
            }

            .main-content {
                padding: 20px 0;
            }

            .sda-logo {
                width: 60px;
            }

            .icon-circle {
                width: 60px;
                height: 60px;
            }

            .icon-circle i {
                font-size: 24px;
            }
        }

        @media (max-width: 480px) {
            .form-container {
                width: 100%;
                padding: 30px 20px;
            }

            .page-title {
                font-size: 1.4rem;
                margin-bottom: 12px;
            }

            .submit-btn {
                width: 100%;
                padding: 16px 20px;
            }

            .main-content {
                padding: 10px 0;
            }

            .icon-box {
                width: 45px;
            }

            .sda-logo {
                width: 55px;
            }
        }

        /* Orange separator line */
        .orange-separator {
            height: 4px;
            background: #e4af00;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        /* Navigation */
        .navbar-custom {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding-top: 10px !important;
            padding-bottom: 10px !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 1000;
        }

        .navbar-toggler {
            border: none;
            padding: 0.25rem 0.5rem;
            border: none !important;
            border-radius: 0 !important;
            box-shadow: none !important;
            outline: none !important;
        }

        .custom-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path fill="black" d="M480 224C492.9 224 504.6 231.8 509.6 243.8C514.6 255.8 511.8 269.5 502.7 278.7L342.7 438.7C330.2 451.2 309.9 451.2 297.4 438.7L137.4 278.7C128.2 269.5 125.5 255.8 130.5 243.8C135.5 231.8 147.1 224 160 224L480 224z"/></svg>');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }

        .navbar-brand {
            font-weight: bold;
            color: #333 !important;
            font-size: 1.5rem;
            margin-left: 15px;
        }

        .navbar-nav .nav-link {
            color: #848484 !important;
            font-weight: 500;
            margin: 0 1rem;
            transition: color 0.3s ease;
            position: relative;
            padding-bottom: 15px !important;
        }

        .navbar-nav .nav-link:hover {
            color: #333 !important;
        }

        .navbar-nav .nav-link.second-nav {
            color: darkgray !important;
        }

        .navbar-nav .nav-link.second-nav:hover {
            color: black !important;
        }

        .nav-link.second-nav.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            height: 3px;
            background-color: #e4af00;
            border-radius: 2px 2px 0 0;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            height: 70vh;
            min-height: 500px;
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('images/who.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            font-weight: 900 !important;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 0;
        }

        .hero-content {
            max-width: 800px;
            padding: 0 2rem;
            z-index: 2;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            line-height: 1.2;
        }

        .hero-section h5 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            line-height: 1.2;
        }

        .hero-section .lead {
            font-size: 1.4rem;
            font-weight: 400;
            line-height: 1.6;
            opacity: 0.95;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .lead {
            color: white;
        }

        /* Leadership Header */
        .leadership-header {
            text-align: center;
            padding: 40px 20px 60px;
            background-color: #fff;
        }

        .leadership-header h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #1a1a1a;
        }

        .leadership-header p {
            font-size: 1.2rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }

        /* FIXED: Leadership Container - Clean responsive layout */
        .leadership-flex-container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: flex-start;
            gap: 12rem;
            max-width: 900px;
            margin: 0 auto;
            padding: 20px 0px 60px;
        }

        /* Leadership Cards */
        .leadership-card {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 350px;
            flex-shrink: 0;
        }

        .leader-image-container {
            position: relative;
            width: 100%;
            height: 500px;
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 1.5rem;
        }

        .leader-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .leader-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            color: white;
            padding: 40px 20px 20px;
            text-align: left;
        }

        .leader-name {
            font-size: 2.2rem;
            font-weight: bold;
            margin: 0 0 0.3rem 0;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            color: white;
        }

        .leader-position {
            font-size: 1.1rem;
            margin: 0;
            opacity: 0.9;
            font-style: italic;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            color: white;
        }

        .get-to-know-btn {
            background: transparent;
            border: 2px solid #333;
            color: #333;
            padding: 12px 30px;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin-top: auto;
        }

        .get-to-know-btn:hover {
            background: #333;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            text-decoration: none;
        }

        /* Our Story Section */
        .text-area12 {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px 20px;
            background-color: #f8f9fa;
        }

        .text-area12 h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            color: #1a1a1a;
            text-align: center;
        }

        .rich-text3 {
            font-size: 1.1rem;
            line-height: 1.7;
            color: #555;
        }

        .rich-text3 p {
            margin-bottom: 1.5rem;
        }

        .spacer-wrapper {
            height: 20px;
        }

        .pt-very_relaxed {
            padding-top: 2rem;
        }

        .pt-normal {
            padding-top: 1rem;
        }

        .mb-relaxed {
            margin-bottom: 1.5rem;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .leadership-flex-container {
                gap: 6rem;
                max-width: 1200px;
            }

            .leadership-card {
                width: 300px;
            }

            .leader-image-container {
                height: 400px;
            }
        }

        /* FIXED: Mobile breakpoint - Clean vertical stacking */
        @media (max-width: 768px) {
            .leadership-flex-container {
                flex-direction: column;
                align-items: center;
                gap: 2.5rem;
                padding: 0 1rem;
            }

            .leadership-card {
                width: 100%;
                max-width: 350px;
            }

            .leader-image-container {
                height: 350px;
            }

            .hero-section {
                height: 60vh;
                min-height: 400px;
                background-attachment: scroll;
            }

            .hero-section h1 {
                font-size: 2.5rem;
            }

            .hero-section .lead {
                font-size: 1.2rem;
            }

            .hero-content {
                padding: 0 1rem;
            }

            .leadership-header {
                padding: 40px 20px 30px;
            }

            .leadership-header h1 {
                font-size: 2.2rem;
            }

            .leadership-header p {
                font-size: 1rem;
            }

            .leader-name {
                font-size: 1.8rem;
            }

            .leader-position {
                font-size: 1rem;
            }

            .get-to-know-btn {
                padding: 12px 30px;
                font-size: 1rem;
            }

            .text-area12 h2 {
                font-size: 2rem;
            }
        }

        /* FIXED: Smaller mobile screens */
        @media (max-width: 576px) {
            .hero-section h1 {
                font-size: 2rem;
            }

            .hero-section .lead {
                font-size: 1.1rem;
            }

            .leadership-header {
                padding: 30px 15px 20px;
            }

            .leadership-flex-container {
                padding: 15px 0px 40px;
                gap: 1.5rem;
            }

            .leadership-card {
                max-width: 100%;
            }

            .leader-image-container {
                max-width: 250px;
                height: 250px;
            }

            .leader-name {
                font-size: 1.5rem;
            }

            .leader-position {
                font-size: 0.9rem;
            }

            .get-to-know-btn {
                padding: 10px 25px;
                font-size: 0.9rem;
            }

            .text-area12 {
                padding: 30px 15px;
            }

            .text-area12 h2 {
                font-size: 1.8rem;
            }
        }

        h4,
        h3,
        h2 {
            color: #000;
        }

        p,
        small {
            color: #555;
        }

        .expectation-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
            margin-bottom: 1.5rem;
            /* Added margin-bottom here for spacing */
        }

        .expectation-card:hover {
            transform: translateY(-5px);
        }

        .expectation-icon {
            width: 100%;
            height: 100%;
            background: #ffffffff;
            border-radius: 50%;
            display: flex;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 24px;
            color: white;
        }

        h4,
        h3,
        h2 {
            color: #000;
        }

        p,
        small {
            color: #555;
        }

        /* Optional smaller adjustments on mobile */
        @media (max-width: 800px) {
            .expectation-card {
                padding: 20px;
            }

            .expectation-icon {
                width: 50px;
                height: 50px;
                font-size: 20px;
            }

            h4 {
                font-size: 1.25rem;
            }
        }

        .py-5 {
            background-color: #f8f9fa !important;
        }

        .header1 {
            text-align: center;
        }
    </style>
</head>

<body>

    @include('home.header')
    <!-- Orange Separator Line -->
    <div class="orange-separator"></div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">About Us</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="custom-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="{{ route('attend-online') }}">Attend Online</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="{{ route('who-we-are') }}">Who We Are</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="{{ route('what-to-expect') }}">What to Expect</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="{{ route('contact-us') }}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav active" href="{{ route('give-god') }}">Give To God</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="{{ route('our-beliefs') }}">Our Beliefs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main-content">
        <div class="form-container">
            <!-- Header Section -->
            <div class="header-section">
                <img src="/images/sda.png" class="sda-logo" alt="SDA Logo">
                <h1 class="page-title">Give</h1>
            </div>

            <!-- Success/Error Messages -->
            <div class="alert alert-success" style="display: none;">
                Your giving has been submitted successfully!
            </div>

            <!-- Giving Form -->
            <form method="POST" autocomplete="on" action="{{ url('/add_givings') }}">
                @csrf

                <!-- Name Fields Row -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="fname">First Name <span class="required">*</span></label>
                        <input id="fname" name="fname" type="text" required autofocus class="form-control"
                            placeholder="Enter your first name">
                    </div>
                    <div class="form-group">
                        <label for="mname">Middle Name</label>
                        <input id="mname" name="mname" type="text" class="form-control"
                            placeholder="Enter your middle name">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="lname">Last Name <span class="required">*</span></label>
                        <input id="lname" name="lname" type="text" required class="form-control"
                            placeholder="Enter your last name">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile Money Number <span class="required">*</span></label>
                        <div class="input-with-icon">
                            <div class="icon-box">
                                <i class="fa-solid fa-mobile-screen-button"></i>
                            </div>
                            <input id="mobile" name="mobile" type="number" required class="form-control"
                                placeholder="Enter mobile money number">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="amount">Amount <span class="required">*</span></label>
                        <div class="input-with-icon">
                            <div class="icon-box">
                                <i class="fa-solid fa-dollar-sign"></i>
                            </div>
                            <input id="amount" name="amount" type="number" required class="form-control"
                                placeholder="Enter amount">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="giving">Type of Giving <span class="required">*</span></label>
                        <select id="giving" name="giving" required class="form-control">
                            <option value="" disabled selected>Select giving type</option>
                            <option value="Offering">Offering</option>
                            <option value="Tithe">Tithe</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>

                <!-- Comment Field -->
                <div class="form-group">
                    <label for="comment">Comment <span class="required">*</span></label>
                    <input id="comment" name="comment" type="text" required class="form-control"
                        placeholder="Add a comment or note">
                </div>

                <!-- Submit Button -->
                <div class="btn-container">
                    <button type="submit" value="Give" name="submit" class="submit-btn">
                        <i class="fa-solid fa-heart"></i>
                        Give Now
                    </button>
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="form-group" style="margin-top: 30px;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="terms" id="terms" required>
                            <label class="form-check-label" for="terms" style="font-size: 0.9rem; color: #6c757d;">
                                I agree to the
                                <a href="{{ route('terms.show') }}" target="_blank" class="text-success">Terms of
                                    Service</a>
                                and
                                <a href="{{ route('policy.show') }}" target="_blank" class="text-success">Privacy Policy</a>
                            </label>
                        </div>
                    </div>
                @endif
            </form>
        </div>
    </div>

    <!-- Expectation Cards -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Card 1 -->
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="expectation-card w-100">
                        <div class="expectation-icon">

                            <img src="/images/airtel-logo.png" class="" alt="SDA Logo">

                        </div>
                        <h4 class="header1">Airtel Money</h4>
                        <p class="header1">Follow the steps below;</p>
                        <ul class="steps-list">
                            <li>Dial <strong>*303#</strong></li>
                            <li>Select <strong>"Pay Bills"</strong></li>
                            <li>Select <strong>"Other"</strong></li>
                            <li>Enter merchant code: <strong>"UNISDA"</strong></li>
                            <li>Enter the <strong>amount</strong></li>
                            <li>Add reference <strong>(Tithe/Offering)</strong></li>
                            <li>Confirm with your <strong>PIN</strong></li>
                        </ul>
                        <small class="header1">Finally, Enter your <strong>PIN</strong> to confirm the transaction.
                        </small>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="expectation-card w-100">
                        <div class="expectation-icon">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>
                        <h4>Friendly Atmosphere</h4>
                        <p>Our greeters will welcome you at the door and help you find your way. Our community is warm
                            and welcoming!</p>
                        <small>Feel free to introduce yourself</small>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="expectation-card w-100">
                        <div class="expectation-icon">
                            <i class="fa-solid fa-credit-card"></i>
                        </div>
                        <h4>Come As You Are</h4>
                        <p>Dress comfortably! You'll see everything from casual to business attire. What matters most is
                            that you're here.</p>
                        <small>No dress code required</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('home.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Auto-hide success messages after 5 seconds
            const successAlert = document.querySelector('.alert-success');
            if (successAlert && successAlert.style.display !== 'none') {
                setTimeout(() => {
                    successAlert.style.opacity = '0';
                    setTimeout(() => {
                        successAlert.style.display = 'none';
                    }, 300);
                }, 5000);
            }

            // Focus effects for icon boxes
            const inputsWithIcons = document.querySelectorAll('.input-with-icon input');
            inputsWithIcons.forEach(input => {
                input.addEventListener('focus', function () {
                    const iconBox = this.parentElement.querySelector('.icon-box');
                    if (iconBox) {
                        iconBox.style.borderColor = '#28a745';
                        iconBox.style.backgroundColor = '#f0f9ff';
                    }
                });

                input.addEventListener('blur', function () {
                    const iconBox = this.parentElement.querySelector('.icon-box');
                    if (iconBox) {
                        iconBox.style.borderColor = '#dee2e6';
                        iconBox.style.backgroundColor = '#e9ecef';
                    }
                });
            });

            // Form validation enhancement
            const form = document.querySelector('form');
            const requiredFields = form.querySelectorAll('[required]');

            form.addEventListener('submit', function (e) {
                let isValid = true;

                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        field.style.borderColor = '#dc3545';
                        isValid = false;
                    } else {
                        field.style.borderColor = '#28a745';
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                    // Show error message
                    let errorAlert = document.querySelector('.alert-danger');
                    if (!errorAlert) {
                        errorAlert = document.createElement('div');
                        errorAlert.className = 'alert alert-danger';
                        errorAlert.textContent = 'Please fill in all required fields.';
                        form.insertBefore(errorAlert, form.firstChild);
                    }
                }
            });
        });
    </script>
</body>

</html>