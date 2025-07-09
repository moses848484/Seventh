<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');

        /* Apply Montserrat site-wide (optional) */
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .nav-link {
            color: white !important;
            font-size: 13px !important;
            background-color: transparent !important;
            font-family: 'Montserrat', sans-serif !important;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #e4af00 !important;
            background-color: transparent !important;
        }

        .btn-primary,
        .btn-success {
            font-family: 'Montserrat', sans-serif !important;
        }
    </style>

</head>
<header class="header_section">
    <div class="container3">
        <nav class="navbar navbar-expand-md custom_nav-container">
            <a href="/" class="navbar-brand">
                <img src="images/sda3.png" class="sda_logo8" alt="Dashboard Logo">
            </a>

            <!-- Centered text for xs breakpoint -->
            <span class="xs d-block text-center mx-auto">SDA.CHURCH</span>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/@universityadventist/">Attend Online</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Media</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Who We Are</a>
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
                </ul>

                @if (Route::has('login'))
                    @auth
                        <!-- Go To Dashboard (shows for all sizes) -->
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/redirect">Go To Dashboard</a>
                            </li>
                        </ul>
                    @else
                        <!-- Login/Register Buttons -->
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item d-flex align-items-center">
                                <a class="btn btn-primary me-2" id="logincss" href="{{ url('/redirect') }}">
                                    <i class="fas fa-user-circle me-1"></i> Log In
                                </a>
                                <a class="btn btn-success" href="{{ route('register') }}">
                                    <i class="fas fa-user-plus me-1"></i> Register
                                </a>
                            </li>
                        </ul>
                    @endauth
                @endif
            </div>
        </nav>
    </div>
</header>