<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="https://seventh-production.up.railway.app/images/sda3.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Our Leadership - SDA Church</title>
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/bootstrap.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/style.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/responsive.css" />
    <link rel="stylesheet"
        href="https://seventh-production.up.railway.app/css/fontawesome-free-6.5.2-web/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <style>
        body {
            margin: 0;
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
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

        /* Hero Section */
        .hero-section {
            position: relative;
            height: 70vh;
            min-height: 500px;
            background: linear-gradient(rgba(0, 0, 0, 0.4),
                    rgba(0, 0, 0, 0.4)), url('https://images.unsplash.com/photo-1438032005730-c779502df39b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
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

        .mission {
            font-size: medium !important;
        }

        /* Leadership Header */
        .leadership-header {
            text-align: center;
            padding: 60px 20px 40px;
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

        /* Leadership Grid - FIXED */
        .leadership-grid {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .leadership-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
            align-items: flex-start;
        }

        .leader-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 0 0 auto;
            max-width: 400px;
        }

        .leader-image-container {
            position: relative;
            width: 300px;
            height: 400px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .leader-image-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.2);
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
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
            color: white;
            padding: 40px 20px 20px;
            text-align: center;
        }

        .leader-name {
            font-size: 1.8rem;
            font-weight: bold;
            margin: 0 0 0.5rem 0;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .leader-position {
            font-size: 1rem;
            margin: 0;
            opacity: 0.9;
            font-style: italic;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .leader-button-container {
            margin-top: 1.5rem;
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
            background-color: #fff;
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

            .leadership-header h1 {
                font-size: 2.2rem;
            }

            .leadership-header p {
                font-size: 1rem;
            }

            .leadership-grid {
                padding: 30px 15px;
            }

            .leadership-row {
                flex-direction: column;
                gap: 30px;
            }

            .leader-image-container {
                width: 280px;
                height: 370px;
            }

            .leader-name {
                font-size: 1.6rem;
            }

            .leader-position {
                font-size: 0.9rem;
            }

            .get-to-know-btn {
                padding: 10px 25px;
                font-size: 0.9rem;
            }

            .text-area12 h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .hero-section h1 {
                font-size: 2rem;
            }

            .hero-section .lead {
                font-size: 1.1rem;
            }

            .leadership-grid {
                padding: 20px 10px;
            }

            .leadership-header {
                padding: 40px 15px 30px;
            }

            .leader-image-container {
                width: 250px;
                height: 330px;
            }

            .leader-name {
                font-size: 1.4rem;
            }

            .get-to-know-btn {
                padding: 8px 20px;
                font-size: 0.85rem;
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
    </style>
</head>

<body>
    <!-- Simulated header placeholder -->
    <div style="height: 60px; background: #f8f9fa; display: flex; align-items: center; justify-content: center;">
        <span style="color: #666;">Header Placeholder</span>
    </div>

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
                        <a class="nav-link second-nav active" href="#">Who We Are</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="#">What to Expect</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="#">Our Leadership</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content mb-4">
            <h1 class="mission">Our Mission</h1>
            <h1>To lead people to become fully devoted followers of Christ.</h1>
            <p class="lead mb-4">That's how we're able to make a difference. And it's the driving force behind
                everything we do.
            </p>
        </div>
    </section>

    <!-- Our Story Section -->
    <div class="col-12">
        <div class="text-area12 bg text-left text-black">
            <div class="spacer-wrapper pt-very_relaxed"></div>
            <h2>Our Story</h2>
            <div class="rich-text3 text-paragraph_large mb-relaxed" data-testid="lc-rich-text-component">
                <p>
                    When the University SDA Church began in 1980, Pastor A. Walubita gathered a small group of
                    Seventh-day Adventist believers from the University of Zambia staff and students.
                </p>

                <p>
                    From worshiping in classrooms and borrowed spaces, we grew into a vibrant church family.
                    In 2000, we found our home on Katima Mulilo Road, and by 2008, our permanent building was
                    completed and dedicated to God's service.
                </p>

                <p>
                    Today, we're a thriving, Christ-centered community committed to sharing the gospel and
                    serving our neighborhood. Our doors are always open to anyone seeking to worship, grow,
                    and belong.
                </p>
            </div>
        </div>
        <div class="spacer-wrapper pt-normal"></div>
    </div>

    <!-- Leadership Section Header -->
    <div class="leadership-header">
        <h1>Our Leadership</h1>
        <p>Our Directional Leadership Team works together to shape the vision and direction of our church.</p>
    </div>

    <!-- Leadership Section -->
    <div class="leadership-grid">
        <div class="leadership-row">
            <div class="leader-card">
                <div class="leader-image-container">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80"
                        alt="Craig Groeschel" class="leader-image">
                    <div class="leader-overlay">
                        <h3 class="leader-name">Craig Groeschel</h3>
                        <p class="leader-position">Senior Pastor</p>
                    </div>
                </div>
                <div class="leader-button-container">
                    <a href="#" class="get-to-know-btn">Get to Know Craig</a>
                </div>
            </div>

            <div class="leader-card">
                <div class="leader-image-container">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80"
                        alt="Bobby Gruenewald" class="leader-image">
                    <div class="leader-overlay">
                        <h3 class="leader-name">Bobby Gruenewald</h3>
                        <p class="leader-position">Pastor, Innovation Leader</p>
                    </div>
                </div>
                <div class="leader-button-container">
                    <a href="#" class="get-to-know-btn">Get to Know Bobby</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Simulated footer placeholder -->
    <div style="height: 100px; background: #333; display: flex; align-items: center; justify-content: center; margin-top: 40px;">
        <span style="color: white;">Footer Placeholder</span>
    </div>

    <!-- Font Awesome + Bootstrap JS -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple navigation active state handler
        document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('.nav-link.second-nav');

            navLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
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