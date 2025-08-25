<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="https://seventh-production.up.railway.app/images/sda3.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Attend Online - UNISDA Church</title>
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/bootstrap.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/style.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/responsive.css" />
    <link rel="stylesheet"
        href="https://seventh-production.up.railway.app/css/fontawesome-free-6.5.2-web/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <style>
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

        /* Navbar */
        .navbar-custom {
            background: #f8f9fa !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            color: #333 !important;
        }

        .navbar-nav .nav-link {
            color: #555 !important;
            font-weight: 500;
            margin: 0 1rem;
        }

        .navbar-nav .nav-link:hover {
            color: #000 !important;
        }

        .navbar-nav .nav-link.second-nav {
            color: #ccc !important;
        }

        .navbar-nav .nav-link.second-nav:hover {
            color: #000 !important;
        }

        .nav-link.second-nav.active::after {
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
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path fill="white" d="M480 224C492.9 224 504.6 231.8 509.6 243.8C514.6 255.8 511.8 269.5 502.7 278.7L342.7 438.7C330.2 451.2 309.9 451.2 297.4 438.7L137.4 278.7C128.2 269.5 125.5 255.8 130.5 243.8C135.5 231.8 147.1 224 160 224L480 224z"/></svg>');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }

        /* New wrapper to handle the main content area */
        .main-content-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow: auto;
        }

        /* Main container */
        .stream-container {
            flex: 1;
            display: flex;
            min-height: 0;
        }

        /* Video section */
        .video-section {
            flex: 1;
            position: relative;
            background: #eee;
            width: 100%;
        }

        .video-wrapper,
        #youtube-player {
            width: 100%;
            height: 100%;
            min-height: 100%;
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
        }

        .stream-overlay.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .stream-overlay h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .stream-overlay p {
            font-size: 1.4rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .church-logo {
            width: 120px;
            height: auto;
            margin-bottom: 2rem;
            filter: brightness(0) invert(1);
        }

        /* Stream Status */
        .stream-status {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(0, 0, 0, 0.8);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 8px;
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
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }

            100% {
                opacity: 1;
            }
        }

        /* Viewer Count */
        .viewer-count {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(0, 0, 0, 0.8);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 8px;
            z-index: 20;
        }

        /* Control Panel */
        .control-panel {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
            padding: 60px 20px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 20;
        }

        .stream-title {
            flex: 1;
        }

        .stream-title h2 {
            font-size: 1.8rem;
            font-weight: 600;
            margin: 0 0 5px 0;
        }

        .stream-subtitle {
            opacity: 0.8;
            font-size: 1rem;
        }

        .stream-actions {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .action-btn {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            padding: 12px;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .action-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.1);
        }

        .action-btn.active {
            background: #667eea;
        }

        /* Sidebar */
        .sidebar {
            width: 400px;
            background: rgba(0, 0, 0, 0.95);
            overflow-y: auto;
            flex-shrink: 0;
            color: white;
        }

        .sidebar-header {
            padding: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .sidebar-content {
            padding: 20px;
        }

        .close-sidebar {
            background: none;
            border: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
            display: none;
        }

        /* Prayer Request Section */
        .prayer-section {
            background: rgba(102, 126, 234, 0.2);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 25px;
            text-align: center;
        }

        .prayer-section h3 {
            color: #667eea;
            margin-bottom: 15px;
            font-size: 1.4rem;
        }

        .prayer-section p {
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .prayer-btn {
            background: #667eea;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .prayer-btn:hover {
            background: #5a6fd8;
            transform: translateY(-2px);
        }

        /* Commitment Section */
        .commitment-section {
            background: rgba(228, 175, 0, 0.2);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 25px;
            text-align: center;
        }

        .commitment-section h3 {
            color: #e4af00;
            margin-bottom: 15px;
            font-size: 1.4rem;
        }

        .raise-hand-btn {
            background: #e4af00;
            color: #000;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 0 auto;
        }

        .raise-hand-btn:hover {
            background: #d4a000;
            transform: translateY(-2px);
        }

        /* Quick Actions */
        .quick-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 25px;
        }

        .quick-action {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            color: white;
        }

        .quick-action:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .quick-action i {
            font-size: 24px;
            margin-bottom: 10px;
            display: block;
        }

        /* Login Prompt */
        .login-prompt {
            background: rgba(102, 126, 234, 0.2);
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid rgba(102, 126, 234, 0.3);
        }

        .login-btn {
            background: transparent;
            color: #667eea;
            border: 2px solid #667eea;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .login-btn:hover {
            background: #667eea;
            color: white;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .sidebar {
                width: 350px;
            }
        }

        @media (max-width: 768px) {
            .stream-container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                min-height: auto;
                order: 2;
            }

            .video-section {
                width: 100%;
                order: 1;
                min-height: 60vh;
            }

            .video-wrapper,
            #youtube-player {
                min-height: 60vh;
            }
        }
        
        .fa-eye {
            color: white;
        }
    </style>
</head>

<body>
    @include('home.header')

    <div class="orange-separator"></div>

    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">About Us</a>
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
                        src="https://www.youtube.com/embed/YUyzvduXvgs?autoplay=0&mute=0&rel=0&showinfo=0" frameborder="0"
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
                <div class="sidebar-header">
                    <h3>Church Experience</h3>
                    <button class="close-sidebar" onclick="closeSidebar()">×</button>
                </div>
                <div class="sidebar-content">
                    <div class="login-prompt">
                        <p><i class="fas fa-info-circle"></i> Log in to experience the best of UNISDA Church Online!</p>
                        <button class="login-btn">Log In</button>
                    </div>

                    <div class="commitment-section">
                        <h3><i class="fas fa-map-marker-alt"></i> I commit my life to Jesus.</h3>
                        <p>Let us know by raising your hand.</p>
                        <button class="raise-hand-btn">
                            <span>✋</span>
                            Raise Hand
                        </button>
                    </div>

                    <div class="prayer-section">
                        <h3><i class="fas fa-heart"></i> Request Prayer</h3>
                        <p>Our prayer team is here for you.</p>
                        <button class="prayer-btn">Request Prayer</button>
                    </div>

                    <div class="quick-actions">
                        <button class="quick-action">
                            <i class="fas fa-comments"></i>
                            <div>Feed</div>
                        </button>
                        <button class="quick-action">
                            <i class="fas fa-praying-hands"></i>
                            <div>Pray</div>
                        </button>
                        <button class="quick-action">
                            <i class="fas fa-calendar"></i>
                            <div>Schedule</div>
                        </button>
                        <button class="quick-action">
                            <i class="fas fa-sticky-note"></i>
                            <div>Notes</div>
                        </button>
                        <button class="quick-action">
                            <i class="fas fa-book"></i>
                            <div>Bible</div>
                        </button>
                        <button class="quick-action">
                            <i class="fas fa-share"></i>
                            <div>Share</div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('home.footer')
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Stream overlay toggle (simulating stream start)
        function hideStreamOverlay() {
            document.getElementById('streamOverlay').classList.add('hidden');
        }

        // Simulate stream starting after 3 seconds
        setTimeout(hideStreamOverlay, 3000);

        // Mute button functionality
        document.getElementById('muteBtn').addEventListener('click', function() {
            this.classList.toggle('active');
            const icon = this.querySelector('i');
            if (this.classList.contains('active')) {
                icon.className = 'fas fa-volume-mute';
            } else {
                icon.className = 'fas fa-volume-up';
            }
        });

        // Fullscreen functionality
        document.getElementById('fullscreenBtn').addEventListener('click', function() {
            const videoSection = document.querySelector('.video-section');
            if (document.fullscreenElement) {
                document.exitFullscreen();
                this.querySelector('i').className = 'fas fa-expand';
            } else {
                videoSection.requestFullscreen();
                this.querySelector('i').className = 'fas fa-compress';
            }
        });

        // Navigation active state handler
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link.second-nav');

            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    // Remove active class from all links
                    navLinks.forEach(l => l.classList.remove('active'));
                    // Add active class to clicked link
                    this.classList.add('active');
                });
            });
        });

        // Simulate viewer count changes
        function updateViewerCount() {
            const viewerElement = document.querySelector('.viewer-count span');
            const currentCount = parseInt(viewerElement.textContent);
            const change = Math.floor(Math.random() * 10) - 5; // -5 to +5
            const newCount = Math.max(50, currentCount + change);
            viewerElement.textContent = newCount;
        }

        setInterval(updateViewerCount, 15000); // Update every 15 seconds

        // Add keyboard shortcuts
        document.addEventListener('keydown', function(e) {
            switch (e.key) {
                case ' ':
                    e.preventDefault();
                    // Toggle play/pause (would need YouTube API)
                    break;
                case 'm':
                    document.getElementById('muteBtn').click();
                    break;
                case 'f':
                    document.getElementById('fullscreenBtn').click();
                    break;
            }
        });

        // Prayer and commitment button interactions
        document.querySelector('.prayer-btn').addEventListener('click', function() {
            alert('Thank you for your prayer request. Our team will pray for you.');
        });

        document.querySelector('.raise-hand-btn').addEventListener('click', function() {
            this.style.background = '#d4a000';
            this.innerHTML = '<span>✋</span> Hand Raised!';
            setTimeout(() => {
                this.style.background = '#e4af00';
                this.innerHTML = '<span>✋</span> Raise Hand';
            }, 3000);
        });

        // Login button functionality
        document.querySelector('.login-btn').addEventListener('click', function() {
            alert('Login functionality would be implemented here.');
        });
    </script>
</body>

</html>