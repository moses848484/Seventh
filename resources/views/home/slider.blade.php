<section class="slider_section position-relative text-white">
    <!-- Background image with dark overlay -->
    <div class="slider_bg_box position-absolute top-0 start-0 w-100 h-100">
        <img src="images/dorcas.jpg" alt="dorca" class="w-100 h-100 object-fit-cover">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
    </div>

    <!-- Carousel -->
    <div id="customCarousel1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 d-flex align-items-center" style="min-height: 80vh;">
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

                                <!-- Location Dropdown -->
                                <div class="location-selector mb-4">
                                    <select class="form-select location-dropdown" aria-label="Choose a Location">
                                        <option selected>Choose a Location</option>
                                        <option value="main">Main Campus</option>
                                        <option value="north">North Campus</option>
                                        <option value="south">South Campus</option>
                                        <option value="online">Online</option>
                                    </select>
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
    .carousel-item {
        background: none !important;
    }

    .carousel-item::before,
    .carousel-item::after {
        display: none !important;
    }

    .detail-box {
        background: none !important;
    }

    .detail-box::before,
    .detail-box::after {
        display: none !important;
    }

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

    /* Location Dropdown Styling */
    .location-selector {
        max-width: 300px;
    }

    .location-dropdown {
        background-color: rgba(255, 255, 255, 0.95);
        border: none;
        border-radius: 8px;
        padding: 12px 16px;
        font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
        font-size: 1rem;
        font-weight: 500;
        color: #333;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .location-dropdown:focus {
        box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.3);
        outline: none;
    }

    /* Button Styling Updates */
    .button-container {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .btn1,
    .btn5 {
        font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
        font-weight: 600;
        font-size: 1rem;
        padding: 12px 24px;
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .btn1 {
        background-color: #fff;
        color: #333;
    }

    .btn1:hover {
        background-color: rgba(255, 255, 255, 0.9);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .btn5 {
        background-color: transparent;
        color: #fff;
        border-color: rgba(255, 255, 255, 0.6);
    }

    .btn5:hover {
        background-color: rgba(255, 255, 255, 0.1);
        border-color: #fff;
        color: #fff;
        transform: translateY(-2px);
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

        .location-selector {
            max-width: 100%;
        }

        .button-container {
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        .hero-title {
            font-size: 2rem;
        }

        .button-container {
            flex-direction: column;
            align-items: center;
        }

        .btn1,
        .btn5 {
            width: 100%;
            max-width: 200px;
            text-align: center;
        }
    }

    /* Import Inter font */
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
</style>