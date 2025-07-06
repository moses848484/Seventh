<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Include your CSS files here -->
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="https://seventh-production.up.railway.app/images/sda3.png" type="">
    <title>SDA Home Page</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="https://seventh-production.up.railway.app/home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="https://seventh-production.up.railway.app/home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="https://seventh-production.up.railway.app/home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="https://seventh-production.up.railway.app/home/css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://seventh-production.up.railway.app/css/fontawesome-free-6.5.2-web/css/all.min.css" />
    @notifyCss
</head>

<body>

    <header class="header_section">
        <div class="container3">
            <nav class="navbar navbar-expand-sm custom_nav-container">
                <!-- Logo -->
                <a href="/" class="navbar-brand">
                    <img src="images/sda3.png" class="sda_logo8" alt="Dashboard Logo">
                </a>

                <!-- Centered text -->
                <span class="xs d-block text-center mx-auto">UNIVERSITY SDA.CHURCH</span>

                <!-- Hamburger menu toggle -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="https://www.facebook.com/@universityadventist/">Attend Online</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Media</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Who We Are</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Give</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Locations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Worship</a>
                        </li>

                        <!-- Authentication Section -->
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item d-none d-md-block">
                                    <a class="nav-link" href="/redirect">Go To Dashboard</a>
                                </li>
                                <li class="nav-item d-md-none text-center w-100">
                                    <a class="nav-link" href="/redirect">Go To Dashboard</a>
                                </li>
                            @else
                                <li class="nav-item d-flex align-items-center">
                                    <a class="btn btn-primary mr-2" id="logincss" href="{{ url('/redirect') }}">
                                        <i class="fas fa-user-circle"></i> Log In
                                    </a>
                                    <a class="btn btn-success" href="{{ route('register') }}">
                                        <i class="fas fa-user-plus"></i> Register
                                    </a>
                                </li>
                            @endauth
                        @endif

                    </ul>
                </div>
            </nav>
        </div>
    </header>

</body>

</html>