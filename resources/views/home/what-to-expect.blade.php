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
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/css/fontawesome-free-6.5.2-web/css/all.min.css" />

    <style>
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0;
            margin-top: 90px;
        }
        .expectation-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            height: 100%;
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
            margin-bottom: 20px;
            font-size: 24px;
            color: white;
        }
        .main-content {
            background-color: #f8f9fa;
            min-height: 100vh;
        }
        .back-to-home {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1000;
            background: rgba(255,255,255,0.9);
            border-radius: 50px;
            padding: 10px 20px;
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .back-to-home:hover {
            background: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            color: #667eea;
            text-decoration: none;
        }
        @media (max-width: 768px) {
            .hero-section {
                margin-top: 70px;
                padding: 60px 0;
            }
            .back-to-home {
                padding: 8px 15px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
<div class="hero_area">
    <div class="container-scroller">
        <!-- header section starts -->
        @include('home.header')
        <!-- end header section -->

        <a href="{{ url('/') }}" class="back-to-home">
            <i class="fa fa-arrow-left mr-2"></i>Back to Home
        </a>

        <div class="main-content">
            <!-- Hero Section -->
            <section class="hero-section text-center">
                <div class="container">
                    <h1 class="display-4 mb-4">What to Expect</h1>
                    <p class="lead">Your first visit to University SDA Church - we're excited to welcome you!</p>
                </div>
            </section>

            <!-- Main Content -->
            <section class="py-5">
                <div class="container">
                    <!-- Welcome Message -->
                    <div class="row mb-5">
                        <div class="col-lg-8 mx-auto text-center">
                            <h2 class="mb-4">We're Glad You're Coming!</h2>
                            <p class="lead text-muted">
                                Whether this is your first time visiting a church or you're familiar with church services, 
                                we want you to feel comfortable and know what to expect when you visit University SDA Church.
                            </p>
                        </div>
                    </div>

                    <!-- What to Expect Cards -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="expectation-card text-center">
                                <div class="expectation-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <h4>Service Times</h4>
                                <p><strong>Sabbath School:</strong> 9:30 AM</p>
                                <p><strong>Worship Service:</strong> 11:00 AM</p>
                                <p><strong>Prayer Meeting:</strong> Wed 7:00 PM</p>
                                <small class="text-muted">Services last 60-90 min</small>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="expectation-card text-center">
                                <div class="expectation-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <h4>Friendly Atmosphere</h4>
                                <p>Our greeters will welcome you at the door and help you find your way. Our community is warm and welcoming!</p>
                                <small class="text-muted">Feel free to introduce yourself</small>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="expectation-card text-center">
                                <div class="expectation-icon">
                                    <i class="fas fa-tshirt"></i>
                                </div>
                                <h4>Come As You Are</h4>
                                <p>Dress comfortably! You'll see everything from casual to business attire. What matters most is that you're here.</p>
                                <small class="text-muted">No dress code required</small>
                            </div>
                        </div>
                    </div>

                    <!-- Call to Action -->
                    <div class="row mt-5 mb-5">
                        <div class="col-lg-8 mx-auto text-center">
                            <div class="bg-light p-5 rounded">
                                <h3>Ready to Visit?</h3>
                                <p class="lead">We can't wait to meet you and welcome you into our church family!</p>
                                <a href="{{ url('/') }}" class="btn btn-primary btn-lg mr-3">Back to Home</a>
                                <a href="mailto:info@universitysda.church" class="btn btn-outline-primary btn-lg">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- footer start -->
        @include('home.footer')
        <!-- footer end -->

        <script src="https://seventh-production.up.railway.app/home/js/jquery-3.4.1.min.js"></script>
        <script src="https://seventh-production.up.railway.app/home/js/popper.min.js"></script>
        <script src="https://seventh-production.up.railway.app/home/js/bootstrap.js"></script>
        <script src="https://seventh-production.up.railway.app/home/js/custom.js"></script>
    </div>
</div>
</body>
</html>
