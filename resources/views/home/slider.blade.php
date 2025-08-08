<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Church Hero Section</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <section class="slider_section position-relative text-white">
        <!-- Background image with Bootstrap 4 overlay -->
        <div class="slider_bg_box position-absolute w-100 h-100" style="top: 0; left: 0;">
            <img src="images/dorcas.jpg" alt="church" class="w-100 h-100" style="object-fit: cover;">
            <div class="position-absolute w-100 h-100 bg-dark" style="top: 0; left: 0; opacity: 0.6; z-index: 1;"></div>
        </div>

        <!-- Carousel -->
        <div id="customCarousel1" class="carousel slide position-relative" data-bs-ride="carousel" style="z-index: 2;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container py-5">
                        <div class="row">
                            <div class="col-lg-10 col-md-10 d-flex align-items-center justify-content-center"
                                style="min-height: 100vh;">
                                <div class="detail-box text-center px-3 px-md-0">
                                    <h1 class="hero-title mb-4">
                                        Everyone's<br>
                                        Invited
                                    </h1>
                                    <p class="hero-subtitle mb-5">
                                        Wherever you are on your journey, there's a place for you at Life.Church. Here
                                        you'll find a welcoming community ready to walk through life with you.
                                    </p>

                                    <!-- Location Section -->
                                    <div class="location-section mb-4">
                                        <div class="location-icon-text mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-geo-alt me-2" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                                <path
                                                    d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                            </svg>
                                            <span class="location-text">Find Your Closest Location</span>
                                        </div>

                                        <!-- Location Dropdown -->
                                        <div class="location-selector">
                                            <select class="form-select location-dropdown"
                                                aria-label="Choose a Location">
                                                <option selected>Choose a Location</option>
                                                <option value="main">UNZA Great East Road Campus</option>
                                                <option value="north">Katima Mulilo Road Olympia Church</option>
                                                <option value="online">Online</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end carousel-item -->
            </div>
        </div>
    </section>

    <style>
        

        /* Hero Section Fonts and Styling - matching reference image */
        .hero-title {
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            font-size: 4.5rem;
            font-weight: 900;
            line-height: 1.1;
            text-align: left;
            letter-spacing: -0.02em;
            margin-top: -200px;
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
            margin-top: -200px;
            margin: 0 auto 3rem auto;
        }

        /* Location Section Styling */
        .location-section {
            max-width: 600px;
            margin: 0 auto;
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

        .location-text {
            border-bottom: 1px solid rgba(255, 255, 255, 0.7);
        }

        /* Location Dropdown Styling - matching reference image */
        .location-dropdown {
            background-color: rgba(255, 255, 255, 0.95);
            border: none;
            border-radius: 6px;
            padding: 16px 20px;
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            font-size: 1.1rem;
            font-weight: 500;
            color: #333;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            width: 100%;
            cursor: pointer;
        }

        .location-dropdown:focus {
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.3);
            outline: none;
            background-color: #fff;
        }

        .location-dropdown:hover {
            background-color: #fff;
        }

        /* Slider section positioning */
        .slider_section {
            min-height: 100vh;
            z-index: 1;
        }

        .slider_bg_box img {
            object-fit: cover;
        }

        /* Responsive Typography */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 3rem;
            }

            .hero-subtitle {
                font-size: 1.125rem;
            }

            .detail-box {
                padding: 2rem 1rem;
            }

            .location-section {
                max-width: 100%;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2.25rem;
                line-height: 1.2;
            }

            .hero-subtitle {
                font-size: 0.95rem;
            }

            .location-dropdown {
                padding: 12px 16px;
                font-size: 0.95rem;
            }
        }
    </style>


</body>

</html>