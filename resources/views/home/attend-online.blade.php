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
        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            background: #fff;
            color: #333;
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
            min-height: 60px;
        }

        .navbar-brand {
            font-weight: bold;
            color: #333 !important;
            font-size: clamp(1.2rem, 2.5vw, 1.5rem);
            margin-left: 15px;
        }

        .navbar-nav .nav-link {
            color: #555 !important;
            font-weight: 500;
            margin: 0 0.5rem;
            position: relative;
            padding-bottom: 8px;
            font-size: clamp(0.9rem, 1.5vw, 1rem);
        }

        .navbar-nav .nav-link:hover {
            color: #000 !important;
        }

        .navbar-nav .nav-link.second-nav {
            color: #555 !important;
        }

        .navbar-nav .nav-link.second-nav:hover {
            color: black !important;
        }

        .navbar-nav .nav-link.second-nav.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            height: 3px;
            background-color: #e4af00;
        }

        .navbar-toggler {
            border: none;
            padding: 0.25rem 0.5rem;
            border-radius: 0 !important;
            box-shadow: none !important;
            outline: none !important;
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

        /* Main content wrapper */
        .main-content-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        /* Stream container */
        .stream-container {
            flex: 1;
            display: flex;
            min-height: 0;
        }

        /* Video section */
        .video-section {
            flex: 1;
            position: relative;
            background: #000;
            min-height: 400px;
        }

        .video-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            min-height: 100%;
        }

        #youtube-player {
            width: 100%;
            height: 100%;
            min-height: 100%;
            border: none;
        }

        /* Stream Overlay */
        .stream-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.9), rgba(118, 75, 162, 0.9));
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            z-index: 10;
            transition: opacity 0.3s ease;
            padding: 20px;
        }

        .stream-overlay.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .stream-overlay h1 {
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            color: white;
        }

        .stream-overlay p {
            font-size: clamp(1rem, 2.5vw, 1.4rem);
            margin-bottom: 2rem;
            opacity: 0.9;
            color: white;
        }

        .church-logo {
            width: clamp(80px, 15vw, 120px);
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
            padding: 6px 12px;
            border-radius: 20px;
            font-size: clamp(0.8rem, 1.5vw, 0.9rem);
            display: flex;
            align-items: center;
            gap: 6px;
            z-index: 20;
        }

        .live-indicator {
            width: 8px;
            height: 8px;
            background: #ff4444;
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        .live {
            color: white;
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
            padding: 6px 12px;
            border-radius: 20px;
            font-size: clamp(0.8rem, 1.5vw, 0.9rem);
            display: flex;
            align-items: center;
            gap: 6px;
            z-index: 20;
        }

        /* Sidebar */
        .sidebar {
            width: 400px;
            background: #1c1c1c;
            overflow-y: auto;
            flex-shrink: 0;
            color: #fff;
            padding: 20px;
            max-height: 100vh;
        }

        .sidebar-content {
            padding: 0;
        }

        .sidebar-card {
            background: #2b2b2b;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 15px;
            text-align: center;
            border: none;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar-card-text {
            font-size: clamp(1rem, 2vw, 1.1rem);
            font-weight: 500;
            margin-bottom: 10px;
            color: #f0f0f0;
            line-height: 1.4;
        }

        .sidebar-card-text i {
            font-size: clamp(1.3rem, 2.5vw, 1.5rem);
            margin-right: 10px;
            color: #ccc;
        }

        .sidebar-card-btn {
            background: transparent;
            color: #fff;
            border: 1px solid #777;
            padding: 8px 25px;
            border-radius: 20px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: clamp(0.9rem, 1.5vw, 1rem);
        }

        .sidebar-card-btn:hover {
            background: #3a3a3a;
            border-color: #999;
        }

        /* Login Prompt */
        .login-prompt {
            background: #2b2b2b;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
        }

        .login-prompt p {
            margin: 0;
            font-size: clamp(0.8rem, 1.5vw, 0.9rem);
            display: flex;
            align-items: center;
            flex: 1;
            min-width: 200px;
        }

        .login-prompt p i {
            color: #ff9800;
            margin-right: 8px;
            font-size: clamp(1rem, 2vw, 1.2rem);
        }

        .login-btn {
            background: transparent;
            color: #ff9800;
            border: 1px solid #ff9800;
            padding: 8px 25px;
            border-radius: 20px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: clamp(0.8rem, 1.5vw, 0.9rem);
            white-space: nowrap;
        }

        .login-btn:hover {
            background: #ff9800;
            color: #fff;
        }

        .login-prompt .close-btn {
            background: none;
            border: none;
            color: #777;
            font-size: clamp(1rem, 2vw, 1.2rem);
            cursor: pointer;
            margin-left: 10px;
        }

        /* Request Prayer Button */
        .request-prayer-btn {
            width: 100%;
            background: #2b2b2b;
            color: #fff;
            border: 1px solid #777;
            padding: 12px;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
            font-size: clamp(0.9rem, 1.5vw, 1rem);
        }

        .request-prayer-btn:hover {
            background: #3a3a3a;
        }

        /* Quick Actions */
        .quick-actions {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 0;
            margin-top: 20px;
            border-top: 1px solid #333;
            padding-top: 15px;
        }

        .quick-action {
            background: transparent;
            border: none;
            color: #fff;
            padding: 10px 5px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .quick-action:hover {
            background: #2b2b2b;
        }

        .quick-action i {
            font-size: clamp(1.2rem, 2.5vw, 1.4rem);
            margin-bottom: 5px;
            color: #999;
        }

        .quick-action:hover i {
            color: #fff;
        }

        .quick-action div {
            font-size: clamp(0.7rem, 1.5vw, 0.8rem);
            color: #999;
        }

        .quick-action:hover div {
            color: #fff;
        }

        .fa-eye {
            color: white;
        }

        /* Responsive breakpoints */
        
        /* Large tablets and small desktops */
        @media (max-width: 1200px) {
            .sidebar {
                width: 350px;
                padding: 15px;
            }
            
            .navbar-nav .nav-link {
                margin: 0 0.3rem;
            }
        }

        /* Medium tablets */
        @media (max-width: 1024px) {
            .sidebar {
                width: 320px;
                padding: 15px;
            }
            
            .sidebar-card {
                padding: 15px;
            }
            
            .navbar-brand {
                margin-left: 10px;
            }
        }

        /* Small tablets */
        @media (max-width: 900px) {
            .stream-container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                min-height: auto;
                order: 2;
                max-height: 50vh;
                padding: 15px;
            }

            .video-section {
                width: 100%;
                order: 1;
                min-height: 50vh;
                flex: none;
                height: 50vh;
            }

            .video-wrapper,
            #youtube-player {
                min-height: 50vh;
                height: 50vh;
            }
            
            .quick-actions {
                grid-template-columns: repeat(5, 1fr);
                gap: 5px;
            }
            
            .quick-action {
                padding: 8px 3px;
            }
        }

        /* Mobile phones - large */
        @media (max-width: 768px) {
            .navbar-custom {
                min-height: 56px;
            }
            
            .navbar-brand {
                font-size: 1.3rem;
                margin-left: 10px;
            }
            
            .video-section {
                min-height: 40vh;
                height: 40vh;
            }

            .video-wrapper,
            #youtube-player {
                min-height: 40vh;
                height: 40vh;
            }
            
            .sidebar {
                padding: 15px;
                max-height: 60vh;
            }
            
            .sidebar-card {
                padding: 15px;
                margin-bottom: 12px;
            }
            
            .stream-status,
            .viewer-count {
                top: 10px;
                padding: 4px 8px;
                font-size: 0.8rem;
            }
            
            .stream-status {
                left: 10px;
            }
            
            .viewer-count {
                right: 10px;
            }
            
            .login-prompt {
                flex-direction: column;
                align-items: stretch;
                gap: 10px;
            }
            
            .login-prompt p {
                text-align: center;
                min-width: auto;
            }
            
            .login-btn {
                width: 100%;
                padding: 10px 25px;
            }
        }

        /* Mobile phones - medium */
        @media (max-width: 576px) {
            .navbar-brand {
                font-size: 1.2rem;
                margin-left: 5px;
            }
            
            .video-section {
                min-height: 35vh;
                height: 35vh;
            }

            .video-wrapper,
            #youtube-player {
                min-height: 35vh;
                height: 35vh;
            }
            
            .sidebar {
                padding: 12px;
                max-height: 65vh;
            }
            
            .sidebar-card {
                padding: 12px;
                margin-bottom: 10px;
            }
            
            .sidebar-card-text {
                font-size: 1rem;
                line-height: 1.3;
            }
            
            .sidebar-card-text i {
                font-size: 1.3rem;
                margin-right: 8px;
            }
            
            .quick-actions {
                padding-top: 12px;
                margin-top: 15px;
            }
            
            .quick-action {
                padding: 8px 2px;
            }
            
            .quick-action i {
                font-size: 1.2rem;
                margin-bottom: 3px;
            }
            
            .quick-action div {
                font-size: 0.7rem;
            }
            
            .request-prayer-btn {
                padding: 10px;
                font-size: 0.9rem;
            }
        }

        /* Mobile phones - small */
        @media (max-width: 480px) {
            .navbar-custom {
                padding: 0.3rem 0.5rem;
            }
            
            .container {
                padding-left: 10px;
                padding-right: 10px;
            }
            
            .navbar-brand {
                font-size: 1.1rem;
                margin-left: 0;
            }
            
            .video-section {
                min-height: 30vh;
                height: 30vh;
            }

            .video-wrapper,
            #youtube-player {
                min-height: 30vh;
                height: 30vh;
            }
            
            .sidebar {
                padding: 10px;
                max-height: 70vh;
            }
            
            .sidebar-card {
                padding: 10px;
                margin-bottom: 8px;
            }
            
            .sidebar-card-text {
                font-size: 0.95rem;
            }
            
            .sidebar-card-text i {
                font-size: 1.2rem;
                margin-right: 6px;
            }
            
            .sidebar-card-btn {
                padding: 6px 20px;
                font-size: 0.9rem;
            }
            
            .login-prompt {
                padding: 12px;
            }
            
            .login-prompt p {
                font-size: 0.85rem;
            }
            
            .login-btn {
                padding: 8px 20px;
                font-size: 0.85rem;
            }
            
            .request-prayer-btn {
                padding: 8px;
                font-size: 0.85rem;
            }
            
            .quick-actions {
                grid-template-columns: repeat(3, 1fr);
                gap: 2px;
                padding-top: 10px;
                margin-top: 10px;
            }
            
            .quick-action {
                padding: 6px 2px;
            }
            
            .quick-action i {
                font-size: 1.1rem;
                margin-bottom: 2px;
            }
            
            .quick-action div {
                font-size: 0.65rem;
            }
            
            .stream-status,
            .viewer-count {
                top: 8px;
                padding: 3px 6px;
                font-size: 0.75rem;
            }
            
            .stream-status {
                left: 8px;
            }
            
            .viewer-count {
                right: 8px;
            }
        }

        /* Extra small devices */
        @media (max-width: 360px) {
            .video-section {
                min-height: 25vh;
                height: 25vh;
            }

            .video-wrapper,
            #youtube-player {
                min-height: 25vh;
                height: 25vh;
            }
            
            .sidebar {
                max-height: 75vh;
                padding: 8px;
            }
            
            .sidebar-card {
                padding: 8px;
                margin-bottom: 6px;
            }
            
            .sidebar-card-text {
                font-size: 0.9rem;
            }
            
            .quick-actions {
                grid-template-columns: repeat(3, 1fr);
                gap: 1px;
            }
            
            .quick-action div {
                font-size: 0.6rem;
            }
        }

        /* Landscape orientation adjustments */
        @media (max-height: 600px) and (orientation: landscape) {
            .video-section {
                min-height: 60vh;
                height: 60vh;
            }

            .video-wrapper,
            #youtube-player {
                min-height: 60vh;
                height: 60vh;
            }
            
            .sidebar {
                max-height: 60vh;
            }
        }

        @media (max-height: 500px) and (orientation: landscape) {
            .video-section {
                min-height: 70vh;
                height: 70vh;
            }

            .video-wrapper,
            #youtube-player {
                min-height: 70vh;
                height: 70vh;
            }
            
            .sidebar {
                max-height: 70vh;
                padding: 10px;
            }
            
            .sidebar-card {
                padding: 8px;
                margin-bottom: 6px;
            }
        }

        /* High DPI displays */
        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
            .live-indicator {
                width: 10px;
                height: 10px;
            }
        }

        /* Ensure proper scrolling on mobile */
        @media (max-width: 768px) {
            body {
                overflow-x: hidden;
            }
            
            .sidebar {
                overflow-y: auto;
                -webkit-overflow-scrolling: touch;
            }
        }

        /* Fix navbar collapse on mobile */
        @media (max-width: 991px) {
            .navbar-collapse {
                background: #f8f9fa;
                margin-top: 10px;
                padding: 10px;
                border-radius: 5px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }
            
            .navbar-nav .nav-link {
                padding: 8px 0;
                margin: 0;
                border-bottom: 1px solid #eee;
            }
            
            .navbar-nav .nav-link:last-child {
                border-bottom: none;
            }
            
            .navbar-nav .nav-link.second-nav.active::after {
                display: none;
            }
            
            .navbar-nav .nav-link.second-nav.active {
                background-color: #e4af00;
                color: white !important;
                border-radius: 5px;
                padding-left: 10px;
                padding-right: 10px;
            }
        }
    </style>
</head>

<body>

    @include('home.header')

    <div class="orange-separator"></div>

    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">Streaming Live</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="custom-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link second-nav active" href="{{ route('attend-online') }}">Attend Online</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="{{ route('who-we-are') }}">Who We Are</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="{{ route('what-to-expect') }}">What to Expect</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="{{ route('contact-us') }}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="{{ route('give-god') }}">Give To God</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="{{ route('our-beliefs') }}">Our Beliefs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main-content-wrapper">
        <div class="stream-container">
            <div class="video-section">
                <div class="video-wrapper">
                    <iframe id="youtube-player"
                        src="https://www.youtube.com/embed/YUyzvduXvgs?autoplay=0&mute=0&rel=0&showinfo=0"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>

                    <div class="stream-overlay" id="streamOverlay">
                        <div>
                            <h1>Welcome to UNISDA Church</h1>
                            <p>The service will begin soon.</p>
                            <div style="margin-bottom: 2rem;">
                                <svg width="80" height="40" viewBox="0 0 200 100" fill="white">
                                    <text x="10" y="50" font-family="Arial, sans-serif" font-size="24"
                                        font-weight="bold">UNISDA</text>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="stream-status">
                        <div class="live-indicator"></div>
                        <span class="live">LIVE</span>
                        <span class="live">- 0:00:02</span>
                    </div>

                    <div class="viewer-count">
                        <i class="fas fa-eye"></i>
                        <span class="live">127</span>
                    </div>
                </div>
            </div>

            <div class="sidebar" id="sidebar">
                <div class="sidebar-content">
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
                        <p><i class="fa-solid fa-circle-info"></i> Log in to experience the best of UNISDA Church
                            Online!</p>
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
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>

    <script>
        // Stream overlay toggle (simulating stream start)
        function hideStreamOverlay() {
            document.getElementById('streamOverlay').classList.add('hidden');
        }

        // Simulate stream starting after 3 seconds
        setTimeout(hideStreamOverlay, 3000);

        // Navigation active state handler
        document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('.nav-link.second-nav');

            navLinks.forEach(link => {
                link.addEventListener('click', function (