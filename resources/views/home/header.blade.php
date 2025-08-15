<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNISDA Church</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        .header_section {
            background-color: #2c6448;
        }

        .custom_nav-container {
            padding: 0.75rem 2rem;
        }

        .brand-wrapper {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .sda_logo8 {
            height: 40px;
            width: auto;
        }

        .xs {
            font-weight: 600;
            font-size: 1.1rem;
            color: white;
            margin: 0;
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            transition: color 0.3s ease;
            text-transform: uppercase;
            font-size: 0.9rem;
        }

        .navbar-nav .nav-link:hover {
            color: #ffd700 !important;
        }

        /* Login button styling */
        .login-wrapper {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-login {
            background-color: none;
            border: none;
            border-radius: 4px;
            color: white !important;
            padding: 0.5rem 1rem;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-transform: uppercase;
            font-size: 0.9rem;
        }

        .btn-login:hover {
            background-color: none;
            color: #e4af00 !important;
            text-decoration: none;
        }

        .btn-dashboard {
            background-color: #2c6448;
            border: none;
            border-radius: 4px;
            color: white;
            padding: 0.5rem 1rem;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.3s ease;
            text-transform: uppercase;
            font-size: 0.9rem;
            display: inline-block;
        }

        .btn-dashboard:hover {
            background-color: #2c6448;
            color: white;
            text-decoration: none;
        }

        /* Mobile responsiveness */
        @media (max-width: 767px) {
            .custom_nav-container {
                padding: 0.5rem 1rem;
            }
            
            .navbar-nav {
                margin-top: 1rem;
            }
            
            .navbar-nav .nav-item {
                text-align: center;
                margin: 0.25rem 0;
            }
        }

        /* Navbar toggler styling */
        .navbar-toggler {
            border: none;
            padding: 0.25rem 0.5rem;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.8%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='m4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
    </style>
</head>
            <nav class="navbar navbar-expand-md custom_nav-container">
                <div class="brand-wrapper">
                    <a href="/" class="navbar-brand">
                        <img src="images/sda3.png" class="sda_logo8" alt="UNISDA Church Logo">
                    </a>
                    <span class="xs">UNISDA CHURCH</span>
                </div>
                
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-3">
                        <li class="nav-item">
                            <a class="nav-link" href="/">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#media">ATTEND ONLINE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">MEDIA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#give">GIVE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('what-to-expect') }}">WHO WE ARE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#worship">CONTACT US</a>
                        </li>
                    </ul>
                    
                    <!-- Authentication section -->
                    @if (Route::has('login'))
                        @auth
                            <!-- Desktop View -->
                            <ul class="navbar-nav ml-auto d-none d-md-flex">
                                <li class="nav-item">
                                    <a class="btn-dashboard" href="/redirect">GO TO DASHBOARD</a>
                                </li>
                            </ul>

                            <!-- Mobile View -->
                            <ul class="navbar-nav d-md-none justify-content-center w-100 mt-3">
                                <li class="nav-item">
                                    <a class="btn-dashboard" href="/redirect">GO TO DASHBOARD</a>
                                </li>
                            </ul>
                        @else
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="btn-login" href="{{ url('/redirect') }}">
                                        <i class="fas fa-user-circle"></i>
                                        LOG IN
                                    </a>
                                </li>
                            </ul>
                        @endauth
                    @endif
                </div>
            </nav>

