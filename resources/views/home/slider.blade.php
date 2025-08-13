<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Church Hero Section</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

</head>

<body>
    <section class="slider_section position-relative text-white">
        <!-- Background image with gradient overlay -->
        <div class="slider_bg_box position-absolute w-100 h-100" style="top: 0; left: 0;">
            <img src="images/dorcas.jpg" alt="church" class="w-100 h-100" style="object-fit: cover;">
            <div class="position-absolute w-100 h-100"
                style="top: 0; left: 0; background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0.1) 100%); z-index: 1;">
            </div>
        </div>

        <!-- Carousel -->
        <div id="customCarousel1" class="carousel slide position-relative" data-bs-ride="carousel" style="z-index: 2;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container py-5">
                        <div class="row">
                            <div class="col-lg-10 col-md-10 d-flex align-items-start justify-content-center"
                                style="min-height: 100vh;">
                                <div class="detail-box text-center px-3 px-md-0">
                                    <!-- Fixed Hero Content Section -->
                                    <div class="hero-content-section">
                                        <h1 class="hero-title mb-4">
                                            Everyone's<br>
                                            Invited
                                        </h1>
                                        <p class="hero-subtitle mb-5">
                                            Wherever you are on your journey, there's a place for you at UNISDA Church.
                                            Here
                                            you'll find a welcoming community ready to walk through life with you.
                                        </p>
                                    </div>

                                    <!-- Location Section -->
                                    <div class="location-section mb-4">
                                        <div class="location-icon-text mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-crosshair2" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 0a.5.5 0 0 1 .5.5v.518A7 7 0 0 1 14.982 7.5h.518a.5.5 0 0 1 0 1h-.518A7 7 0 0 1 8.5 14.982v.518a.5.5 0 0 1-1 0v-.518A7 7 0 0 1 1.018 8.5H.5a.5.5 0 0 1 0-1h.518A7 7 0 0 1 7.5 1.018V.5A.5.5 0 0 1 8 0m-.5 2.02A6 6 0 0 0 2.02 7.5h1.005A5 5 0 0 1 7.5 3.025zm1 1.005A5 5 0 0 1 12.975 7.5h1.005A6 6 0 0 0 8.5 2.02zM12.975 8.5A5 5 0 0 1 8.5 12.975v1.005a6 6 0 0 0 5.48-5.48zM7.5 12.975A5 5 0 0 1 3.025 8.5H2.02a6 6 0 0 0 5.48 5.48zM10 8a2 2 0 1 0-4 0 2 2 0 0 0 4 0" />
                                            </svg>
                                            <span class="location-text">&nbsp;&nbsp;Find Your Closest Location</span>
                                        </div>

                                        <!-- Location Dropdown -->
                                        <div class="location-selector mb-4">
                                            <select class="form-select location-dropdown" id="locationSelect"
                                                aria-label="Choose a Location">
                                                <option value="">Choose a Location</option>
                                                <option value="unza-campus">UNZA Great East Road Campus</option>
                                                <option value="olympia-church">Katima Mulilo Road Olympia Church
                                                </option>
                                                <option value="online">Online</option>
                                            </select>
                                        </div>

                                        <!-- Expandable Content Container -->
                                        <div class="expandable-content" id="expandableContent">
                                            <!-- Map Container -->
                                            <div id="mapContainer" style="display: none;">
                                                <div id="map"
                                                    style="height: 300px; border-radius: 8px; margin-top: 20px;">
                                                </div>
                                            </div>

                                            <!-- Location Info Card -->
                                            <div id="locationInfoCard" class="location-info-card mt-3"
                                                style="display: none;">
                                                <div class="service-times-card">
                                                    <h3 class="card-title">Service Times</h3>

                                                    <div class="service-category mb-4">
                                                            <div class="service-category mb-4">
                                                                <div class="category-header">
                                                                    <img src="images/pcm.jpg" alt="Service Icon"
                                                                        class="service-icon youth"
                                                                        style="width: 35px; height: 35px;">
                                                                    <span class="service-label">SERVICE</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="serviceSection" class="service-details">
                                                            <!-- Service times will be populated here -->
                                                        </div>
                                                    </div>

                                                    <div class="service-category mb-4" id="youthSection"
                                                        style="display: none;">
                                                        <div class="category-header">
                                                            <img src="images/pcm.jpg" alt="Service Icon"
                                                                class="service-icon youth"
                                                                style="width: 35px; height: 35px;">
                                                            <span class="service-label">SERVICE</span>
                                                        </div>

                                                        <div id="youthDetails" class="service-details">
                                                            <!-- Youth service times will be populated here -->
                                                        </div>
                                                    </div>

                                                    <!-- Location Details -->
                                                    <div class="location-details">
                                                        <div class="location-address" id="locationAddress">
                                                            <i class="fa-solid fa-location-dot"></i>
                                                            <span id="addressText"></span>
                                                        </div>

                                                        <div class="location-phone" id="locationPhone">
                                                            <i class="fa-solid fa-phone"></i>
                                                            <span id="phoneText"></span>
                                                        </div>

                                                        <!-- Added Email Section -->
                                                        <div class="location-email" id="locationEmail">
                                                            <i class="fa-solid fa-envelope"></i>
                                                            <span id="emailText"></span>
                                                        </div>

                                                        <div class="pastor-info" id="pastorInfo">
                                                            <div class="pastor-avatar">
                                                                <img id="pastorImage" src="" alt="Pastor"
                                                                    style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
                                                            </div>
                                                            <div class="pastor-details">
                                                                <div class="pastor-name" id="pastorName"></div>
                                                                <div class="pastor-title">Pastor</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="location-button mt-4">
                                                        <button class="about-location-btn" id="aboutLocationBtn">
                                                            About UNISDA Church <span id="locationNameBtn"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Fixed Hero Section Layout */
        .slider_section {
            min-height: 100vh;
            overflow-y: auto;
            z-index: 1;
        }

        .detail-box {
            padding-top: 15vh;
            width: 100%;
            max-width: 800px;
        }

        /* Medium screens (tablets) */
        @media (max-width: 992px) {
            .detail-box {
                padding-top: 15vh !important;
                width: 100% !important;
                max-width: 800px !important;
            }
        }

        /* Small screens (phones) */
        @media (max-width: 576px) {
            .detail-box {
                padding-top: 15vh !important;
                ;
                width: 100% !important;
                ;
                max-width: 800px !important;
                ;
            }
        }

        /* Hero Content Section - Fixed positioning */
        .hero-content-section {
            margin-bottom: 3rem;
            position: relative;
            z-index: 3;
        }

        /* Hero Section Fonts and Styling */
        .hero-title {
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            font-size: 4.5rem;
            font-weight: 900;
            line-height: 1.1;
            text-align: left;
            letter-spacing: -0.02em;
            color: #ffffff !important;
        }

        .hero-subtitle {
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            font-size: 1.25rem;
            font-weight: 400;
            line-height: 1.6;
            text-align: left;
            color: rgba(255, 255, 255, 0.95);
            max-width: 700px;
            margin: 0 auto 3rem auto;
        }

        /* Location Section Styling */
        .location-section {
            max-width: 600px;
            margin: 0 auto;
            position: relative;
            z-index: 3;
        }

        /* Expandable Content Container */
        .expandable-content {
            transition: all 0.3s ease;
        }

        .location-icon-text {
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, 0.9);
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            font-size: 1rem;
            font-weight: 500;
            text-decoration: underline;
            text-decoration-thickness: 1px;
            text-underline-offset: 3px;
        }

        /* Location Dropdown Container */
        .dropdown-wrapper {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .dropdown-focus-ring {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 12px;
            pointer-events: none;
            transition: all 0.3s ease;
            z-index: -1;
        }

        .location-dropdown:focus+.dropdown-focus-ring {
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
        }

        /* Location Dropdown Styling */
        .location-dropdown {
            background-color: rgba(255, 255, 255, 0.95);
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            padding: 18px 24px;
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            font-size: 1.1rem;
            font-weight: 500;
            color: #2c3e50;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
            width: 100%;
            cursor: pointer;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("data:image/svg+xml;charset=utf-8,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 16px center;
            background-repeat: no-repeat;
            background-size: 16px;
            padding-right: 48px;
        }

        .location-dropdown:focus {
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.3), 0 8px 24px rgba(0, 0, 0, 0.15);
            outline: none;
            background-color: #fff;
            border-color: rgba(59, 130, 246, 0.5);
            transform: translateY(-2px);
        }

        .location-dropdown:hover {
            background-color: #fff;
            transform: translateY(-1px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.2);
        }

        .location-dropdown option {
            color: #2c3e50;
            background-color: #fff;
            padding: 12px 16px;
            font-weight: 500;
            border: none;
        }

        .location-dropdown option:hover,
        .location-dropdown option:focus {
            background-color: #f8f9fa;
            color: #1a202c;
        }

        /* Custom dropdown arrow animation */
        .location-dropdown:focus {
            background-image: url("data:image/svg+xml;charset=utf-8,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%233b82f6' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
        }

        /* Enhanced placeholder styling */
        .location-dropdown option:first-child {
            color: #6b7280;
            font-style: italic;
        }

        /* Loading state (optional) */
        .location-dropdown.loading {
            background-image: url("data:image/svg+xml;charset=utf-8,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M10 3v3m6 1-3 1M7 8l-3-1m0 6 3-1m6 1-3-1M10 17v-3'/%3e%3c/svg%3e");
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        /* Service Times Card Styling */
        .service-times-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 32px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
            color: #333;
            text-align: left;
            border: 1px solid rgba(0, 0, 0, 0.06);
        }

        .card-title {
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            font-size: 1.75rem;
            font-weight: 800;
            color: #1a1a1a;
            margin-bottom: 32px;
            text-align: left;
            letter-spacing: -0.02em;
        }

        .service-category {
            margin-bottom: 32px;
            padding-bottom: 24px;
            border-bottom: 1px solid #e5e7eb;
        }

        .service-category:last-of-type {
            border-bottom: none;
            padding-bottom: 0;
        }

        .category-header {
            display: flex;
            align-items: center;
            margin-bottom: 16px;
        }

        .service-icon {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background-color: #1a1a1a;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: 700;
            margin-right: 12px;
            letter-spacing: -0.5px;
        }

        .service-icon.youth {
            background-color: #1a1a1a;
        }

        .service-label {
            font-size: 11px;
            font-weight: 700;
            color: #1a1a1a;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .service-details {
            margin-left: 0;
        }

        .service-day {
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 16px;
            font-size: 1.25rem;
            letter-spacing: -0.01em;
        }

        .service-times {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 24px;
        }

        .time-slot {
            background-color: #f5f5f5;
            padding: 10px 16px;
            border-radius: 8px;
            font-size: 0.95rem;
            font-weight: 600;
            color: #666;
            border: 1px solid rgba(0, 0, 0, 0.08);
            letter-spacing: -0.01em;
        }

        .location-address,
        .location-phone,
        .location-email {
            display: flex;
            align-items: center;
            gap: 8px;
            /* space between icon and text */
            margin-bottom: 12px;
            color: #666;
        }

        .address-icon,
        .phone-icon,
        .email-icon {
            flex-shrink: 0;
            /* prevent icon from squishing */
            display: inline-block;
            /* ensure proper rendering */
            width: 16px;
            /* slightly larger for clarity */
            height: 16px;
            fill: currentColor;
            /* match text color */
        }


        .pastor-info {
            display: flex;
            align-items: center;
            margin: 16px 0;
            padding: 12px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }

        .pastor-avatar {
            margin-right: 12px;
        }

        .pastor-name {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 2px;
        }

        .pastor-title {
            font-size: 0.9rem;
            color: #666;
        }

        .location-button {
            display: flex;
            justify-content: center;
            /* center horizontally */
        }

        #addressText {
            color: #00aaff !important;
        }

        #phoneText {
            color: #00aaff !important;
        }

        #emailText {
            color: #00aaff !important;
        }

        .about-location-btn {
            background-color: transparent;
            color: #2c3e50;
            border: 2px solid #2c3e50;
            border-radius: 25px;
            padding: 12px 24px;
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            font-weight: 500;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: none;
            letter-spacing: 0;
            min-width: 200px;
            position: relative;
            overflow: hidden;
        }

        .about-location-btn:hover {
            background-color: transparent;
            color: black;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(44, 62, 80, 0.2);
        }

        .about-location-btn:active {
            transform: translateY(0);
            box-shadow: 0 2px 6px rgba(44, 62, 80, 0.15);
        }

        .about-location-btn:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(44, 62, 80, 0.1);
        }

        /* Map styling */
        .leaflet-popup-content-wrapper {
            border-radius: 8px;
        }

        .location-info-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 8px;
            backdrop-filter: blur(10px);
        }

        .slider_bg_box img {
            object-fit: cover;
        }

        /* Responsive Typography */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 3rem;
                margin-bottom: 1rem;
            }

            .hero-subtitle {
                font-size: 1.125rem;
                margin-bottom: 2rem;
            }

            .detail-box {
                padding: 2rem 1rem;
                padding-top: 3vh;
            }

            .hero-content-section {
                margin-bottom: 2rem;
            }

            .location-section {
                max-width: 100%;
            }

            #map {
                height: 250px;
            }

            .service-times-card {
                padding: 20px;
            }

            .card-title {
                font-size: 1.3rem;
            }

            .service-times {
                gap: 6px;
            }

            .time-slot {
                font-size: 0.85rem;
                padding: 4px 10px;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2.5rem;
                line-height: 1.2;
            }

            .hero-subtitle {
                font-size: 1rem;
                text-align: center;
            }

            .detail-box {
                padding-top: 2vh;
            }

            .hero-content-section {
                margin-bottom: 1.5rem;
            }

            .location-dropdown {
                padding: 14px 16px;
                font-size: 1rem;
                padding-right: 40px;
            }

            .location-dropdown:focus,
            .location-dropdown:hover {
                transform: translateY(0);
            }

            #map {
                height: 200px;
            }

            .service-times-card {
                padding: 16px;
            }

            .card-title {
                font-size: 1.2rem;
            }

            .service-times {
                gap: 4px;
            }

            .time-slot {
                font-size: 0.8rem;
                padding: 3px 8px;
            }

            .pastor-info {
                flex-direction: column;
                text-align: center;
            }

            .pastor-avatar {
                margin-right: 0;
                margin-bottom: 8px;
            }
        }

        /* Fix for Bootstrap utility classes */
        .position-relative {
            position: relative !important;
        }

        .position-absolute {
            position: absolute !important;
        }

        .w-100 {
            width: 100% !important;
        }

        .h-100 {
            height: 100% !important;
        }

        .text-white {
            color: #fff !important;
        }

        .text-center {
            text-align: center !important;
        }

        .mb-4 {
            margin-bottom: 1.5rem !important;
        }

        .mb-5 {
            margin-bottom: 3rem !important;
        }

        .mt-3 {
            margin-top: 1rem !important;
        }

        .mt-4 {
            margin-top: 1.5rem !important;
        }

        .py-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .px-3 {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        .d-flex {
            display: flex !important;
        }

        .align-items-start {
            align-items: flex-start !important;
        }

        .align-items-center {
            align-items: center !important;
        }

        .justify-content-center {
            justify-content: center !important;
        }

        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .col-lg-10 {
            flex: 0 0 83.333333%;
            max-width: 83.333333%;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col-md-10 {
            flex: 0 0 83.333333%;
            max-width: 83.333333%;
        }

        @media (max-width: 991.98px) {
            .col-lg-10 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        @media (max-width: 767.98px) {
            .col-md-10 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .px-md-0 {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
        }

        .text-paragraph_large {
            margin-top: 10px !important;
        }

        .text-section_header3 {
            margin-top: 10px !important;
        }
    </style>

    <!-- Bootstrap 4 JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>


    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script>
        let map;
        let currentMarker;

        // Location data with pastor information
        const locations = {
            'unza-campus': {
                name: 'UNZA Campus',
                fullName: 'UNZA Great East Road Campus',
                address: 'Great East Road, University of Zambia, Lusaka, Zambia',
                coordinates: [-15.3875, 28.3228],
                services: {
                    main: {
                        day: 'Wednesday',
                        times: ['8:30 AM', '10:00 AM', '11:30 AM', '1:00 PM']
                    },
                    youth: {
                        day: 'Wednesday',
                        times: ['6:00 PM', '7:00 PM']
                    }
                },
                contact: {
                    phone: '+260 97 123 4567',
                    email: 'unza@church.zm'
                },
                pastor: {
                    name: 'John Mwamba',
                    image: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face'
                },
                slug: 'unza-campus'
            },
            'olympia-church': {
                name: 'Katima Mulilo',
                fullName: 'University Seventh Day Church',
                address: '25210 Katima Mulilo Road, Olympia, Lusaka, Zambia',
                coordinates: [-15.3946, 28.2853],
                services: {
                    main: {
                        day: 'Saturday',
                        times: ['8:30 AM', '10:30 AM']
                    },
                    youth: {
                        day: 'Thursday',
                        times: ['6:00 PM']
                    }
                },
                contact: {
                    phone: '260 211 293 525',
                    email: 'olympia@church.zm'
                },
                pastor: {
                    name: 'John Phiri',
                    image: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face'
                },
                slug: 'olympia-church'
            },
            'online': {
                name: 'Online',
                fullName: 'Online Service',
                address: 'Available worldwide via live stream',
                coordinates: null,
                services: {
                    main: {
                        day: 'Sunday',
                        times: ['9:00 AM (CAT)', '11:00 AM (CAT)']
                    },
                    youth: {
                        day: 'Wednesday',
                        times: ['6:00 PM (CAT)']
                    }
                },
                contact: {
                    phone: '+260 97 123 4567',
                    email: 'online@church.zm',
                    streamingUrl: 'https://church.zm/live'
                },
                pastor: {
                    name: 'David Tembo',
                    image: 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face'
                },
                slug: 'online'
            }
        };

        // Initialize map
        function initializeMap() {
            if (map) {
                map.remove();
            }

            // Center map on Lusaka
            map = L.map('map').setView([-15.3875, 28.3228], 12);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);
        }

        // Add marker to map
        function addLocationMarker(location) {
            if (currentMarker) {
                map.removeLayer(currentMarker);
            }

            if (location.coordinates) {
                currentMarker = L.marker(location.coordinates).addTo(map);

                const popupContent = `
                    <div style="text-align: center;">
                        <h6><strong>${location.fullName}</strong></h6>
                        <p style="margin: 5px 0; color: #666;">${location.address}</p>
                    </div>
                `;

                currentMarker.bindPopup(popupContent).openPopup();
                map.setView(location.coordinates, 15);
            }
        }

        // Update location info card
        function updateLocationInfo(location) {
            // Update service section
            const serviceSection = document.getElementById('serviceSection');
            serviceSection.innerHTML = `
                <div class="service-day">${location.services.main.day}</div>
                <div class="service-times">
                    ${location.services.main.times.map(time => `<span class="time-slot">${time}</span>`).join('')}
                </div>
            `;

            // Update youth section
            const youthSection = document.getElementById('youthSection');
            const youthDetails = document.getElementById('youthDetails');

            if (location.services.youth && location.services.youth.times.length > 0) {
                youthSection.style.display = 'block';
                youthDetails.innerHTML = `
                    <div class="service-day">${location.services.youth.day}</div>
                    <div class="service-times">
                        ${location.services.youth.times.map(time => `<span class="time-slot">${time}</span>`).join('')}
                    </div>
                `;
            } else {
                youthSection.style.display = 'none';
            }

            // Update location details
            document.getElementById('addressText').textContent = location.address;
            document.getElementById('phoneText').textContent = location.contact.phone;
            document.getElementById('emailText').textContent = location.contact.email;

            // Update pastor info
            document.getElementById('pastorImage').src = location.pastor.image;
            document.getElementById('pastorName').textContent = location.pastor.name;

            // Update button text
            document.getElementById('locationNameBtn').textContent = location.name;

            // Update button click handler
            document.getElementById('aboutLocationBtn').onclick = function () {
                // Navigate to location page or show more details
                console.log(`Navigate to ${location.slug} page`);
                // window.location.href = `/locations/${location.slug}`;
            };
        }

        // Handle location selection
        document.getElementById('locationSelect').addEventListener('change', function () {
            const selectedValue = this.value;
            const mapContainer = document.getElementById('mapContainer');
            const locationInfoCard = document.getElementById('locationInfoCard');

            if (selectedValue && locations[selectedValue]) {
                const location = locations[selectedValue];

                if (location.coordinates) {
                    // Show map for physical locations
                    mapContainer.style.display = 'block';

                    if (!map) {
                        initializeMap();
                    }

                    addLocationMarker(location);
                } else {
                    // Hide map for online service
                    mapContainer.style.display = 'block';
                    if (map) {
                        map.remove();
                        map = null;
                    }
                    document.getElementById('map').innerHTML = '<div style="display: flex; align-items: center; justify-content: center; height: 100%; background-color: #f8f9fa; color: #333; border-radius: 8px;"><h5>Online Service - No Physical Location</h5></div>';
                }

                updateLocationInfo(location);
                locationInfoCard.style.display = 'block';

            } else {
                mapContainer.style.display = 'none';
                locationInfoCard.style.display = 'none';
            }
        });
    </script>
</body>

</html>