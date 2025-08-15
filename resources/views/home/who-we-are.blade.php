<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="https://seventh-production.up.railway.app/images/sda3.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Who We Are - SDA Church</title>
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
                    rgba(0, 0, 0, 0.4)), url('images/church-history.jpg');
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
            color: white;
        }

        /* Content sections */
        .content-section {
            padding: 80px 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 2rem;
            text-align: center;
        }

        .section-subtitle {
            font-size: 1.3rem;
            color: #666;
            text-align: center;
            margin-bottom: 4rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .history-card {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
            transition: transform 0.3s ease;
        }

        .history-card:hover {
            transform: translateY(-5px);
        }

        .history-year {
            font-size: 1.5rem;
            font-weight: 700;
            color: #e4af00;
            margin-bottom: 1rem;
        }

        .mission-vision-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }

        .mission-card, .vision-card {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            height: 100%;
        }

        .mission-icon, .vision-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            font-size: 30px;
            color: white;
        }

        .mission-icon {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .vision-icon {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }

        /* Leadership section */
        .leadership-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 2rem;
            transition: transform 0.3s ease;
        }

        .leadership-card:hover {
            transform: translateY(-5px);
        }

        .leader-photo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            color: white;
        }

        .leader-name {
            font-size: 1.3rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 0.5rem;
        }

        .leader-title {
            color: #666;
            margin-bottom: 1rem;
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

            .section-title {
                font-size: 2rem;
            }

            .content-section {
                padding: 60px 0;
            }
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
                        <a class="nav-link second-nav active" href="{{ route('who-we-are') }}">Who We Are</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="{{ route('what-to-expect') }}">What to Expect</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="{{ route('our-beliefs') }}">Our Beliefs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>Who We Are</h1>
            <p class="lead">Discover our story, mission, and the people who make UNISDA Church a welcoming community for all.</p>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="content-section">
        <div class="container">
            <h2 class="section-title">Our Story</h2>
            <p class="section-subtitle">From humble beginnings to a thriving community of faith</p>
            
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="history-card">
                        <div class="history-year">Our Beginning</div>
                        <p>UNISDA Church was founded with a vision to create a place where people from all walks of life could come together in worship, fellowship, and service. Our journey began when a small group of dedicated believers saw the need for a church that truly embodied the message of love, acceptance, and spiritual growth.</p>
                    </div>
                    
                    <div class="history-card">
                        <div class="history-year">Growing Together</div>
                        <p>Over the years, our congregation has grown not just in numbers, but in diversity and strength. We've welcomed students, families, young professionals, and seniors, creating a rich tapestry of experiences and perspectives that enriches our worship and community life.</p>
                    </div>
                    
                    <div class="history-card">
                        <div class="history-year">Today</div>
                        <p>Today, UNISDA Church stands as a beacon of hope in our community. We continue to uphold our founding principles while adapting to meet the needs of our modern congregation. Our doors remain open to all who seek spiritual growth, community, and purpose.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="content-section mission-vision-section">
        <div class="container">
            <h2 class="section-title">Our Mission & Vision</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="mission-card">
                        <div class="mission-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3>Our Mission</h3>
                        <p>To create a welcoming community where people can explore their faith, grow spiritually, and serve others with love and compassion. We strive to be a place where everyone can come as they are and find acceptance, purpose, and hope.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="vision-card">
                        <div class="vision-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3>Our Vision</h3>
                        <p>To be a transformative force in our community, spreading love, hope, and healing through our actions and worship. We envision a world where faith bridges differences and brings people together in unity and service.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Section -->
    <section class="content-section">
        <div class="container">
            <h2 class="section-title">Our Leadership</h2>
            <p class="section-subtitle">Meet the dedicated individuals who guide our spiritual journey</p>
            
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="leadership-card">
                        <div class="leader-photo">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="leader-name">Pastor John Smith</div>
                        <div class="leader-title">Senior Pastor</div>
                        <p>Leading our congregation with wisdom and compassion for over 10 years, Pastor Smith brings a heart for service and a passion for teaching God's word.</p>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="leadership-card">
                        <div class="leader-photo">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="leader-name">Dr. Sarah Johnson</div>
                        <div class="leader-title">Associate Pastor</div>
                        <p>Dr. Johnson oversees our youth and campus ministries, bringing fresh perspectives and innovative approaches to ministry.</p>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="leadership-card">
                        <div class="leader-photo">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="leader-name">Elder Michael Davis</div>
                        <div class="leader-title">Church Elder</div>
                        <p>A pillar of our community for many years, Elder Davis provides guidance and support to our various ministry programs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="content-section" style="background: #f8f9fa;">
        <div class="container">
            <h2 class="section-title">Our Core Values</h2>
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="text-center">
                        <div class="mission-icon mx-auto mb-3">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h4>Service</h4>
                        <p>We believe in serving our community and those in need with genuine love and dedication.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="text-center">
                        <div class="vision-icon mx-auto mb-3">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Community</h4>
                        <p>Building strong relationships and fostering a sense of belonging for everyone who walks through our doors.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="text-center">
                        <div class="mission-icon mx-auto mb-3">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h4>Growth</h4>
                        <p>Encouraging continuous spiritual growth and learning in a supportive environment.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="text-center">
                        <div class="vision-icon mx-auto mb-3">
                            <i class="fas fa-dove"></i>
                        </div>
                        <h4>Peace</h4>
                        <p>Promoting peace, understanding, and unity in our diverse community and beyond.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer start -->
    @include('home.footer')
    <!-- footer end -->

    <!-- Font Awesome + Bootstrap JS -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Navigation active state handler
        document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('.nav-link.second-nav');
            const currentPath = window.location.pathname;

            navLinks.forEach(link => {
                // Remove active class from all links first
                link.classList.remove('active');
                
                // Add active class to current page link
                if (link.getAttribute('href') === currentPath || 
                    (currentPath.includes('who-we-are') && link.textContent.trim() === 'Who We Are')) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>

</html>