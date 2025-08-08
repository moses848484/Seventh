<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Church Hero Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<section class="slider_section position-relative text-white">
    <!-- Background image with light overlay -->
    <div class="slider_bg_box position-absolute top-0 start-0 w-100 h-100">
        <img src="images/dorcas.jpg" alt="Happy Woman" class="w-100 h-100 object-fit-cover">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
    </div>

    <!-- Carousel -->
    <div id="customCarousel1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-7 col-md-8 d-flex align-items-center" style="min-height: 100vh;">
                            <div class="detail-box px-3 px-md-0">
                                <h1 class="hero-title mb-4">
                                    Everyone's<br>
                                    Invited
                                </h1>
                                <p class="hero-subtitle mb-5">
                                    Wherever you are on your journey, there's a place for 
                                    you at Life.Church. Here you'll find a welcoming 
                                    community ready to walk through life with you.
                                </p>
                                
                                <!-- Location Section -->
                                <div class="location-section mb-4">
                                    <div class="location-icon-text mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt me-2" viewBox="0 0 16 16">
                                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        </svg>
                                        <span class="location-text">Find Your Closest Location</span>
                                    </div>
                                    
                                    <!-- Location Dropdown -->
                                    <div class="location-selector">
                                        <select class="form-select location-dropdown" aria-label="Choose a Location">
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
/* Light overlay like the reference image */
.overlay {
    background: linear-gradient(
        135deg, 
        rgba(0, 0, 0, 0.25) 0%, 
        rgba(0, 0, 0, 0.15) 50%, 
        rgba(0, 0, 0, 0.3) 100%
    );
}

/* Hero Section Fonts and Styling - matching reference image */
.hero-title {
    font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
    font-size: 3.5rem;
    font-weight: 700;
    line-height: 1.1;
    letter-spacing: -0.02em;
    margin-bottom: 1.5rem;
    color: #ffffff;
}

.hero-subtitle {
    font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
    font-size: 1.125rem;
    font-weight: 400;
    line-height: 1.6;
    color: rgba(255, 255, 255, 0.95);
    max-width: 520px;
}

/* Location Section Styling */
.location-section {
    max-width: 400px;
}

.location-icon-text {
    display: flex;
    align-items: center;
    color: rgba(255, 255, 255, 0.9);
    font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
    font-size: 0.95rem;
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
    padding: 14px 18px;
    font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
    font-size: 1rem;
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
        font-size: 2.75rem;
    }
    
    .hero-subtitle {
        font-size: 1rem;
    }
    
    .detail-box {
        text-align: center;
        padding: 2rem 1rem;
    }
    
    .location-section {
        max-width: 100%;
    }
    
    .location-icon-text {
        justify-content: center;
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>