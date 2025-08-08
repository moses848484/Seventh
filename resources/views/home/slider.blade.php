<section class="slider_section position-relative text-white">
   <!-- Background image -->
    <div class="slider_bg_box position-absolute top-0 start-0 w-100 h-100">
        <img src="images/dorcas.jpg" alt="Happy Woman" class="w-100 h-100 object-fit-cover">
    </div>
    <!-- Carousel -->
    <div id="customCarousel1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 d-flex align-items-center">
                            <div class="detail-box px-3 px-md-0">
                                <h1 class="hero-title mb-4">
                                    Everyone's<br>
                                    Invited
                                </h1>
                                <p class="hero-subtitle mb-5">
                                    Wherever you are on your journey, there's a place for 
                                    you at University SDA Church. Here you'll find a welcoming 
                                    community ready to walk through life with you.
                                </p>

                                 <div class="button-container">
                                    <a href="{{ route('register') }}" class="btn1">Learn More</a>
                                    <a href="https://www.facebook.com/@universityadventist/" class="btn5">Attend
                                        Online</a>
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
/* Hero Section Fonts and Styling */
.hero-title {
    font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
    font-size: 4rem;
    font-weight: 700;
    line-height: 1.1;
    letter-spacing: -0.02em;
    margin-bottom: 2rem;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
}

.hero-subtitle {
    font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
    font-size: 1.25rem;
    font-weight: 400;
    line-height: 1.6;
    color: rgba(255, 255, 255, 0.95);
    max-width: 500px;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
}

/* Responsive Typography */
@media (max-width: 768px) {
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-subtitle {
        font-size: 1.125rem;
    }
    
    .detail-box {
        text-align: center;
        padding: 2rem 1rem;
    }
    
}

@media (max-width: 480px) {
    .hero-title {
        font-size: 2rem;
    }
    
}

/* Import Inter font */
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
</style>