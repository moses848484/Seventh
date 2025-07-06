<header class="header_section bg-light">
  <div class="container-fluid px-3">
    <nav class="navbar navbar-expand-lg navbar-light">
      
      <!-- Logo -->
      <a href="/" class="navbar-brand">
        <img src="images/sda3.png" class="sda_logo8" alt="Dashboard Logo">
      </a>

      <!-- Centered text (can be styled with media queries) -->
      <span class="xs d-block text-center mx-auto">UNIVERSITY SDA.CHURCH</span>

      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link" href="https://www.facebook.com/@universityadventist/">Attend Online</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="index.html">Media</a></li>
          <li class="nav-item"><a class="nav-link" href="index.html">Who We Are</a></li>
          <li class="nav-item"><a class="nav-link" href="index.html">Give</a></li>
          <li class="nav-item"><a class="nav-link" href="index.html">Locations</a></li>
          <li class="nav-item"><a class="nav-link" href="index.html">Worship</a></li>

          @if (Route::has('login'))
            @auth
              <!-- Dashboard links -->
              <li class="nav-item d-none d-md-block">
                <a class="nav-link" href="/redirect">Go To Dashboard</a>
              </li>
              <li class="nav-item d-md-none text-center w-100">
                <a class="nav-link" href="/redirect">Go To Dashboard</a>
              </li>
            @else
              <li class="nav-item d-flex align-items-center">
                <a class="btn btn-primary me-2" href="{{ url('/redirect') }}">
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
