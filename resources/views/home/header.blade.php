<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDA Church - Mobile Navbar Fix</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <style>
        .header_section {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .custom_nav-container {
            padding: 15px 20px;
        }
        
        .sda_logo8 {
            height: 40px;
            width: auto;
        }
        
        .xs {
            font-weight: bold;
            color: #333;
            margin-left: 10px;
        }
        
        .brand-wrapper {
            flex-grow: 1;
        }
        
        /* Ensure toggler is visible on mobile */
        .navbar-toggler {
            border: 1px solid #ccc;
            padding: 4px 8px;
            background-color: transparent;
        }
        
        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
        }
        
        /* Custom toggler icon */
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        
        .nav-link {
            color: #333 !important;
            font-weight: 500;
            padding: 8px 15px !important;
        }
        
        .nav-link:hover {
            color: #007bff !important;
        }
        
        #logincss {
            background-color: #007bff;
            border-color: #007bff;
            padding: 5px 15px;
            font-size: 14px;
            text-decoration: none;
            color: white !important;
            border-radius: 4px;
            margin-left: 5px;
        }
        
        #logincss:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        
        .fa-user-circle {
            color: #333;
            margin-right: 5px;
        }
        
        /* Mobile specific styles */
        @media (max-width: 767.98px) {
            .navbar-nav {
                text-align: center;
                padding-top: 10px;
            }
            
            .nav-item {
                margin: 5px 0;
            }
            
            .custom_nav-container {
                padding: 10px 15px;
            }
        }
    </style>
</head>
<body>
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md custom_nav-container">
                <div class="d-flex align-items-center brand-wrapper">
                    <a href="/" class="navbar-brand mb-0">
                        <img src="https://via.placeholder.com/120x40/007bff/white?text=SDA+LOGO" class="sda_logo8" alt="Dashboard Logo">
                    </a>
                    <span class="xs">SDA.CHURCH</span>
                </div>
                
                <!-- Mobile toggler button - this will show on mobile -->
                <button class="navbar-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.facebook.com/@universityadventist/">ATTEND ONLINE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">MEDIA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">WHO WE ARE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">GIVE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">LOCATIONS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">WORSHIP</a>
                        </li>
                        
                        <!-- Auth section - simplified for demo -->
                        <li class="nav-item">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-user-circle fa-2x"></i>
                                <a class="btn btn-primary" id="logincss" href="/redirect">LOG IN</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Demo content to show navbar behavior -->
    <main class="container my-5">
        <h1>SDA Church Website</h1>
        <p>This is a demo to show the mobile navbar toggler working properly. Resize your browser window or view on mobile to see the hamburger menu.</p>
        <p>The navbar toggler should now be visible on mobile devices and properly toggle the navigation menu.</p>
    </main>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>