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

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fa;
        }

        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0;
        }

        .hero-section .container h1,
        .hero-section .container p.lead {
            display: block;
            width: 100%;
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
            margin-bottom: 1.5rem; /* Added margin-bottom here for spacing */
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
            color: #000;
        }

        p,
        small {
            color: #555;
        }

        .lead {
            color: white;
        }

        /* Optional smaller adjustments on mobile */
        @media (max-width: 576px) {
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
    </style>
</head>

<body>
    @include('home.header')

    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 mb-4">What to Expect</h1>
            <p class="lead">Your first visit to University SDA Church - we're excited to welcome you!</p>
        </div>
    </section>

    <!-- Expectation Cards -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <!-- Card 1 -->
                <div class="col-12 col-sm-6 col-md-4 d-flex">
                    <div class="expectation-card w-100">
                        <div class="expectation-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4>Service Times</h4>
                        <p><strong>Sabbath School:</strong> 9:30 AM</p>
                        <p><strong>Worship Service:</strong> 11:00 AM</p>
                        <p><strong>Prayer Meeting:</strong> Wed 7:00 PM</p>
                        <small>Services last 60-90 min</small>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-sm-6 col-md-4 d-flex">
                    <div class="expectation-card w-100">
                        <div class="expectation-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Friendly Atmosphere</h4>
                        <p>Our greeters will welcome you at the door and help you find your way. Our community is warm and welcoming!</p>
                        <small>Feel free to introduce yourself</small>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-sm-6 col-md-4 d-flex">
                    <div class="expectation-card w-100">
                        <div class="expectation-icon">
                            <i class="fas fa-tshirt"></i>
                        </div>
                        <h4>Come As You Are</h4>
                        <p>Dress comfortably! You'll see everything from casual to business attire. What matters most is that you're here.</p>
                        <small>No dress code required</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Font Awesome + Bootstrap JS -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
