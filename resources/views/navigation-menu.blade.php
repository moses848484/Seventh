<!-- resources/views/livewire/navigation-menu.blade.php -->

<div>
    <!-- Bootstrap 5 Navigation Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Branding/Logo -->
            <a class="navbar-brand" href="#">
                <img src="/images/sda.png" alt="Logo" width="30" height="24">
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    @if (Auth::user() && Auth::user()->usertype == 1)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('view_members') }}">Manage Members</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('view_inventory') }}">Inventory</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('departments') }}">Departments</a>
                        </li>
                    @endif
                    @if (Auth::user() && Auth::user()->usertype == 0)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('member_registration') }}">Member Registration</a>
                        </li>
                    @endif
                </ul>

                <!-- Profile Dropdown -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <img src="{{ Auth::user()->profile_photo_url ?? '/default-profile.png' }}" class="rounded-circle" width="32" height="32" alt="Profile Photo">
                            @else
                                {{ Auth::user()->name ?? 'Guest' }}
                            @endif
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a></li>
                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <li><a class="dropdown-item" href="{{ route('api-tokens.index') }}">API Tokens</a></li>
                            @endif
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
