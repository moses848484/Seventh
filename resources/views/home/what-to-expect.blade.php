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

        /* Image Slider-specific styles - FIXED VERSION */
        .image-slider-container {
            position: relative;
            width: 100%;
            height: 400px;
            /* Set a fixed height for the slider container */
            overflow: hidden;
            /* Hide overflow to prevent stretching */
            border-radius: 10px;
            /* Optional: rounded corners */
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
            position: relative;
        }

        /* FIXED: Proper image styling to prevent stretching */
        .img-fluid1 {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* This prevents stretching and maintains aspect ratio */
            object-position: center;
            /* Centers the image within the container */
            display: block;
        }

        .image-slider-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
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
            background: rgba(0, 0, 0, 0.7);
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

        /* Container styles for the content sections */
        .container-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .container1 {
            display: flex;
            align-items: center;
            margin-bottom: 60px;
            gap: 40px;
            flex-wrap: wrap;
        }

        .card-content {
            flex: 1;
            min-width: 300px;
        }

        .text-area {
            flex: 1;
            min-width: 300px;
            padding: 30px;
        }

        .arrival_bg_box4 {
            position: relative;
        }

        .heading4 {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .rich-text3 h6 {
            font-size: 1.1rem;
            line-height: 1.6;
            font-style: italic;
            color: #666;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .container1 {
                flex-direction: column;
                text-align: center;
            }

            .image-slider-container {
                height: 300px;
                /* Smaller height on mobile */
            }

            .heading4 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
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
                        <p>Our greeters will welcome you at the door and help you find your way. Our community is warm
                            and welcoming!</p>
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
                    <h1 class="heading4 text-section_header3 mb-relaxed">
                        Annual Theme ~ More Like Jesus
                    </h1>
                    <div class="rich-text3 text-paragraph_large mb-relaxed">
                        <h6>
                            "And this is eternal life, that they may know You, the only true God, and Jesus Christ whom
                            You have sent." ~ John 17:3
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
                    <h1 class="heading4 text-section_header3 mb-relaxed">
                        Baptism
                    </h1>
                    <div class="rich-text3 text-paragraph_large mb-relaxed">
                        <h6>
                            "Jesus answered, Verily, verily, I say unto thee, Except a man be born of water and of the
                            Spirit, he cannot enter into the kingdom of God." ~ John 3:5
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
                                    <img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?w=600&h=400&fit=crop"
                                        alt="Children" class="img-fluid1">
                                </div>
                                <div class="image-slide">
                                    <img src="https://images.unsplash.com/photo-1544568100-847a948585b9?w=600&h=400&fit=crop"
                                        alt="Sunday School" class="img-fluid1">
                                </div>
                                <div class="image-slide">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&h=400&fit=crop"
                                        alt="Learning" class="img-fluid1">
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
                    <h1 class="heading4 text-section_header3 mb-relaxed">
                        Sabbath School
                    </h1>
                    <div class="rich-text3 text-paragraph_large mb-relaxed">
                        <h6>
                            "But Jesus said, Suffer little children, and forbid them not, to come unto me: for of such
                            is the kingdom of heaven." ~ Matthew 19:14
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <!-- Font Awesome + Bootstrap JS -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>