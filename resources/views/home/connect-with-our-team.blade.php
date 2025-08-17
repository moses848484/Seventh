<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="https://seventh-production.up.railway.app/images/sda3.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Connect With Our Team - SDA Church</title>
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

        .contact-form {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
        }

        .form-group label {
            color: #333;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 12px 15px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
            border-radius: 8px;
            padding: 12px 30px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: transform 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }

        .contact-info-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 20px 0;
        }

        .contact-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 24px;
            color: white;
        }

        .text-area12 h2, .text-area12 h4 {
            color: #333;
        }

        .text-area12 p {
            color: #666;
        }

        @media (max-width: 768px) {
            .contact-form, .contact-info-card {
                padding: 20px;
                margin: 15px 0;
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
                        <a class="nav-link second-nav" href="{{ route('who-we-are') }}">Who We Are</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="{{ route('what-to-expect') }}">What to Expect</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="{{ route('contact-us') }}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="{{ route('our-beliefs') }}">Our Beliefs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav active" href="{{ route('connect-with-our-team') }}">Connect With Our Team</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <div class="py-5">
        <div class="container">
            <div class="text-area12 text-center text-black p-4 rounded" style="background-color: white !important;">
                <h2 class="mb-4">Connect With Our Team</h2>
                <p class="lead">We'd love to hear from you! Whether you have questions, need prayer, or want to get more involved in our church community, our team is here to help.</p>
            </div>
        </div>
    </div>

    <!-- Contact Form and Info Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Contact Form -->
                <div class="col-lg-8 mb-4">
                    <div class="contact-form">
                        <h4 class="mb-4">Send us a message</h4>
                        <form action="#" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_name">First Name *</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="last_name">Last Name *</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address *</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject *</label>
                                <select class="form-control" id="subject" name="subject" required>
                                    <option value="">Select a topic...</option>
                                    <option value="prayer_request">Prayer Request</option>
                                    <option value="giving_help">Giving Help</option>
                                    <option value="career_inquiry">Career Inquiry</option>
                                    <option value="groups">Unisdagroups</option>
                                    <option value="general_inquiry">General Inquiry</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tell us how we can help you..." required></textarea>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter">
                                    <label class="form-check-label" for="newsletter">
                                        I'd like to receive updates and newsletters from Unisda Church
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fa-solid fa-paper-plane me-2"></i>Send Message
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-4">
                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <h5>Call Us</h5>
                        <p>+260 974 752 637<br>Available Monday - Friday<br>9:00 AM - 5:00 PM</p>
                    </div>

                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <h5>Email Us</h5>
                        <p>info@unisda.com<br>We'll respond within 24 hours</p>
                    </div>

                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <h5>Visit Us</h5>
                        <p>Unisda Church<br>Lusaka, Zambia<br>Sunday Services: 9:00 AM & 11:00 AM</p>
                    </div>

                    <div class="contact-info-card">
                        <div class="contact-icon">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <h5>Office Hours</h5>
                        <p>Monday - Friday: 9:00 AM - 5:00 PM<br>Saturday: 9:00 AM - 2:00 PM<br>Sunday: After Services</p>
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

        // Form submission handler (you can customize this)
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
        });
    </script>
</body>

</html>