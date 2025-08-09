 <style>
        /* Slider-specific styles to add to your existing CSS */
        .slider-container {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .slider-wrapper {
            display: flex;
            width: 300%;
            height: 100%;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            width: 33.333%;
            height: 100%;
        }

        .slider-nav {
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

        .slider-nav:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        .slider-indicators {
            position: absolute;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
            z-index: 10;
        }

        .indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .indicator.active {
            background: rgba(255, 255, 255, 1);
        }

        /* Ensure arrival_bg_box4 has position relative for slider positioning */
        .arrival_bg_box4 {
            position: relative;
        }
    </style>
    <div class="container-wrapper">
        <!-- First Row -->
        <div class="container1">
            <div class="card-content">
                <!-- Image Column -->
                <div class="arrival_bg_box4">
                    <img src="images/preacher.jpg" alt="Person praying" class="img-fluid1">
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
                    <div class="slider-container">
                        <div class="slider-wrapper" id="sliderWrapper">
                            <div class="slide">
                                <img src="images/baptism.jpg" alt="Person praying" class="img-fluid1">
                            </div>
                            <div class="slide">
                                <img src="images/prayer.jpg" alt="Person praying" class="img-fluid1">
                            </div>
                            <div class="slide">
                                <img src="images/worship.jpg" alt="Person praying" class="img-fluid1">
                            </div>
                        </div>
                        
                        <!-- Navigation buttons -->
                        <button class="slider-nav prev" id="prevBtn">‹</button>
                        <button class="slider-nav next" id="nextBtn">›</button>
                        
                        <!-- Indicators -->
                        <div class="slider-indicators" id="indicators">
                            <div class="indicator active" data-slide="0"></div>
                            <div class="indicator" data-slide="1"></div>
                            <div class="indicator" data-slide="2"></div>
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

        <!-- Third Row -->
        <div class="container1">
            <div class="card-content">
                <!-- Image Column -->
                <div class="arrival_bg_box4">
                    <img src="images/kids.jpg" alt="Person praying" class="img-fluid1">
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
                        SdaKids is the perfect place for children ages birth-6th grade to grow and develop as fully devoted
                        followers of Christ. Find out more.
                    </h6>
                </div>
            </div>
        </div>
    </div>

    <script>
        class ImageSlider {
            constructor() {
                this.currentSlide = 0;
                this.totalSlides = 3;
                this.sliderWrapper = document.getElementById('sliderWrapper');
                this.prevBtn = document.getElementById('prevBtn');
                this.nextBtn = document.getElementById('nextBtn');
                this.indicators = document.querySelectorAll('.indicator');
                
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
                
                // Add keyboard navigation
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'ArrowLeft') this.previousSlide();
                    if (e.key === 'ArrowRight') this.nextSlide();
                });
                
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
        
        // Initialize slider when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            new ImageSlider();
        });
    </script>
