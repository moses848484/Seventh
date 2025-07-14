<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm">
    <div class="container-fluid">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/images/sda.png" alt="Logo" height="40">
        </a>

        <!-- Toggler for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Right side -->
        <div class="d-none d-lg-flex align-items-center ms-auto">
            @auth
                <!-- User dropdown -->
                <div class="dropdown">
                    <button class="btn dropdown-toggle d-flex align-items-center" type="button" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ Auth::user()->profile_photo_url }}" class="rounded-circle me-2" height="30" width="30" alt="Avatar">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
                        <li><h6 class="dropdown-header">Manage Account</h6></li>
                        <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a></li>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <li><a class="dropdown-item" href="{{ route('api-tokens.index') }}">API Tokens</a></li>
                        @endif

                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item" type="submit">Log Out</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Log in</a>
                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
            @endauth
        </div>
    </div>
</nav>

<!-- Offcanvas Mobile Menu -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasMenuLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/redirected') }}">
                    <i class="fa-solid fa-gauge-high me-2"></i>Dashboard
                </a>
            </li>

            @auth
                <li><hr class="dropdown-divider"></li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.show') }}">
                        <i class="fa-solid fa-user me-2"></i>Profile
                    </a>
                </li>
                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('api-tokens.index') }}">
                            <i class="fa-solid fa-key me-2"></i>API Tokens
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link"><i class="fa-solid fa-sign-out-alt me-2"></i>Log Out</button>
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                        <i class="fa-solid fa-right-to-bracket me-2"></i>Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">
                        <i class="fa-solid fa-user-plus me-2"></i>Register
                    </a>
                </li>
            @endauth
        </ul>
    </div>
</div>
