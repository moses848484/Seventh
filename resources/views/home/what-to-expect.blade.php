<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>What to Expect - SDA Church</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fa;
            padding: 20px 0;
        }

        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0;
            margin-bottom: 40px;
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

        /* target small devices in landscape: make expectation columns 48% wide */
        @media (orientation: landscape) and (max-width: 900px) {
            .expectation-col {
                flex: 0 0 48%;
                max-width: 48%;
                margin-right: 4%;
            }

            /* remove bottom margin when side-by-side */
            .expectation-card {
                margin-bottom: 0;
            }
        }


        /* Responsive Card Container - Using same approach as notes card */
        .content-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            display: flex;
            flex-direction: column;
            margin-bottom: 2rem;
            overflow: hidden;
        }

        .card-header-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 20px;
            border-radius: 15px 15px 0 0;
            flex-shrink: 0;
        }

        .card-body-custom {
            padding: 0;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        /* Image Slider Container - Responsive like notes card */
        .image-slider-container {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
        }

        .image-slider-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            width: 300%;
            height: 100%;
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .image-slide {
            width: 33.333%;
            height: 100%;
        }

        .image-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* Desktop: use cover for better fill, similar to mobile */
        @media (min-width: 768px) {
            .image-slide img {
                object-fit: cover;
            }
        }

        /* Navigation buttons - responsive positioning */
        .image-slider-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.6);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-slider-nav:hover {
            background: rgba(0, 0, 0, 0.8);
            transform: translateY(-50%) scale(1.1);
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

        /* Text content area - responsive like notes card */
        .text-content-area {
            padding: 20px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .content-title {
            color: #333;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .content-text {
            color: #555;
            line-height: 1.6;
        }

        /* Responsive breakpoints - matching notes card approach */
        @media (max-width: 1200px) {
            .content-card {
                margin-bottom: 1.5rem;
            }

            .text-content-area {
                padding: 15px;
            }

            .content-title {
                font-size: 1.1rem;
            }

            .image-slider-nav {
                width: 35px;
                height: 35px;
                font-size: 14px;
            }
        }

        @media (max-width: 768px) {
            .expectation-card {
                padding: 20px;
            }

            .expectation-icon {
                width: 50px;
                height: 50px;
                font-size: 20px;
            }

            .content-title {
                font-size: 1rem;
            }

            .text-content-area {
                padding: 15px;
            }

            .image-slider-container {
                padding-bottom: 60%;
                /* Adjust aspect ratio for mobile */
            }

            .image-slider-nav {
                width: 30px;
                height: 30px;
                font-size: 12px;
            }

            .image-slider-prev {
                left: 5px;
            }

            .image-slider-next {
                right: 5px;
            }
        }

        @media (max-width: 576px) {
            .text-content-area {
                padding: 10px;
            }

            .content-title {
                font-size: 0.95rem;
                margin-bottom: 10px;
            }

            .content-text {
                font-size: 0.85rem;
            }

            .image-slider-container {
                padding-bottom: 65%;
            }

            .image-slider-indicators {
                bottom: 10px;
                gap: 6px;
            }

            .image-slider-indicator {
                width: 10px;
                height: 10px;
            }
        }

        /* Card layout adjustments */
        @media (min-width: 768px) and (max-width: 1199px) {
            .content-card .row {
                height: 500px;
            }

            .image-slider-container {
                padding-bottom: 0;
                height: 100%;
            }
        }

        @media (min-width: 1200px) {
            .content-card .row {
                height: 400px !important;
                min-height: 400px !important;
            }

            .image-slider-container {
                padding-bottom: 0 !important;
                height: 100% !important;
                min-height: 400px !important;
            }

            .text-content-area {
                padding: 40px;
            }

            .card-body-custom {
                min-height: 400px !important;
            }
        }

        /* Extra large screens */
        @media (min-width: 1400px) {
            .content-card .row {
                height: 400px !important;
                min-height: 400px !important;
            }

            .card-body-custom {
                min-height: 400px !important;
            }
        }

        @media (max-width: 767px) {
            .content-card .row {
                flex-direction: column;
            }
        }

        h4,
        h3,
        h2,
        .content-title {
            color: #000;
        }

        p,
        small,
        .content-text {
            color: #555;
        }

        .lead {
            color: white;
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
                <div class="col-12 col-sm-6 col-md-4 d-flex expectation-col">
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
                <div class="col-12 col-sm-6 col-md-4 d-flex expectation-col">
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
                <div class="col-12 col-sm-6 col-md-4 d-flex expectation-col">
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

        <!-- Responsive Content Cards with Image Sliders -->
        <div class="container mt-5">
            <!-- First Content Card -->
            <div class="content-card">
                <div class="card-header-custom">
                    <h5 class="mb-0">
                        <i class="fas fa-heart me-2"></i>Annual Theme ~ More Like Jesus
                    </h5>
                </div>
                <div class="card-body-custom">
                    <div class="row g-0 h-100">
                        <!-- Image Column -->
                        <div class="col-md-6">
                            <div class="image-slider-container">
                                <div class="image-slider-wrapper" id="imageSliderWrapper1">
                                    <div class="image-slide">
                                        <img src="images/fellowship.jpg" alt="Fellowship" loading="lazy">
                                    </div>
                                    <div class="image-slide">
                                        <img src="images/fellow1.jpg" alt="Fellowship" loading="lazy">
                                    </div>
                                    <div class="image-slide">
                                        <img src="images/fellow1.jpg" alt="Fellowship" loading="lazy">
                                    </div>
                                </div>
                                <button class="image-slider-nav image-slider-prev" id="imageSliderPrevBtn1">‹</button>
                                <button class="image-slider-nav image-slider-next" id="imageSliderNextBtn1">›</button>
                                <div class="image-slider-indicators" id="imageSliderIndicators1">
                                    <div class="image-slider-indicator active" data-slide="0"></div>
                                    <div class="image-slider-indicator" data-slide="1"></div>
                                    <div class="image-slider-indicator" data-slide="2"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Text Column -->
                        <div class="col-md-6">
                            <div class="text-content-area">
                                <h3 class="content-title">More Like Jesus</h3>
                                <div class="content-text">
                                    <p><strong>"And this is eternal life, that they may know You, the only true God, and
                                            Jesus Christ whom You have sent."</strong></p>
                                    <p><em>~ John 17:3</em></p>
                                    <p>Join us in our journey to become more like Jesus through fellowship, worship, and
                                        spiritual growth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Content Card -->
            <div class="content-card">
                <div class="card-header-custom">
                    <h5 class="mb-0">
                        <i class="fas fa-water me-2"></i>Baptism
                    </h5>
                </div>
                <div class="card-body-custom">
                    <div class="row g-0 h-100">
                        <!-- Image Column -->
                        <div class="col-md-6">
                            <div class="image-slider-container">
                                <div class="image-slider-wrapper" id="imageSliderWrapper2">
                                    <div class="image-slide">
                                        <img src="images/baptism.jpg" alt="Baptism" loading="lazy">
                                    </div>
                                    <div class="image-slide">
                                        <img src="images/baptism-certificate.jpg" alt="Baptism Certificate"
                                            loading="lazy">
                                    </div>
                                    <div class="image-slide">
                                        <img src="images/certificate.jpg" alt="Certificate" loading="lazy">
                                    </div>
                                </div>
                                <button class="image-slider-nav image-slider-prev" id="imageSliderPrevBtn2">‹</button>
                                <button class="image-slider-nav image-slider-next" id="imageSliderNextBtn2">›</button>
                                <div class="image-slider-indicators" id="imageSliderIndicators2">
                                    <div class="image-slider-indicator active" data-slide="0"></div>
                                    <div class="image-slider-indicator" data-slide="1"></div>
                                    <div class="image-slider-indicator" data-slide="2"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Text Column -->
                        <div class="col-md-6">
                            <div class="text-content-area">
                                <h3 class="content-title">Baptism</h3>
                                <div class="content-text">
                                    <p><strong>"Jesus answered, Verily, verily, I say unto thee, Except a man be born of
                                            water and of the Spirit, he cannot enter into the kingdom of God."</strong>
                                    </p>
                                    <p><em>~ John 3:5</em></p>
                                    <p>Take the next step in your spiritual journey through baptism, a beautiful symbol
                                        of new life in Christ.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Third Content Card -->
            <div class="content-card">
                <div class="card-header-custom">
                    <h5 class="mb-0">
                        <i class="fas fa-child me-2"></i>Sabbath School
                    </h5>
                </div>
                <div class="card-body-custom">
                    <div class="row g-0 h-100">
                        <!-- Image Column -->
                        <div class="col-md-6">
                            <div class="image-slider-container">
                                <div class="image-slider-wrapper" id="imageSliderWrapper3">
                                    <div class="image-slide">
                                        <img src="images/kids3.jpg" alt="Children" loading="lazy">
                                    </div>
                                    <div class="image-slide">
                                        <img src="images/kids.jpg" alt="Children" loading="lazy">
                                    </div>
                                    <div class="image-slide">
                                        <img src="images/kids4.jpg" alt="Children" loading="lazy">
                                    </div>
                                </div>
                                <button class="image-slider-nav image-slider-prev" id="imageSliderPrevBtn3">‹</button>
                                <button class="image-slider-nav image-slider-next" id="imageSliderNextBtn3">›</button>
                                <div class="image-slider-indicators" id="imageSliderIndicators3">
                                    <div class="image-slider-indicator active" data-slide="0"></div>
                                    <div class="image-slider-indicator" data-slide="1"></div>
                                    <div class="image-slider-indicator" data-slide="2"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Text Column -->
                        <div class="col-md-6">
                            <div class="text-content-area">
                                <h3 class="content-title">Sabbath School</h3>
                                <div class="content-text">
                                    <p><strong>"But Jesus said, Suffer little children, and forbid them not, to come
                                            unto me: for of such is the kingdom of heaven."</strong></p>
                                    <p><em>~ Matthew 19:14</em></p>
                                    <p>Our Sabbath School provides age-appropriate Bible study for all members of the
                                        family, fostering spiritual growth in a nurturing environment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
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
                this.autoPlayInterval = null;

                this.init();
            }

            init() {
                if (!this.sliderWrapper || !this.prevBtn || !this.nextBtn) {
                    console.error(`Slider ${this.sliderId} elements not found`);
                    return;
                }

                // Add event listeners
                this.prevBtn.addEventListener('click', () => {
                    this.stopAutoPlay();
                    this.previousSlide();
                    this.startAutoPlay();
                });

                this.nextBtn.addEventListener('click', () => {
                    this.stopAutoPlay();
                    this.nextSlide();
                    this.startAutoPlay();
                });

                // Add indicator click events
                this.indicators.forEach((indicator, index) => {
                    indicator.addEventListener('click', () => {
                        this.stopAutoPlay();
                        this.goToSlide(index);
                        this.startAutoPlay();
                    });
                });

                // Add keyboard navigation
                this.sliderWrapper.addEventListener('keydown', (e) => {
                    if (e.key === 'ArrowLeft') {
                        this.stopAutoPlay();
                        this.previousSlide();
                        this.startAutoPlay();
                    }
                    if (e.key === 'ArrowRight') {
                        this.stopAutoPlay();
                        this.nextSlide();
                        this.startAutoPlay();
                    }
                });

                // Make slider focusable
                this.sliderWrapper.setAttribute('tabindex', '0');

                // Pause auto-play on hover
                const container = this.sliderWrapper.closest('.content-card');
                if (container) {
                    container.addEventListener('mouseenter', () => this.stopAutoPlay());
                    container.addEventListener('mouseleave', () => this.startAutoPlay());
                }

                // Start auto-play
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
                if (!this.sliderWrapper) return;

                // Move slider
                const translateX = -this.currentSlide * (100 / this.totalSlides);
                this.sliderWrapper.style.transform = `translateX(${translateX}%)`;

                // Update indicators
                this.indicators.forEach((indicator, index) => {
                    indicator.classList.toggle('active', index === this.currentSlide);
                });
            }

            startAutoPlay() {
                this.stopAutoPlay();
                this.autoPlayInterval = setInterval(() => {
                    this.nextSlide();
                }, 5000);
            }

            stopAutoPlay() {
                if (this.autoPlayInterval) {
                    clearInterval(this.autoPlayInterval);
                    this.autoPlayInterval = null;
                }
            }
        }

        // Initialize all sliders when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            const sliders = [];
            for (let i = 1; i <= 3; i++) {
                sliders.push(new ContentImageSlider(i.toString()));
            }

            // Global cleanup on page unload
            window.addEventListener('beforeunload', () => {
                sliders.forEach(slider => slider.stopAutoPlay());
            });
        });

        // Handle window resize for better responsiveness
        window.addEventListener('resize', () => {
            // Force a reflow to ensure proper sizing
            const sliders = document.querySelectorAll('.image-slider-wrapper');
            sliders.forEach(slider => {
                const transform = slider.style.transform;
                slider.style.transform = '';
                // Force reflow
                slider.offsetHeight;
                slider.style.transform = transform;
            });
        });
    </script>
</body>

</html>