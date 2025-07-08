<header class="header_section">
  <div class="container3">
    <nav id="mainNavbar" class="navbar navbar-expand-md custom_nav-container">
      <a href="/" class="navbar-brand">
        <img src="images/sda3.png" class="sda_logo8" alt="Dashboard Logo">
      </a>

      <span class="xs d-block text-center mx-auto">SDA.CHURCH</span>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/@universityadventist/">Attend Online</a></li>
          <li class="nav-item"><a class="nav-link" href="index.html">Media</a></li>
          <li class="nav-item"><a class="nav-link" href="index.html">Who We Are</a></li>
          <li class="nav-item"><a class="nav-link" href="index.html">Give</a></li>
          <li class="nav-item"><a class="nav-link" href="index.html">Locations</a></li>
          <li class="nav-item"><a class="nav-link" href="index.html">Worship</a></li>

          @if (Route::has('login'))
            @auth
              <!-- Desktop -->
              <li class="nav-item d-none d-md-block">
                <a class="nav-link" href="/redirect">Go To Dashboard</a>
              </li>
              <!-- Mobile -->
              <li class="nav-item d-md-none w-100 text-center">
                <a class="nav-link" href="/redirect">Go To Dashboard</a>
              </li>
            @else
              <li class="nav-item">
                <a class="btn btn-outline-light me-2" href="{{ url('/redirect') }}"><i class="fas fa-user-circle"></i> Log In</a>
                <a class="btn btn-warning text-dark" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Register</a>
              </li>
            @endauth
          @endif
        </ul>
      </div>
    </nav>
  </div>
</header>
