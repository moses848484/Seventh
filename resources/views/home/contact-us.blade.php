<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="https://seventh-production.up.railway.app/images/sda3.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>What to Expect - SDA Church</title>
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/bootstrap.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/style.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/responsive.css" />
    <link rel="stylesheet"
        href="https://seventh-production.up.railway.app/css/fontawesome-free-6.5.2-web/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <style>
        body {
            margin: 0;
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            color: #c3c3c3ff;
            background-color: #f8f9fa;
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
            background-color: #000;
            border-radius: 2px 2px 0 0;
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

        .hero-section .lead {
            font-size: 1.4rem;
            font-weight: 400;
            line-height: 1.6;
            opacity: 0.95;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
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
        }

        @media (max-width: 576px) {
            .hero-section h1 {
                font-size: 2rem;
            }

            .hero-section .lead {
                font-size: 1.1rem;
            }
        }

        .lead {
            color: white;
        }

        /* Updated Demo Content Cards - with repositioned text */
        .demo-card {
            background: #ffffff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            display: flex;
            align-items: flex-start;
            gap: 20px;
            height: 100%;
            margin-bottom: 1.5rem;
        }

        .demo-card:hover {
            transform: translateY(-5px);
        }

        .demo-card-icon {
            width: 80px;
            height: 80px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            font-size: 28px;
            color: white;
            flex-shrink: 0;
        }

        .demo-card-icon.teal {
            background: linear-gradient(135deg, #4ade80, #22d3ee);
        }

        .demo-card-icon.blue {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        }

        .demo-card-icon.purple {
            background: linear-gradient(135deg, #8b5cf6, #7c3aed);
        }

        .demo-card-content {
            flex: 1;
            text-align: left;
            /* Keep text left-aligned */
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            /* Move text higher */
            padding: 0;
            /* Remove vertical padding completely */
            margin-top: -15px;
            /* Pull text up slightly */
        }

        .demo-card h4 {
            color: #333;
            /* Changed from white to dark */
            font-weight: 600;
            font-size: 1.4rem;
            margin-bottom: 15px;
            text-align: left;
            /* Keep left-aligned */
            margin-top: 0;
            /* Remove default top margin */
        }

        .demo-card p {
            color: #666;
            /* Changed from light gray to darker gray for better readability */
            margin: 5px 0;
            /* Reduced margin between paragraphs */
            line-height: 1.6;
            font-size: 1rem;
            text-align: left;
            /* Keep left-aligned */
        }

        .demo-card .contact-info {
            color: #22d3ee;
            text-decoration: none;
            font-weight: 500;
        }

        .demo-card .contact-info:hover {
            color: #0ea5e9;
            text-decoration: none;
        }

        /* Original expectation cards remain unchanged */
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
        }

        .expectation-card:hover {
            transform: translateY(-5px);
        }

        .expectation-icon {
            width: 60px;
            height: 60px;
            background: #667eea;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 24px;
            color: white;
        }

        h4,
        h3,
        h2 {
            color: #333;
        }

        p,
        small {
            color: #555;
        }

        .text-area12 h4 {
            color: #333;
        }

        .text-area12 p {
            color: #666;
        }

        /* Optional smaller adjustments on mobile */
        @media (max-width: 800px) {
            .demo-card {
                padding: 20px;
                gap: 15px;
            }

            .demo-card-icon {
                width: 60px;
                height: 60px;
                font-size: 24px;
            }

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

        /* Image Slider-specific styles - using unique class names */
        .image-slider-container {
            position: relative;
            width: 100%;
            height: 300px;
        }

        .image-slider-wrapper {
            display: flex;
            width: 300%;
            height: 100%;
            transition: transform 0.5s ease-in-out;
        }

        .image-slide {
            width: 33.333%;
            height: 100%;
        }

        .image-slider-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.6);
            color: white;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            z-index: 10;
        }

        .image-slider-nav:hover {
            background: rgba(255, 255, 255, 0.8);
        }

        .image-slider-prev {
            left: 10px;
        }

        .image-slider-next {
            right: 10px;
        }

        .image-slider-indicators {
            position: absolute;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
            z-index: 10;
        }

        .image-slider-indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .image-slider-indicator.active {
            background: rgba(255, 255, 255, 1);
        }

        /* Ensure arrival_bg_box4 has position relative for slider positioning */
        .arrival_bg_box4 {
            position: relative;
        }

        .text-paragraph_large {
            margin-top: 10px !important;
        }

        .text-section_header3 {
            margin-top: 10px !important;
        }

        .service-icon {
            width: 50px;
            height: 50px;
            border-radius: 0%;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: 700;
            margin-right: 0px;
            letter-spacing: -0.5px;
        }

        .service-icon.youth {
            background-color: #1a1a1a;
        }

        .phone {
            color: #00aaff !important;
        }

        .email {
            color: #00aaff !important;
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
                        <a class="nav-link second-nav" href="{{ route('who-we-are') }}">Who We Are</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="{{ route('what-to-expect') }}">What to Expect</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav active" href="{{ route('contact-us') }}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="{{ route('our-beliefs') }}">Our Beliefs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Text Column -->
    <div class="py-5">
        <div class="container">
            <div class="text-area12 text-left text-black p-4 rounded" style="background-color: white !important;">
                <div class="spacer-wrapper pt-very_relaxed"></div>
                <h4 class="heading3 text-section_header mb-relaxed">
                    How can we help?
                </h4>
                <div class="rich-text3 text-paragraph_large mb-relaxed" data-testid="lc-rich-text-component">
                    <p>
                        Thanks for getting in touch with us. We look forward to getting to know you better! To get you
                        to the team who can best serve you, here are some of the areas we connect people to most
                        frequently.
                    </p>
                </div>
            </div>
            <div class="spacer-wrapper pt-normal"></div>
        </div>
    </div>

    <!-- Updated Demo Content Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- First Row -->
                <div class="col-lg-6 mb-4">
                    <div class="demo-card">
                        <div class="demo-card-icon teal">
                            <i class="fa-solid fa-hand-holding-heart"></i>
                        </div>
                        <div class="demo-card-content">
                            <h4>Giving Help</h4>
                            <p>We're grateful for your generosity! We'd love to share more about what it means to tithe,
                                where your gifts go, and answer any questions you have about giving at Life.Church.</p>
                            <p class="phone">0974752637</p>
                            <a class="email" href="{{ route('our-beliefs') }}">giving@unisda.com</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="demo-card">
                        <div class="demo-card-icon light">
                            <img src="images/sda3.png" alt="Service Icon" class="service-icon"
                                style="width: 50px; height: 50px;">
                        </div>
                        <div class="demo-card-content">
                            <h4>Unisda Church Careers</h4>
                            <p>We’re excited you’re interested in joining the Unisda Church team! Want to learn more
                                about
                                what it’s like to work at Unisda Church? Curious about our open roles? We’d love to tell
                                you more.</p>
                            <p class="phone">Explore Careers at Unisda Church.</p>
                           <a class="phone" href="{{ route('our-beliefs') }}">careers@unisda.com</a>
                        </div>
                    </div>
                </div>

                <!-- Second Row -->
                <div class="col-lg-6 mb-4">
                    <div class="demo-card">
                        <div class="demo-card-icon purple">
                            <i class="fa-solid fa-hands-praying"></i>
                        </div>
                        <div class="demo-card-content">
                            <h4>Prayer Needs</h4>
                            <p>We would be honored to pray with you! We’ve got teams passionate about doing just that,
                                so please share how we can be praying for you this week.</p>
                            <a class="phone" href="{{ route('our-beliefs') }}">Share Your Prayer Request</a>
                        </div>
                    </div>
                </div>

                      <!-- Third Row -->
                <div class="col-lg-6 mb-4">
                    <div class="demo-card">
                        <div class="demo-card-icon blue">
                            <i class="fa-solid fa-bible"></i>
                        </div>
                        <div class="demo-card-content">
                            <h4>Bible Study</h4>
                            <p>Join our weekly Bible study sessions and grow deeper in God's word</p>
                            <a class="phone" href="{{ route('our-beliefs') }}">View Bible Study details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer start -->
    @include('home.footer')

    <!-- Font Awesome + Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Simple navigation active state handler
        document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('.nav-link.second-nav');

            navLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    // Remove active class from all links
                    navLinks.forEach(l => l.classList.remove('active'));

                    // Add active class to clicked link
                    this.classList.add('active');
                });
            });
        });
    </script>
</body>

</html>