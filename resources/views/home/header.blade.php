<header class="header_section">
    <div class="container3">
        <nav class="navbar navbar-expand-md custom_nav-container py-3 px-4">
            <div class="d-flex align-items-center brand-wrapper">
                <a href="/" class="navbar-brand mb-0">
                    <img src="images/sda3.png" class="sda_logo8" alt="Dashboard Logo">
                </a>
                <span class="xs">SDA.CHURCH</span>
            </div>

            <!-- Toggler for small screens -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation links -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">ATTEND ONLINE</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">MEDIA</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">WHO WE ARE</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">GIVE</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">LOCATIONS</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">WORSHIP</a>
                    </li>


                    @if (Route::has('login'))
                        @auth
                            <!-- Desktop View -->
                            <ul class="navbar-nav ml-auto d-none d-md-flex">
                                <li class="nav-item">
                                    <a class="nav-link" href="/redirect">GO TO DASHBOARD <span
                                            class="sr-only">(current)</span></a>
                                </li>
                            </ul>

                            <!-- Mobile View -->
                            <ul class="navbar-nav d-md-none justify-content-center w-100">
                                <li class="nav-item">
                                    <a class="nav-link" href="/redirect">GO TO DASHBOARD <span
                                            class="sr-only">(current)</span></a>
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