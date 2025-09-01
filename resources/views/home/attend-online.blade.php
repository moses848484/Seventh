<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="https://seventh-production.up.railway.app/images/sda3.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Attend Online - UNISDA Church</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            font-family: 'Montserrat', 'Inter', 'Helvetica Neue', Arial, sans-serif;
            background: #fff;
            color: #333;
            overflow-x: hidden;
        }

        /* Header Styles */
        .header {
            background: #2c5530;
            color: white;
            padding: 15px 0;
        }

        .header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header .logo img {
            width: 40px;
            height: 40px;
        }

        .header .logo h2 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 700;
        }

        .header .contact-info {
            display: flex;
            gap: 20px;
            font-size: 0.9rem;
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
            background: #f8f9fa !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
        }

        .navbar-brand {
            font-weight: bold;
            color: #333 !important;
            font-size: 1.5rem;
            margin-left: 0;
        }

        .navbar-nav .nav-link {
            color: #555 !important;
            font-weight: 500;
            margin: 0 0.5rem;
            position: relative;
            padding: 10px 15px;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #000 !important;
            background-color: rgba(228, 175, 0, 0.1);
            border-radius: 5px;
        }

        .navbar-nav .nav-link.active {
            color: #000 !important;
            background-color: rgba(228, 175, 0, 0.15);
            border-radius: 5px;
        }

        .navbar-nav .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 50%;
            transform: translateX(-50%);
            width: 60%;
            height: 3px;
            background-color: #e4af00;
            border-radius: 2px;
        }

        .navbar-toggler {
            border: none;
            padding: 0.25rem 0.5rem;
            border-radius: 5px;
            background-color: #e4af00;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='m4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* Main Layout Container */
        .main-layout {
            display: flex;
            min-height: calc(100vh - 200px);
            flex-wrap: wrap;
        }

        /* Video Section */
        .video-section {
            flex: 1;
            min-width: 0;
            position: relative;
            background: #000;
            display: flex;
            flex-direction: column;
        }

        .video-container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            background: #000;
        }

        .video-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        #youtube-player {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Stream Overlay */
        .stream-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(44, 85, 48, 0.95), rgba(228, 175, 0, 0.8));
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            z-index: 10;
            transition: opacity 0.5s ease;
            color: white;
        }

        .stream-overlay.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .stream-overlay h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .stream-overlay p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .church-logo {
            width: 100px;
            height: auto;
            margin-bottom: 2rem;
            filter: brightness(0) invert(1);
        }

        /* Stream Status */
        .stream-status {
            position: absolute;
            top: 15px;
            left: 15px;
            background: rgba(0, 0, 0, 0.8);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 8px;
            z-index: 20;
            color: white;
        }

        .live-indicator {
            width: 8px;
            height: 8px;
            background: #ff4444;
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.5; }
            100% { opacity: 1; }
        }

        /* Viewer Count */
        .viewer-count {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(0, 0, 0, 0.8);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 8px;
            z-index: 20;
            color: white;
        }

        /* Sidebar */
        .sidebar {
            width: 380px;
            background: #1c1c1c;
            color: #fff;
            padding: 20px;
            overflow-y: auto;
            flex-shrink: 0;
            min-height: 100%;
        }

        .sidebar-card {
            background: #2b2b2b;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 16px;
            text-align: center;
            border: 1px solid #333;
            transition: all 0.3s ease;
        }

        .sidebar-card:hover {
            background: #323232;
            border-color: #444;
        }

        .sidebar-card-text {
            font-size: 1rem;
            font-weight: 500;
            margin-bottom: 15px;
            color: #f0f0f0;
            line-height: 1.4;
        }

        .sidebar-card-text i {
            font-size: 1.3rem;
            margin-right: 10px;
            color: #e4af00;
        }

        .sidebar-card-btn {
            background: transparent;
            color: #fff;
            border: 1px solid #666;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .sidebar-card-btn:hover {
            background: #e4af00;
            border-color: #e4af00;
            color: #000;
        }

        /* Login Prompt */
        .login-prompt {
            background: #2b2b2b;
            border-radius: 12px;
            padding: 16px;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border: 1px solid #333;
            flex-wrap: wrap;
        }

        .login-prompt p {
            margin: 0;
            font-size: 0.85rem;
            display: flex;
            align-items: center;
            flex: 1;
            min-width: 200px;
        }

        .login-prompt p i {
            color: #ff9800;
            margin-right: 8px;
            font-size: 1.1rem;
        }

        .login-btn {
            background: transparent;
            color: #ff9800;
            border: 1px solid #ff9800;
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.85rem;
        }

        .login-btn:hover {
            background: #ff9800;
            color: #fff;
        }

        .close-btn {
            background: none;
            border: none;
            color: #777;
            font-size: 1.2rem;
            cursor: pointer;
            margin-left: 10px;
            padding: 5px;
        }

        /* Request Prayer Button */
        .request-prayer-btn {
            width: 100%;
            background: #2b2b2b;
            color: #fff;
            border: 1px solid #666;
            padding: 15px;
            border-radius: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .request-prayer-btn:hover {
            background: #e4af00;
            border-color: #e4af00;
            color: #000;
        }

        .request-prayer-btn i {
            color: #ff6b6b;
        }

        /* Quick Actions */
        .quick-actions {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            border-top: 1px solid #333;
            padding-top: 20px;
        }

        .quick-action {
            background: transparent;
            border: none;
            color: #ccc;
            padding: 15px 10px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border-radius: 8px;
        }

        .quick-action:hover {
            background: #2b2b2b;
            color: #fff;
        }

        .quick-action i {
            font-size: 1.5rem;
            margin-bottom: 8px;
            display: block;
            color: #999;
        }

        .quick-action:hover i {
            color: #e4af00;
        }

        .quick-action div {
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* Footer */
        .footer {
            background: #2c5530;
            color: white;
            padding: 40px 0 20px;
            margin-top: auto;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 20px;
        }

        .footer h4 {
            color: #e4af00;
            margin-bottom: 15px;
        }

        .footer p, .footer a {
            color: #ccc;
            text-decoration: none;
            line-height: 1.6;
        }

        .footer a:hover {
            color: white;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: #e4af00;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            transform: translateY(-2px);
            background: #fff;
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #444;
            color: #999;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .sidebar {
                width: 320px;
            }
        }

        @media (max-width: 992px) {
            .main-layout {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                min-height: auto;
                order: 2;
            }

            .video-section {
                order: 1;
                min-height: 400px;
            }

            .video-container {
                padding-bottom: 75%; /* Adjusted for mobile */
            }

            .quick-actions {
                grid-template-columns: repeat(5, 1fr);
            }
        }

        @media (max-width: 768px) {
            .header .contact-info {
                display: none;
            }

            .stream-overlay h1 {
                font-size: 2rem;
            }

            .stream-overlay p {
                font-size: 1rem;
            }

            .navbar-nav .nav-link {
                margin: 0;
                padding: 8px 15px;
            }

            .login-prompt {
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }

            .login-prompt p {
                min-width: auto;
            }

            .quick-actions {
                grid-template-columns: repeat(3, 1fr);
            }

            .video-container {
                padding-bottom: 56.25%;
            }
        }

        @media (max-width: 576px) {
            .sidebar {
                padding: 15px;
            }

            .sidebar-card {
                padding: 15px;
            }

            .stream-overlay h1 {
                font-size: 1.5rem;
            }

            .quick-actions {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <div style="width: 40px; height: 40px; background: #e4af00; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #2c5530;">U</div>
                <h2>UNISDA CHURCH</h2>
            </div>
            <div class="contact-info">
                <span><i class="fas fa-phone"></i> +260 123 456 789</span>
                <span><i class="fas fa-envelope"></i> info@unisdachurch.org</span>
            </div>
        </div>
    </header>

    <div class="orange-separator"></div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">Streaming Live</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#attend-online">Attend Online</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#who-we-are">Who We Are</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#what-to-expect">What to Expect</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact-us">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#give-god">Give To God</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#our-beliefs">Our Beliefs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-layout">
        <!-- Video Section -->
        <div class="video-section">
            <div class="video-container">
                <div class="video-wrapper">
                    <iframe id="youtube-player"
                        src="https://www.youtube.com/embed/YUyzvduXvgs?autoplay=0&mute=0&rel=0&showinfo=0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>

                    <div class="stream-overlay" id="streamOverlay">
                        <div>
                            <div class="church-logo" style="width: 80px; height: 80px; background: #e4af00; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #2c5530; font-size: 24px; margin: 0 auto 20px;">U</div>
                            <h1>Welcome to UNISDA Church</h1>
                            <p>The service will begin soon. Please wait...</p>
                        </div>
                    </div>

                    <div class="stream-status">
                        <div class="live-indicator"></div>
                        <span>LIVE</span>
                        <span>0:00:02</span>
                    </div>

                    <div class="viewer-count">
                        <i class="fas fa-eye"></i>
                        <span>127</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-card">
                <div class="sidebar-card-text">
                    <i class="fa-solid fa-handshake"></i>
                    Want to change the world? Become a HOST!
                </div>
                <button class="sidebar-card-btn">Continue</button>
            </div>

            <div class="sidebar-card">
                <div class="sidebar-card-text">
                    <i class="fa-solid fa-users"></i>
                    Find your people. Join a LifeGroup.
                </div>
                <button class="sidebar-card-btn">Continue</button>
            </div>

            <div class="login-prompt">
                <p><i class="fa-solid fa-circle-info"></i> Log in to experience the best of UNISDA Church Online!</p>
                <button class="login-btn">Log In</button>
                <button class="close-btn" onclick="this.parentElement.style.display='none';">&times;</button>
            </div>

            <button class="request-prayer-btn">
                <i class="fa-regular fa-heart"></i>
                Request Prayer
            </button>

            <div class="quick-actions">
                <button class="quick-action">
                    <i class="fa-regular fa-message"></i>
                    <div>Feed</div>
                </button>
                <button class="quick-action">
                    <i class="fa-solid fa-hand-holding-heart"></i>
                    <div>Pray</div>
                </button>
                <button class="quick-action">
                    <i class="fa-regular fa-calendar-days"></i>
                    <div>Schedule</div>
                </button>
                <button class="quick-action">
                    <i class="fa-regular fa-note-sticky"></i>
                    <div>Notes</div>
                </button>
                <button class="quick-action">
                    <i class="fa-solid fa-book-bible"></i>
                    <div>Bible</div>
                </button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div>
                    <h4>UNISDA Church</h4>
                    <p>University SDA Church is committed to sharing God's love and building a community of faith.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div>
                    <h4>Quick Links</h4>
                    <p><a href="#">About Us</a></p>
                    <p><a href="#">Our Beliefs</a></p>
                    <p><a href="#">Ministries</a></p>
                    <p><a href="#">Events</a></p>
                </div>
                <div>
                    <h4>Contact Info</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Katima Mulilo Road, Lusaka</p>
                    <p><i class="fas fa-phone"></i> +260 123 456 789</p>
                    <p><i class="fas fa-envelope"></i> info@unisdachurch.org</p>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2024 The University SDA Church. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Stream overlay toggle
        function hideStreamOverlay() {
            document.getElementById('streamOverlay').classList.add('hidden');
        }

        // Simulate stream starting after 3 seconds
        setTimeout(hideStreamOverlay, 3000);

        // Navigation active state handler
        document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('.nav-link');

            navLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    navLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });

        // Simulate viewer count changes
        function updateViewerCount() {
            const viewerElement = document.querySelector('.viewer-count span:last-child');
            const currentCount = parseInt(viewerElement.textContent);
            const change = Math.floor(Math.random() * 10) - 5;
            const newCount = Math.max(50, currentCount + change);
            viewerElement.textContent = newCount;
        }

        setInterval(updateViewerCount, 15000);

        // Prayer request button
        document.querySelector('.request-prayer-btn').addEventListener('click', function () {
            alert('Thank you for your prayer request. Our team will pray for you.');
        });

        // Login functionality
        document.querySelector('.login-btn').addEventListener('click', function () {
            alert('Redirecting to login page...');
        });

        // Sidebar card buttons
        document.querySelectorAll('.sidebar-card-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                alert('Feature coming soon!');
            });
        });

        // Quick actions
        document.querySelectorAll('.quick-action').forEach(action => {
            action.addEventListener('click', function() {
                const feature = this.querySelector('div').textContent;
                alert(`${feature} feature coming soon!`);
            });
        });
    </script>
</body>

</html>