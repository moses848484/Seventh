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
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
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
            padding: 1rem 0;
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
            /* Remove any box shadow */
            outline: none !important;
            /* Remove outline on focus */
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
            margin-left: 10px;
        }

        .navbar-nav .nav-link {
            color: #666 !important;
            font-weight: 500;
            margin: 0 1rem;
            font-size: 20px !important;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #333 !important;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            height: 70vh;
            min-height: 500px;
            background: linear-gradient(rgba(0, 0, 0, 0.4),
                    rgba(0, 0, 0, 0.4)), url('images/fellow1.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
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
            font-weight: 700;
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
                        <a class="nav-link" href="#">Who We Are</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">What to Expect</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Beliefs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>You're welcome here.</h1>
            <p class="lead">At UNISDA Church, you'll find a safe place to explore your beliefs and connect with others.
            </p>
        </div>
    </section>

    <!-- Demo Content Section -->
       <section class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <!-- Card 1 -->
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="expectation-card w-100">
                        <div class="expectation-icon">
                            <i class="fa-solid fa-book-open"></i>
                        </div>
                        <h4>Weekly Services</h4>
                        <p>Join our Friday vespers and Sabbath worship.</p>
                    </div>
                </div>
               <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="expectation-card w-100">
                        <div class="expectation-icon">
                           <i class="fa-solid fa-circle-nodes"></i>
                        </div>
                        <h4>Youth Ministries</h4>
                        <p>A place for young people to connect with peers</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="expectation-card w-100">
                        <div class="expectation-icon">
                           <i class="fa-solid fa-user-graduate"></i>
                        </div>
                        <h4>Campus Ministries</h4>
                        <p>Join the Public Campus Ministries (PCM) if you are a college/university student
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Text Column -->
    <div class="col-12">
        <div class="text-area12 bg text-left text-black">
            <div class="spacer-wrapper pt-very_relaxed"></div>
            <h4 class="heading3 text-section_header mb-relaxed">
                Everyone’s Invited
            </h4>
            <div class="rich-text3 text-paragraph_large mb-relaxed" data-testid="lc-rich-text-component">
                <p>
                    UNISDA Church started with a simple idea: What if there were a church where you could just come as
                    you
                    are? Wherever you are on your journey, there’s a place for you here.
                </p>
            </div>
        </div>
        <div class="spacer-wrapper pt-normal"></div>
    </div>
    </div>
    </div>
    </div>


    <!-- Expectation Cards -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <!-- Card 1 -->
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="expectation-card w-100">
                        <div class="expectation-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4>Service Times</h4>
                        <p><strong>First Main Service:</strong> 7:30 AM</p>
                        <p><strong>Sabbath School:</strong> 9:00 AM</p>
                        <p><strong>Second Main Service:</strong> 11:00 AM</p>
                        <small>After lunch, the Continuation of day's program commences: 14:30 PM </small>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="expectation-card w-100">
                        <div class="expectation-icon">
                            <i class="fas fa-users"></i>
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
                            <i class="fas fa-tshirt"></i>
                        </div>
                        <h4>Come As You Are</h4>
                        <p>Dress comfortably! You'll see everything from casual to business attire. What matters most is
                            that you're here.</p>
                        <small>No dress code required</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-wrapper">
            <!-- First Row with Slider -->
            <div class="container1">
                <div class="card-content">
                    <!-- Image Column -->
                    <div class="arrival_bg_box4">
                        <div class="image-slider-container">
                            <div class="image-slider-wrapper" id="imageSliderWrapper1">
                                <div class="image-slide">
                                    <img src="images/fellowship.jpg" alt="Person praying" class="img-fluid1">
                                </div>
                                <div class="image-slide">
                                    <img src="images/fellow1.jpg" alt="Person praying" class="img-fluid1">
                                </div>
                                <div class="image-slide">
                                    <img src="images/fellow1.jpg" alt="Person praying" class="img-fluid1">
                                </div>
                            </div>

                            <!-- Navigation buttons -->
                            <button class="image-slider-nav image-slider-prev" id="imageSliderPrevBtn1">‹</button>
                            <button class="image-slider-nav image-slider-next" id="imageSliderNextBtn1">›</button>

                            <!-- Indicators -->
                            <div class="image-slider-indicators" id="imageSliderIndicators1">
                                <div class="image-slider-indicator active" data-slide="0"></div>
                                <div class="image-slider-indicator" data-slide="1"></div>
                                <div class="image-slider-indicator" data-slide="2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Text Column -->
                <div class="text-area bg text-left text-black">
                    <div class="spacer-wrapper pt-very_relaxed"></div>
                    <h1 class="heading4 text-section_header3 mb-relaxed">
                        Annual Theme ~ More Like Jesus
                    </h1>
                    <div class="rich-text3 text-paragraph_large mb-relaxed">
                        <h6>
                            “And this is eternal life, that they may know You, the only true God, and Jesus Christ whom
                            You
                            have sent.” ~ John 17:3
                        </h6>
                    </div>
                </div>
            </div>

            <!-- Second Row with Slider -->
            <div class="container1">
                <div class="card-content">
                    <!-- Image Column -->
                    <div class="arrival_bg_box4">
                        <div class="image-slider-container">
                            <div class="image-slider-wrapper" id="imageSliderWrapper2">
                                <div class="image-slide">
                                    <img src="images/baptism.jpg" alt="Person praying" class="img-fluid1">
                                </div>
                                <div class="image-slide">
                                    <img src="images/baptism-certificate.jpg" alt="Person praying" class="img-fluid1">
                                </div>
                                <div class="image-slide">
                                    <img src="images/certificate.jpg" alt="Person praying" class="img-fluid1">
                                </div>
                            </div>

                            <!-- Navigation buttons -->
                            <button class="image-slider-nav image-slider-prev" id="imageSliderPrevBtn2">‹</button>
                            <button class="image-slider-nav image-slider-next" id="imageSliderNextBtn2">›</button>

                            <!-- Indicators -->
                            <div class="image-slider-indicators" id="imageSliderIndicators2">
                                <div class="image-slider-indicator active" data-slide="0"></div>
                                <div class="image-slider-indicator" data-slide="1"></div>
                                <div class="image-slider-indicator" data-slide="2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Text Column -->
                <div class="text-area bg text-left text-black">
                    <div class="spacer-wrapper pt-very_relaxed"></div>
                    <h1 class="heading4 text-section_header3 mb-relaxed">
                        Baptism
                    </h1>
                    <div class="rich-text3 text-paragraph_large mb-relaxed">
                        <h6>
                            “ Jesus answered, Verily, verily, I say unto thee, Except a man be born of water and of the
                            Spirit, he cannot
                            enter into the kingdom of God.” ~ John 3:5
                        </h6>
                    </div>
                </div>
            </div>

            <!-- Third Row with Slider -->
            <div class="container1">
                <div class="card-content">
                    <!-- Image Column -->
                    <div class="arrival_bg_box4">
                        <div class="image-slider-container">
                            <div class="image-slider-wrapper" id="imageSliderWrapper3">
                                <div class="image-slide">
                                    <img src="images/kids3.jpg" alt="Person praying" class="img-fluid1">
                                </div>
                                <div class="image-slide">
                                    <img src="images/kids.jpg" alt="Person praying" class="img-fluid1">
                                </div>
                                <div class="image-slide">
                                    <img src="images/kids4.jpg" alt="Person praying" class="img-fluid1">
                                </div>
                            </div>

                            <!-- Navigation buttons -->
                            <button class="image-slider-nav image-slider-prev" id="imageSliderPrevBtn3">‹</button>
                            <button class="image-slider-nav image-slider-next" id="imageSliderNextBtn3">›</button>

                            <!-- Indicators -->
                            <div class="image-slider-indicators" id="imageSliderIndicators3">
                                <div class="image-slider-indicator active" data-slide="0"></div>
                                <div class="image-slider-indicator" data-slide="1"></div>
                                <div class="image-slider-indicator" data-slide="2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Text Column -->
                <div class="text-area bg text-left text-black">
                    <div class="spacer-wrapper pt-very_relaxed"></div>
                    <h1 class="heading4 text-section_header3 mb-relaxed">
                        Sabbath School
                    </h1>
                    <!-- Space between heading and text -->
                    <div class="spacer-wrapper pb-relaxed"></div>

                    <div class="rich-text3 text-paragraph_large mb-relaxed">
                        <h6>
                            “ But Jesus said, Suffer little children, and forbid them not, to come unto me: for of such
                            is
                            the kingdom of heaven..” ~ Mathew 19:14
                        </h6>
                    </div>
                </div>
            </div>
        </div>


        <script>
            class ContentImageSlider {
                constructor(sliderId) {
                    this.sliderId = sliderId;
                    this.currentSlide = 0;
                    this.totalSlides = 3;
                    this.sliderWrapper = document.getElementById(`imageSliderWrapper${sliderId}`);
                    this.prevBtn = document.getElementById(`imageSliderPrevBtn${sliderId}`);
                    this.nextBtn = document.getElementById(`imageSliderNextBtn${sliderId}`);
                    this.indicators = document.querySelectorAll(`#imageSliderIndicators${sliderId} .image-slider-indicator`);

                    this.init();
                }

                init() {
                    // Add event listeners
                    this.prevBtn.addEventListener('click', () => this.previousSlide());
                    this.nextBtn.addEventListener('click', () => this.nextSlide());

                    // Add indicator click events
                    this.indicators.forEach((indicator, index) => {
                        indicator.addEventListener('click', () => this.goToSlide(index));
                    });

                    // Add keyboard navigation (only when slider is focused)
                    this.sliderWrapper.addEventListener('keydown', (e) => {
                        if (e.key === 'ArrowLeft') this.previousSlide();
                        if (e.key === 'ArrowRight') this.nextSlide();
                    });

                    // Make slider focusable for keyboard navigation
                    this.sliderWrapper.setAttribute('tabindex', '0');

                    // Optional: Auto-play slider
                    this.startAutoPlay();
                }

                nextSlide() {
                    this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
                    this.updateSlider();
                }

                previousSlide() {
                    this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
                    this.updateSlider();
                }

                goToSlide(slideIndex) {
                    this.currentSlide = slideIndex;
                    this.updateSlider();
                }

                updateSlider() {
                    // Move slider
                    const translateX = -this.currentSlide * (100 / this.totalSlides);
                    this.sliderWrapper.style.transform = `translateX(${translateX}%)`;

                    // Update indicators
                    this.indicators.forEach((indicator, index) => {
                        indicator.classList.toggle('active', index === this.currentSlide);
                    });
                }

                startAutoPlay() {
                    // Auto-advance every 5 seconds
                    setInterval(() => {
                        this.nextSlide();
                    }, 5000);
                }
            }

            // Initialize all sliders when DOM is loaded
            document.addEventListener('DOMContentLoaded', () => {
                new ContentImageSlider('1');
                new ContentImageSlider('2');
                new ContentImageSlider('3');
            });
        </script>
    </section>
    <!-- footer start -->
    @include('home.footer')
    <!-- footer end -->
    <!-- Font Awesome + Bootstrap JS -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>