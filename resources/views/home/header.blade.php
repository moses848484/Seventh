<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <!-- Logo (hidden on small screens) -->
            <a class="navbar-brand brand-logo-mini d-none d-md-block" href="index.html">
                <img id="logo-img" src="admin/assets/images/faces/sda3.png" class="img-fluid"
                    style="max-height: 60px; width: auto; display: block;" alt="logo" />
            </a>

            <!-- Smaller logo for mobile -->
            <a class="navbar-brand brand-logo-mini d-block d-md-none" href="index.html">
                <img id="logo-img-small" src="admin/assets/images/faces/sda3.png" class="img-fluid"
                    style="max-height: 40px; margin-top: 10px; width: auto; display: block;" alt="logo" />
            </a>

            <!-- Toggler button -->
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <!-- Centered text for xs breakpoint -->
            <span class="xs d-block text-center mx-auto">UNIVERSITY SDA.CHURCH</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="https://www.facebook.com/@universityadventist/">Attend Online <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Media <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Who We Are &nbsp;<span
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
                                    <a class="nav-link" href="/redirect">Go To Dashboard <span
                                            class="sr-only">(current)</span></a>
                                </li>
                            </ul>

                            <!-- Mobile View -->
                            <ul class="navbar-nav d-md-none justify-content-center w-100">
                                <li class="nav-item">
                                    <a class="nav-link" href="/redirect">Go To Dashboard <span
                                            class="sr-only">(current)</span></a>
                                </li>
                            
                            </ul>
                            
                       
                @else
                    <li class="nav-item">
                        <i class="fas fa-user-circle fa-2x"><a class="btn btn-primary" id="logincss"
                                href="{{ url('/redirect') }}">Log In</a></i>
                        <i class="fas fa-user-plus fa-2x"><a class="btn btn-success"
                                href="{{ route('register') }}">Register</a></i>
                    </li>
                @endauth
                @endif
                </ul>
            </div>      
    </div>
 </nav>