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
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/css/fontawesome-free-6.5.2-web/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <style>
        body {
            margin: 0;
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            background: #fff;
            color: #333;
            padding-bottom: 80px; /* Add space for bottom navigation */
        }

        /* Orange separator line */
        .orange-separator {
            height: 4px;
            background: #e4af00;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        /* Navbar background white with gray text */
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
            transition: color 0.3s ease;
            position: relative;
            padding-bottom: 15px !important;
        }

        .navbar-nav .nav-link:hover {
            color: #000 !important;
        }

        .navbar-nav .nav-link.second-nav {
            color: #ccc !important;
        }

        .navbar-nav .nav-link.second-nav:hover {
            color: #fff !important;
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
            border-radius: 2px 2px 0 0;
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

        /* Main Stream Container */
        .stream-container {
            position: relative;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Video Player Section */
        .video-section {
            position: relative;
            flex: 1;
            background: #eee;
            min-height: 60vh;
        }

        .video-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            min-height: 60vh;
        }

        #youtube-player {
            width: 100%;
            height: 100%;
            min-height: 60vh;
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
            color: white;
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
            color: white;
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
            color: white;
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

        /* Sidebar - FIXED z-index and visibility */
        .sidebar {
            position: fixed;
            right: 0;
            top: 0;
            width: 400px;
            height: 100vh;
            background: rgba(30, 30, 30, 0.98);
            backdrop-filter: blur(15px);
            border-left: 1px solid rgba(255, 255, 255, 0.1);
            transform: translateX(100%);
            transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            z-index: 2000; /* Increased z-index to ensure visibility */
            overflow-y: auto;
            box-shadow: -5px 0 20px rgba(0, 0, 0, 0.3);
        }

        .sidebar.active {
            transform: translateX(0);
        }

        .sidebar-header {
            padding: 25px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(102, 126, 234, 0.1);
        }

        .sidebar-header h3 {
            color: white;
            margin: 0;
            font-size: 1.3rem;
            font-weight: 600;
        }

        .sidebar-content {
            padding: 20px;
            color: white;
        }

        .close-sidebar {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: white;
            font-size: 20px;
            cursor: pointer;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .close-sidebar:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: rotate(90deg);
        }

        /* Prayer Request Section */
        .prayer-section {
            background: rgba(102, 126, 234, 0.2);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 25px;
            text-align: center;
            border: 1px solid rgba(102, 126, 234, 0.3);
        }

        .prayer-section h3 {
            color: #667eea;
            margin-bottom: 15px;
            font-size: 1.4rem;
        }

        .prayer-section p {
            margin-bottom: 20px;
            opacity: 0.9;
            color: #ccc;
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
            border: 1px solid rgba(228, 175, 0, 0.3);
        }

        .commitment-section h3 {
            color: #e4af00;
            margin-bottom: 15px;
            font-size: 1.4rem;
        }

        .commitment-section p {
            color: #ccc;
            margin-bottom: 20px;
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

        /* Bottom Navigation - FIXED positioning */
        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(30, 30, 30, 0.95);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            z-index: 1500; /* Lower than sidebar but still visible */
        }

        .nav-items {
            display: flex;
            justify-content: space-around;
            align-items: center;
            max-width: 600px;
            margin: 0 auto;
        }

        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #ccc;
            text-decoration: none;
            font-size: 0.8rem;
            transition: color 0.3s ease;
            cursor: pointer;
        }

        .nav-item:hover {
            color: white;
            text-decoration: none;
        }

        .nav-item i {
            font-size: 20px;
            margin-bottom: 5px;
        }

        /* Login Prompt */
        .login-prompt {
            background: rgba(102, 126, 234, 0.2);
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid rgba(102, 126, 234, 0.3);
        }

        .login-prompt p {
            color: #ccc;
            margin-bottom: 15px;
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

        /* Footer adjustments */
        footer {
            margin-bottom: 0 !important;
            padding-bottom: 90px !important; /* Add padding to account for bottom nav */
        }

        /* Sidebar overlay for mobile */
        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1900;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .sidebar-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                right: 0;
            }

            .stream-overlay h1 {
                font-size: 2.5rem;
            }

            .stream-overlay p {
                font-size: 1.2rem;
            }

            .control-panel {
                flex-direction: column;
                text-align: center;
                gap: 15px;
            }

            .stream-actions {
                justify-content: center;
            }

            .video-wrapper {
                min-height: 50vh;
            }

            #youtube-player {
                min-height: 50vh;
            }

            body {
                padding-bottom: 90px;
            }
        }
    </style>
</head>

<body>
    <!-- Header placeholder -->
    <div style="background: #333; color: white; padding: 15px 0; text-align: center;">
        <h4>UNISDA Church Header</h4>
    </div>

    <!-- Orange Separator Line -->
    <div class="orange-separator"></div>

    <!-- Navigation -->
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
                        <a class="nav-link second-nav active" href="#">Attend Online</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="#">Who We Are</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="#">What to Expect</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link second-nav" href="#">Our Beliefs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar Overlay for mobile -->
    <div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

    <!-- Main Stream Container -->
    <div class="stream-container">
        <!-- Video Section -->
        <div class="video-section">
            <div class="video-wrapper">
                <!-- YouTube Player -->
                <iframe id="youtube-player"
                    src="https://www.youtube.com/embed/YUyzvduXvgs?autoplay=0&mute=0&rel=0&showinfo=0" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>

                <!-- Stream Overlay (shows before stream starts) -->
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

                <!-- Stream Status -->
                <div class="stream-status">
                    <div class="live-indicator"></div>
                    <span>LIVE</span>
                    <span>- 0:00:02</span>
                </div>

                <!-- Viewer Count -->
                <div class="viewer-count">
                    <i class="fas fa-eye"></i>
                    <span>127</span>
                </div>

                <!-- Control Panel -->
                <div class="control-panel">
                    <div class="stream-title">
                        <h2>Sabbath Morning Service</h2>
                        <div class="stream-subtitle">Saturday Service • UNISDA Church</div>
                    </div>
                    <div class="stream-actions">
                        <button class="action-btn" id="muteBtn" title="Mute/Unmute">
                            <i class="fas fa-volume-up"></i>
                        </button>
                        <button class="action-btn" title="Closed Captions">
                            <i class="fas fa-closed-captioning"></i>
                        </button>
                        <button class="action-btn" title="Settings">
                            <i class="fas fa-cog"></i>
                        </button>
                        <button class="action-btn" id="fullscreenBtn" title="Fullscreen">
                            <i class="fas fa-expand"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar - FIXED -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h3>Church Experience</h3>
            <button class="close-sidebar" onclick="closeSidebar()">×</button>
        </div>
        <div class="sidebar-content">
            <!-- Login Prompt -->
            <div class="login-prompt">
                <p><i class="fas fa-info-circle"></i> Log in to experience the best of UNISDA Church Online!</p>
                <button class="login-btn">Log In</button>
            </div>

            <!-- Commitment Section -->
            <div class="commitment-section">
                <h3><i class="fas fa-map-marker-alt"></i> I commit my life to Jesus.</h3>
                <p>Let us know by raising your hand.</p>
                <button class="raise-hand-btn">
                    <span>✋</span>
                    Raise Hand
                </button>
            </div>

            <!-- Prayer Request -->
            <div class="prayer-section">
                <h3><i class="fas fa-heart"></i> Request Prayer</h3>
                <p>Our prayer team is here for you.</p>
                <button class="prayer-btn">Request Prayer</button>
            </div>

            <!-- Quick Actions -->
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

    <!-- Bottom Navigation - FIXED -->
    <div class="bottom-nav">
        <div class="nav-items">
            <div class="nav-item">
                <i class="fas fa-comments"></i>
                <span>Feed</span>
            </div>
            <div class="nav-item">
                <i class="fas fa-praying-hands"></i>
                <span>Pray</span>
            </div>
            <div class="nav-item" onclick="openSidebar()">
                <i class="fas fa-th"></i>
                <span>More</span>
            </div>
            <div class="nav-item">
                <i class="fas fa-calendar"></i>
                <span>Schedule</span>
            </div>
            <div class="nav-item">
                <i class="fas fa-book"></i>
                <span>Bible</span>
            </div>
        </div>
    </div>

    <!-- Footer placeholder -->
  <!-- footer start -->
    @include('home.footer')

    <!-- Font Awesome + Bootstrap JS -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Sidebar functionality - FIXED
        function openSidebar() {
            document.getElementById('sidebar').classList.add('active');
            document.getElementById('sidebarOverlay').classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        }

        function closeSidebar() {
            document.getElementById('sidebar').classList.remove('active');
            document.getElementById('sidebarOverlay').classList.remove('active');
            document.body.style.overflow = 'auto'; // Restore scrolling
        }

        // Stream overlay toggle (simulating stream start)
        function hideStreamOverlay() {
            document.getElementById('streamOverlay').classList.add('hidden');
        }

        // Simulate stream starting after 3 seconds
        setTimeout(hideStreamOverlay, 3000);

        // Mute button functionality
        document.getElementById('muteBtn').addEventListener('click', function () {
            this.classList.toggle('active');
            const icon = this.querySelector('i');
            if (this.classList.contains('active')) {
                icon.className = 'fas fa-volume-mute';
            } else {
                icon.className = 'fas fa-volume-up';
            }
        });

        // Fullscreen functionality
        document.getElementById('fullscreenBtn').addEventListener('click', function () {
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
        document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('.nav-link.second-nav');

            navLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    // Remove active class from all links
                    navLinks.forEach(l => l.classList.remove('active'));
                    // Add active class to clicked link
                    this.classList.add('active');
                });
            });
        });

        // Close sidebar when clicking outside (but not on bottom nav)
        document.addEventListener('click', function (event) {
            const sidebar = document.getElementById('sidebar');
            const moreBtn = event.target.closest('[onclick="openSidebar()"]');
            const bottomNav = event.target.closest('.bottom-nav');
            const sidebarContent = event.target.closest('.sidebar');

            if (!sidebarContent && !moreBtn && !bottomNav && sidebar.classList.contains('active')) {
                closeSidebar();
            }
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
        document.addEventListener('keydown', function (e) {
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
                case 'Escape':
                    closeSidebar();
                    break;
            }
        });

        // Prayer and commitment button interactions
        document.querySelector('.prayer-btn').addEventListener