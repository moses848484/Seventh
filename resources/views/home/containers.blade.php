<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixed Image Slider</title>
    <style>
        /* Image Slider-specific styles - using unique class names */
        .image-slider-container {
            position: relative;
            width: 100%;
            height: 100%;
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
            background: rgba(0, 0, 0, 0.6);
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
            background: rgba(0, 0, 0, 0.8);
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
    <div class="container-wrapper">
        <!-- First Row with Slider -->
        <div class="container1">
            <div class="card-content">
                <!-- Image Column -->
                <div class="arrival_bg_box4">
                    <div class="image-slider-container">
                        <div class="image-slider-wrapper" id="imageSliderWrapper1">
                            <div class="image-slide">
                                <img src="images/preacher.jpg" alt="Person praying" class="img-fluid1">
                            </div>
                            <div class="image-slide">
                                <img src="images/preach4.jpg" alt="Person praying" class="img-fluid1">
                            </div>
                            <div class="image-slide">
                                <img src="images/preach5.jpg" alt="Person praying" class="img-fluid1">
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
                    What is Truth?
                </h1>
                <div class="rich-text3 text-paragraph_large mb-relaxed">
                    <h6>
                        Jesus says the truth will set us free, but what is truth? And how can it set us free? Learn
                        more with this 5-day Plan, The Truth Will Set You Free.
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
                    Seek Answers, Find Life.
                </h1>
                <div class="rich-text3 text-paragraph_large mb-relaxed">
                    <h6>
                        Check out finds.university SDA.church for spiritual resources to give you helpful, hopeful
                        encouragement as you walk with Jesus. Tap to learn more.
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
                    Kids <i class="fa-solid fa-heart"></i> SdaKids!
                </h1>
                <div class="rich-text3 text-paragraph_large mb-relaxed">
                    <h6>
                        SdaKids is the perfect place for children ages birth-6th grade to grow and develop as fully
                        devoted
                        followers of Christ. Find out more.
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
</body>

</html>