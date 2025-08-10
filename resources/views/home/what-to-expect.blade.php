<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What to Expect - University SDA Church</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0;
        }
        
        .expectation-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
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
            margin-bottom: 20px;
            font-size: 24px;
            color: white;
        }
        
        .timeline {
            position: relative;
            padding: 20px 0;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #667eea;
            transform: translateX(-50%);
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 50px;
        }
        
        .timeline-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            width: 45%;
        }
        
        .timeline-item:nth-child(odd) .timeline-content {
            margin-left: auto;
        }
        
        .timeline-item:nth-child(even) .timeline-content {
            margin-right: auto;
        }
        
        .timeline-dot {
            position: absolute;
            left: 50%;
            top: 20px;
            width: 20px;
            height: 20px;
            background: #667eea;
            border-radius: 50%;
            transform: translateX(-50%);
            border: 4px solid white;
            box-shadow: 0 0 0 4px #667eea;
        }
        
        @media (max-width: 768px) {
            .timeline::before {
                left: 20px;
            }
            
            .timeline-content {
                width: calc(100% - 60px);
                margin-left: 60px !important;
            }
            
            .timeline-dot {
                left: 20px;
            }
        }
        
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 mb-4">What to Expect</h1>
                    <p class="lead">Your first visit to University SDA Church - we're excited to welcome you!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-5">
        <div class="container">
            <!-- Welcome Message -->
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="mb-4">We're Glad You're Coming!</h2>
                    <p class="lead text-muted">
                        Whether this is your first time visiting a church or you're familiar with church services, 
                        we want you to feel comfortable and know what to expect when you visit University SDA Church.
                    </p>
                </div>
            </div>

            <!-- What to Expect Cards -->
            <div class="row">
                <div class="col-md-4">
                    <div class="expectation-card">
                        <div class="expectation-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4>Service Times</h4>
                        <p><strong>Sabbath School:</strong> 9:30 AM</p>
                        <p><strong>Worship Service:</strong> 11:00 AM</p>
                        <p><strong>Prayer Meeting:</strong> Wednesday 7:00 PM</p>
                        <small class="text-muted">Services typically last 60-90 minutes</small>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="expectation-card">
                        <div class="expectation-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Friendly Atmosphere</h4>
                        <p>Our greeters will welcome you at the door and help you find your way. Don't worry about not knowing anyone - our community is warm and welcoming!</p>
                        <small class="text-muted">Feel free to introduce yourself to others</small>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="expectation-card">
                        <div class="expectation-icon">
                            <i class="fas fa-tshirt"></i>
                        </div>
                        <h4>Come As You Are</h4>
                        <p>Dress comfortably! You'll see everything from casual to business attire. What matters most is that you're here.</p>
                        <small class="text-muted">No dress code required</small>
                    </div>
                </div>
            </div>

            <!-- Service Flow Timeline -->
            <div class="row mt-5">
                <div class="col-12">
                    <h2 class="text-center mb-5">Your Sabbath Experience</h2>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <h5>Arrival & Welcome (9:15 AM)</h5>
                                <p>Our greeters will welcome you and provide you with a bulletin. Coffee and light refreshments are usually available.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <h5>Sabbath School (9:30 AM)</h5>
                                <p>Interactive Bible study in small groups. Don't worry if you don't have a Bible - we have extras available.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <h5>Worship Service (11:00 AM)</h5>
                                <p>Uplifting music, prayer, and a practical message from God's Word. Children are welcome throughout the service.</p>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <h5>Fellowship Time (After Service)</h5>
                                <p>Stay for lunch and fellowship! It's a great opportunity to meet people and ask any questions you might have.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="row mt-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-center mb-5">Frequently Asked Questions</h2>
                    
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    <strong>What should I bring?</strong>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Just bring yourself! We provide Bibles, hymnals, and everything else you need for the service.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    <strong>Is childcare available?</strong>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes! We have nursery care for infants and toddlers, and children's Sabbath School for older kids.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    <strong>Will I be asked to participate or speak?</strong>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Never! You're welcome to participate as much or as little as you'd like. There's no pressure to do anything you're not comfortable with.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                    <strong>Is there parking available?</strong>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we have plenty of free parking available on-site. Accessible parking spaces are available near the main entrance.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="row mt-5">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="bg-light p-5 rounded">
                        <h3>Ready to Visit?</h3>
                        <p class="lead">We can't wait to meet you and welcome you into our church family!</p>
                        <a href="/" class="btn btn-primary btn-lg me-3">Back to Home</a>
                        <a href="mailto:info@universitysda.church" class="btn btn-outline-primary btn-lg">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<style>
    .hero-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 80px 0;
    }
    
    .expectation-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 30px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
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
        margin-bottom: 20px;
        font-size: 24px;
        color: white;
    }
    
    .timeline {
        position: relative;
        padding: 20px 0;
    }
    
    .timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #667eea;
        transform: translateX(-50%);
    }
    
    .timeline-item {
        position: relative;
        margin-bottom: 50px;
    }
    
    .timeline-content {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        width: 45%;
    }
    
    .timeline-item:nth-child(odd) .timeline-content {
        margin-left: auto;
    }
    
    .timeline-item:nth-child(even) .timeline-content {
        margin-right: auto;
    }
    
    .timeline-dot {
        position: absolute;
        left: 50%;
        top: 20px;
        width: 20px;
        height: 20px;
        background: #667eea;
        border-radius: 50%;
        transform: translateX(-50%);
        border: 4px solid white;
        box-shadow: 0 0 0 4px #667eea;
    }
    
    @media (max-width: 768px) {
        .timeline::before {
            left: 20px;
        }
        
        .timeline-content {
            width: calc(100% - 60px);
            margin-left: 60px !important;
        }
        
        .timeline-dot {
            left: 20px;
        }
    }
</style>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 mb-4">What to Expect</h1>
                <p class="lead">Your first visit to University SDA Church - we're excited to welcome you!</p>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-5">
    <div class="container">
        <!-- Welcome Message -->
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="mb-4">We're Glad You're Coming!</h2>
                <p class="lead text-muted">
                    Whether this is your first time visiting a church or you're familiar with church services, 
                    we want you to feel comfortable and know what to expect when you visit University SDA Church.
                </p>
            </div>
        </div>

        <!-- What to Expect Cards -->
        <div class="row">
            <div class="col-md-4">
                <div class="expectation-card">
                    <div class="expectation-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h4>Service Times</h4>
                    <p><strong>Sabbath School:</strong> 9:30 AM</p>
                    <p><strong>Worship Service:</strong> 11:00 AM</p>
                    <p><strong>Prayer Meeting:</strong> Wednesday 7:00 PM</p>
                    <small class="text-muted">Services typically last 60-90 minutes</small>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="expectation-card">
                    <div class="expectation-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4>Friendly Atmosphere</h4>
                    <p>Our greeters will welcome you at the door and help you find your way. Don't worry about not knowing anyone - our community is warm and welcoming!</p>
                    <small class="text-muted">Feel free to introduce yourself to others</small>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="expectation-card">
                    <div class="expectation-icon">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h4>Come As You Are</h4>
                    <p>Dress comfortably! You'll see everything from casual to business attire. What matters most is that you're here.</p>
                    <small class="text-muted">No dress code required</small>
                </div>
            </div>
        </div>

        <!-- Service Flow Timeline -->
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="text-center mb-5">Your Sabbath Experience</h2>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <h5>Arrival & Welcome (9:15 AM)</h5>
                            <p>Our greeters will welcome you and provide you with a bulletin. Coffee and light refreshments are usually available.</p>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <h5>Sabbath School (9:30 AM)</h5>
                            <p>Interactive Bible study in small groups. Don't worry if you don't have a Bible - we have extras available.</p>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <h5>Worship Service (11:00 AM)</h5>
                            <p>Uplifting music, prayer, and a practical message from God's Word. Children are welcome throughout the service.</p>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <h5>Fellowship Time (After Service)</h5>
                            <p>Stay for lunch and fellowship! It's a great opportunity to meet people and ask any questions you might have.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="row mt-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-center mb-5">Frequently Asked Questions</h2>
                
                <div class="accordion" id="faqAccordion">
                    <div class="card mb-3">
                        <div class="card-header">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#faq1">
                                <strong>What should I bring?</strong>
                            </button>
                        </div>
                        <div id="faq1" class="collapse show" data-parent="#faqAccordion">
                            <div class="card-body">
                                Just bring yourself! We provide Bibles, hymnals, and everything else you need for the service.
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mb-3">
                        <div class="card-header">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#faq2">
                                <strong>Is childcare available?</strong>
                            </button>
                        </div>
                        <div id="faq2" class="collapse" data-parent="#faqAccordion">
                            <div class="card-body">
                                Yes! We have nursery care for infants and toddlers, and children's Sabbath School for older kids.
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mb-3">
                        <div class="card-header">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#faq3">
                                <strong>Will I be asked to participate or speak?</strong>
                            </button>
                        </div>
                        <div id="faq3" class="collapse" data-parent="#faqAccordion">
                            <div class="card-body">
                                Never! You're welcome to participate as much or as little as you'd like. There's no pressure to do anything you're not comfortable with.
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mb-3">
                        <div class="card-header">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#faq4">
                                <strong>Is there parking available?</strong>
                            </button>
                        </div>
                        <div id="faq4" class="collapse" data-parent="#faqAccordion">
                            <div class="card-body">
                                Yes, we have plenty of free parking available on-site. Accessible parking spaces are available near the main entrance.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="row mt-5">
            <div class="col-lg-8 mx-auto text-center">
                <div class="bg-light p-5 rounded">
                    <h3>Ready to Visit?</h3>
                    <p class="lead">We can't wait to meet you and welcome you into our church family!</p>
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg mr-3">Get Directions</a>
                    <a href="{{ route('home') }}" class="btn btn-outline-primary btn-lg">Learn More About Us</a>
                </div>
            </div>
        </div>
    </div>
</section>