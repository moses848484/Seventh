<style>
    .btn-primary {
        border: none !important;
        border-radius: 0 !important;
        color: white !important;
        box-shadow: none !important;
        outline: none !important;
        padding: 0.25rem 0.5rem;
        margin-top: 2px;
    }

    /* Remove any spacing from the icon wrapper if needed */
    .fas.fa-user-circle {
        margin-right: 0.25rem;
        margin-top: 2px;
    }

    /* Fix navbar to top */
    .header_section {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1030;
        background: white;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    /* Add padding to body to account for fixed header */
    body {
        padding-top: 80px; /* Adjust this value based on your navbar height */
    }

    /* Profile container styling for authenticated users */
    .profile-dashboard-container {
        display: flex;
        align-items: center;
        gap: 1rem;
        position: relative;
    }

    .profile-dashboard-container .nav-link {
        margin: 0;
        padding: 0.5rem 1rem;
        white-space: nowrap;
    }

    /* Ensure navbar items stay in place */
    .navbar-nav {
        position: relative;
    }

    .navbar-nav .nav-item {
        position: relative;
    }

    /* Mobile responsive for authenticated section */
    @media (max-width: 767px) {
        .profile-dashboard-container {
            flex-direction: column;
            text-align: center;
            gap: 0.5rem;
        }
        
        body {
            padding-top: 100px; /* Adjust for mobile navbar height */
        }
    }
</style>
<header class="header_section">
    <div class="container3">
        <nav class="navbar navbar-expand-md custom_nav-container py-3 px-5">
            <div class="d-flex align-items-center brand-wrapper">
                <a href="/" class="navbar-brand mb-0">
                    <img src="images/sda3.png" class="sda_logo8" alt="Dashboard Logo">
                </a>
                <span class="xs">SDA.CHURCH</span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="https://www.facebook.com/@universityadventist/">ATTEND ONLINE <span
                                class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">MEDIA <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">WHO WE ARE &nbsp;<span
                                class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">GIVE &nbsp;<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">LOCATIONS&nbsp;<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">WORSHIP &nbsp;<span class="sr-only">(current)</span></a>
                    </li>


                    @if (Route::has('login'))
                        @auth
                            <!-- Desktop View -->
                            <ul class="navbar-nav ml-auto d-none d-md-flex">
                                <!-- User Profile/Authentication Dropdown with Dashboard Link -->
                                <li class="nav-item">
                                    <div class="profile-dashboard-container">
                                        <x-app-layout class="bg-white"></x-app-layout>
                                        <a class="nav-link" href="/redirect">GO TO DASHBOARD <span
                                                class="sr-only">(current)</span></a>
                                    </div>
                                </li>
                            </ul>

                            <!-- Mobile View -->
                            <ul class="navbar-nav d-md-none justify-content-center w-100">
                                <li class="nav-item">
                                    <div class="profile-dashboard-container">
                                        <x-app-layout class="bg-white"></x-app-layout>
                                        <a class="nav-link" href="/redirect">GO TO DASHBOARD <span
                                                class="sr-only">(current)</span></a>
                                    </div>
                                </li>
                            </ul>

                        @else
                            <li class="nav-item">
                                <i class="fas fa-user-circle fa-2x"><a class="btn btn-primary" id="logincss"
                                        href="{{ url('/redirect') }}">LOG IN</a></i>
                            </li>
                        @endauth
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</header>