<header class="header_section">
    <div class="container3">
        <nav class="navbar navbar-expand-md custom_nav-container py-3 px-5">
              <div class="d-flex align-items-center brand-wrapper">
                <a href="/" class="navbar-brand mb-0">
                    <img src="images/sda3.png" class="sda_logo8" alt="Dashboard Logo">
                </a>
                <span class="xs">SDA.CHURCH</span>
            </div>
             <!-- Toggler button -->
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
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