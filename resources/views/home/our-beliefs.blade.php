<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="https://seventh-production.up.railway.app/images/sda3.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Our Beliefs - SDA Church</title>
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/bootstrap.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/style.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/responsive.css" />
    <link rel="stylesheet"
        href="https://seventh-production.up.railway.app/css/fontawesome-free-6.5.2-web/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            color: #c3c3c3ff;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .main-content {
            flex: 1;
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

    <!-- Main Content -->
    <main class="main-content">
        <!-- Content Section -->
        <div class="content-section">
            <div class="container">
                <div class="text-area12 text-left text-black p-4 rounded" style="background-color: white !important;">
                    <div class="spacer-wrapper pt-very_relaxed"></div>
                    <h4 class="heading3 text-section_header mb-relaxed">
                        Coming Soon
                    </h4>
                    <div class="rich-text3 text-paragraph_large mb-relaxed" data-testid="lc-rich-text-component">
                        <p>
                            Our beliefs page is currently under construction. Please check back soon to learn more about
                            our foundational beliefs and doctrines.
                        </p>
                        <p>
                            In the meantime, feel free to explore our other pages or contact us if you have any specific
                            questions about our faith and practices.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

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