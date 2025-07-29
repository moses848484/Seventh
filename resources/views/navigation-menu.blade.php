<nav x-data="{ open: false }" class="">
    <!-- Primary Navigation Menu -->
    <div class="">
        <div class="relative">
            <div class="flex justify-between items-center px-4 py-2">
                <!-- Hamburger Button - Hide on profile page -->
                <div class="d-block d-sm-none position-fixed {{ request()->routeIs('profile.show') ? 'd-none' : '' }}"
                    style="right: 20px; top: 20px; z-index: 1050;">
                    <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-target="#offcanvasMenu"
                        aria-controls="offcanvasMenu">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24"
                            style="width: 20px; height: 20px;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

                <!-- Navigation Links for Desktop -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <!-- Teams Dropdown -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="ml-3 relative">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <span class="inline-flex rounded-md">
                                        <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                            {{ Auth::user()->currentTeam->name }}
                                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                            </svg>
                                        </button>
                                    </span>
                                </x-slot>
                                <x-slot name="content">
                                    <div class="w-60">
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Manage Team') }}
                                        </div>
                                        <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                            {{ __('Team Settings') }}
                                        </x-dropdown-link>
                                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                            <x-dropdown-link href="{{ route('teams.create') }}">
                                                {{ __('Create New Team') }}
                                            </x-dropdown-link>
                                        @endcan
                                        @if (Auth::user()->allTeams()->count() > 1)
                                            <div class="border-t border-gray-200"></div>
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                {{ __('Switch Teams') }}
                                            </div>
                                            @foreach (Auth::user()->allTeams() as $team)
                                                <x-switchable-team :team="$team" />
                                            @endforeach
                                        @endif
                                    </div>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @endif

                    <!-- Settings Dropdown (Mobile landscape and Desktop) - Hide on profile page -->
                    @unless(request()->routeIs('profile.show'))
                        <div class="d-none d-sm-block position-fixed" style="right: 35px; top: 13px; z-index: 1050;">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <button
                                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-10 w-10 rounded-full object-cover"
                                                src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                        </button>
                                    @else
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                                {{ Auth::user()->name }}
                                                <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                </svg>
                                            </button>
                                        </span>
                                    @endif
                                </x-slot>
                                <x-slot name="content">
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Account') }}
                                    </div>
                                    <x-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>
                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                            {{ __('API Tokens') }}
                                        </x-dropdown-link>
                                    @endif
                                    <div class="border-t border-gray-200"></div>
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
                                        <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @endunless
                </div>
            </div>
        </div>
    </div>

    <!-- Offcanvas element - Enhanced with better structure -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel"
        style="width: 320px;">
        <!-- Fixed Offcanvas Header -->
        <div class="offcanvas-header border-bottom d-flex justify-content-between align-items-center">
            <h5 id="offcanvasMenuLabel" class="fw-bold mb-0">Menu</h5>
            <!-- Custom close button with Font Awesome icon -->
            <button type="button" class="btn btn-sm" data-dismiss="offcanvas" aria-label="Close"
                style="border: none; background: transparent;">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <div class="offcanvas-body p-0">
            <!-- User Profile Section -->
            <div class="p-3 border-bottom bg-light">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center flex-grow-1">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <img class="rounded-circle me-3" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}" style="width: 50px; height: 50px; object-fit: cover;" />
                        @else
                            <div class="rounded-circle me-3 bg-success d-flex align-items-center justify-content-center text-white fw-bold"
                                style="width: 50px; height: 50px;">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </div>
                        @endif
                        <div>
                            <div class="fw-semibold text-dark">{{ Auth::user()->name }}</div>
                            <div class="small text-muted">{{ Auth::user()->email }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rest of your navigation menu code remains the same -->
            <div class="p-0">
                <!-- Dashboard Link -->
                <div class="px-3 py-2">
                    <div class="nav-category small text-muted fw-bold mb-2">Navigation</div>
                    <a class="nav-link d-flex align-items-center py-2 px-3 rounded {{ request()->is('/redirect') ? 'bg-success text-white' : 'text-dark' }}"
                        href="{{ url('/redirected') }}">
                        <span class="me-3">
                            <i class="fa-solid fa-gauge-high text-success"></i>
                        </span>
                        <span>Dashboard</span>
                    </a>
                </div>
                @if (auth()->user()->usertype == 1)
                    <!-- Admin-only sections -->

                    <!-- Manage Members Section -->
                    <div class="px-3 py-1">
                        <div class="nav-item">
                            <a class="nav-link d-flex align-items-center py-2 px-3 rounded {{ request()->is('view_members') || request()->is('see_members') || request()->is('update_member/*') ? 'bg-success text-white' : 'text-dark' }}"
                                data-toggle="collapse" href="#ui-basic" role="button"
                                aria-expanded="{{ request()->is('view_members') || request()->is('see_members') ? 'true' : 'false' }}"
                                aria-controls="ui-basic">
                                <span class="me-3">
                                    <i class="fa-solid fa-users text-success"></i>
                                </span>
                                <span class="flex-grow-1">Manage Members</span>
                                <i class="mdi mdi-chevron-left menu-arrow"></i>
                            </a>
                            <div class="collapse {{ request()->is('view_members') || request()->is('see_members') ? 'show' : '' }}"
                                id="ui-basic">
                                <div class="ps-4 mt-1">
                                    <a class="nav-link d-flex align-items-center py-2 px-3 rounded small {{ request()->is('view_members') ? 'bg-light' : '' }}"
                                        href="{{ url('view_members') }}">
                                        <i class="fa-solid fa-user me-2"></i>Register Members
                                    </a>
                                    <a class="nav-link d-flex align-items-center py-2 px-3 rounded small {{ request()->is('see_members') || request()->is('update_member/*') ? 'bg-light' : '' }}"
                                        href="{{ url('see_members') }}">
                                        <i class="fa-solid fa-eye me-2"></i>View Members
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Inventory Section -->
                    <div class="px-3 py-1">
                        <div class="nav-item">
                            <a class="nav-link d-flex align-items-center py-2 px-3 rounded {{ request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'bg-success text-white' : 'text-dark' }}"
                                data-toggle="collapse" href="#auth" role="button"
                                aria-expanded="{{ request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'true' : 'false' }}"
                                aria-controls="auth">
                                <span class="me-3">
                                    <i class="fa-solid fa-warehouse text-danger"></i>
                                </span>
                                <span class="flex-grow-1">Inventory</span>
                                <i class="mdi mdi-chevron-right menu-arrow"></i>
                            </a>
                            <div class="collapse {{ request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'show' : '' }}"
                                id="auth">
                                <div class="ps-4 mt-1">
                                    <a class="nav-link d-flex align-items-center py-2 px-3 rounded small {{ request()->is('view_inventory') ? 'bg-light' : '' }}"
                                        href="{{ url('view_inventory') }}">
                                        <i class="fa-solid fa-wrench me-2"></i>Add Inventory
                                    </a>
                                    <a class="nav-link d-flex align-items-center py-2 px-3 rounded small {{ request()->is('show_inventory') || request()->is('update_inventory/*') ? 'bg-light' : '' }}"
                                        href="{{ url('show_inventory') }}">
                                        <i class="fa-solid fa-eye me-2"></i>Show Inventory
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Strategic Planning Section -->
                    <div class="px-3 py-1">
                        <div class="nav-item">
                            <a class="nav-link d-flex align-items-center py-2 px-3 rounded {{ request()->is('strategic_plan') || request()->is('strategic_details') ? 'bg-success text-white' : 'text-dark' }}"
                                data-toggle="collapse" href="#strategicPlanning" role="button"
                                aria-expanded="{{ request()->is('strategic_plan') || request()->is('strategic_details') ? 'true' : 'false' }}"
                                aria-controls="strategicPlanning">
                                <span class="me-3">
                                    <i class="fa-solid fa-briefcase" style="color: orange;"></i>
                                </span>
                                <span class="flex-grow-1">Strategic Planning</span>
                                <i class="mdi mdi-chevron-right menu-arrow"></i>
                            </a>
                            <div class="collapse {{ request()->is('strategic_plan') || request()->is('strategic_details') ? 'show' : '' }}"
                                id="strategicPlanning">
                                <div class="ps-4 mt-1">
                                    <a class="nav-link d-flex align-items-center py-2 px-3 rounded small {{ request()->is('scorecard') || request()->is('update_scorecard/*') ? 'bg-light' : '' }}"
                                        href="{{ url('scorecard') }}">
                                        <i class="fa-solid fa-book me-2"></i>Strategic Plan
                                    </a>
                                    <a class="nav-link d-flex align-items-center py-2 px-3 rounded small {{ request()->is('strategic_plan') || request()->is('update_scorecard/*') ? 'bg-light' : '' }}"
                                        href="{{ url('strategic_plan') }}">
                                        <i class="fa-solid fa-file me-2"></i>Strategic Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Users Section -->
                    <div class="px-3 py-1">
                        <a class="nav-link d-flex align-items-center py-2 px-3 rounded {{ request()->is('see_users') || request()->is('update_user/*') ? 'bg-success text-white' : 'text-dark' }}"
                            href="{{ url('see_users') }}">
                            <span class="me-3">
                                <i class="fa-solid fa-user text-success"></i>
                            </span>
                            <span>Users</span>
                        </a>
                    </div>

                    <!-- Givings Section -->
                    <div class="px-3 py-1">
                        <a class="nav-link d-flex align-items-center py-2 px-3 rounded {{ request()->is('view_givings') ? 'bg-success text-white' : 'text-dark' }}"
                            href="{{ url('view_givings') }}">
                            <span class="me-3">
                                <i class="fa-solid fa-sack-dollar text-success"></i>
                            </span>
                            <span>Givings</span>
                        </a>
                    </div>

                    <!-- Departments Section -->
                    <div class="px-3 py-1">
                        <a class="nav-link d-flex align-items-center py-2 px-3 rounded {{ request()->is('departments') ? 'bg-success text-white' : 'text-dark' }}"
                            href="{{ url('departments') }}">
                            <span class="me-3">
                                <i class="fa-solid fa-book"></i>
                            </span>
                            <span>Departments</span>
                        </a>
                    </div>

                    <!-- Human Resource -->
                    <div class="px-3 py-1">
                        <a class="nav-link d-flex align-items-center py-2 px-3 rounded {{ request()->is('view') ? 'bg-success text-white' : 'text-dark' }}"
                            href="{{ url('#') }}">
                            <span class="me-3">
                                <i class="fa-solid fa-user-tie" style="color: orange;"></i>
                            </span>
                            <span>Human Resource</span>
                        </a>
                    </div>
                @endif

                @if (auth()->user()->usertype == 0)
                    <!-- Normal user-only sections -->

                    <!-- Member Registration -->
                    <div class="px-3 py-1">
                        <a class="nav-link d-flex align-items-center py-2 px-3 rounded {{ request()->is('member_registration') ? 'bg-success text-white' : 'text-dark' }}"
                            href="{{ url('member_registration') }}">
                            <span class="me-3">
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <span>Member Registration</span>
                        </a>
                    </div>

                    <!-- Givings Section -->
                    <div class="px-3 py-1">
                        <a class="nav-link d-flex align-items-center py-2 px-3 rounded {{ request()->is('member_givings') ? 'bg-success text-white' : 'text-dark' }}"
                            href="{{ url('member_givings') }}">
                            <span class="me-3">
                                <i class="fa-solid fa-sack-dollar" style="color: #f39c12;"></i>
                            </span>
                            <span>Givings</span>
                        </a>
                    </div>
                @endif

                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-top mt-3 pt-3 px-3">
                        <div class="nav-category small text-muted fw-bold mb-2">{{ __('Manage Team') }}</div>
                        <a class="nav-link d-flex align-items-center py-2 px-3 rounded {{ request()->routeIs('teams.show') ? 'bg-light' : '' }}"
                            href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                            <span>{{ __('Team Settings') }}</span>
                        </a>
                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                            <a class="nav-link d-flex align-items-center py-2 px-3 rounded {{ request()->routeIs('teams.create') ? 'bg-light' : '' }}"
                                href="{{ route('teams.create') }}">
                                <span>{{ __('Create New Team') }}</span>
                            </a>
                        @endcan
                        @if (Auth::user()->allTeams()->count() > 1)
                            <div class="border-top mt-2 pt-2">
                                <div class="nav-category small text-muted fw-bold mb-2">{{ __('Switch Teams') }}</div>
                                @foreach (Auth::user()->allTeams() as $team)
                                    <x-switchable-team :team="$team" />
                                @endforeach
                            </div>
                        @endif
                    </div>
                @endif

                <!-- Account Section -->
                <div class="border-top mt-3 pt-3 px-3">
                    <div class="nav-category small text-muted fw-bold mb-2">Account</div>
                    <a class="nav-link d-flex align-items-center py-2 px-3 rounded {{ request()->routeIs('profile.show') ? 'bg-light' : '' }}"
                        href="{{ route('profile.show') }}">
                        <span class="me-3">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span>{{ __('Profile') }}</span>
                    </a>
                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <a class="nav-link d-flex align-items-center py-2 px-3 rounded {{ request()->routeIs('api-tokens.index') ? 'bg-light' : '' }}"
                            href="{{ route('api-tokens.index') }}">
                            <span class="me-3">
                                <i class="fa-solid fa-key"></i>
                            </span>
                            <span>{{ __('API Tokens') }}</span>
                        </a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <a class="nav-link d-flex align-items-center py-2 px-3 rounded text-danger"
                            href="{{ route('logout') }}" @click.prevent="$root.submit();">
                            <span class="me-3">
                                <i class="fa-solid fa-sign-out-alt"></i>
                            </span>
                            <span>{{ __('Log Out') }}</span>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Alpine.js for dropdown functionality -->
<script src="//unpkg.com/alpinejs" defer></script>

<style>
    /* Additional styles for better mobile navigation */
    .nav-category {
        font-size: 0.75rem;
        font-weight: 600;
        color: #6c757d;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .nav-link {
        transition: all 0.2s ease;
        text-decoration: none;
    }

    .offcanvas-body {
        overflow-y: auto;
    }

    /* Responsive hamburger button */
    @media (max-width: 576px) {
        .position-fixed {
            right: 15px !important;
            top: 15px !important;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const offcanvasElement = document.getElementById('offcanvasMenu');
        const hamburgerButton = document.querySelector('[data-bs-target="#offcanvasMenu"]');

        if (offcanvasElement && hamburgerButton) {
            // Hide hamburger when offcanvas is shown
            offcanvasElement.addEventListener('show.bs.offcanvas', function () {
                hamburgerButton.style.display = 'none';
            });

            // Show hamburger when offcanvas is hidden (unless we're on profile page)
            offcanvasElement.addEventListener('hidden.bs.offcanvas', function () {
                const isProfilePage = {{ request()->routeIs('profile.show') ? 'true' : 'false' }};
                if (!isProfilePage) {
                    hamburgerButton.style.display = 'block';
                }
            });

            // Hide hamburger when mobile Profile link is clicked
            const profileLink = document.querySelector('#offcanvasMenu a[href="{{ route("profile.show") }}"]');
            if (profileLink) {
                profileLink.addEventListener('click', function () {
                    hamburgerButton.style.display = 'none';
                    // Also close the offcanvas
                    const offcanvas = bootstrap.Offcanvas.getInstance(offcanvasElement);
                    if (offcanvas) {
                        offcanvas.hide();
                    }
                });
            }

            // Hide hamburger when desktop profile dropdown is clicked
            const desktopProfileButton = document.querySelector('.d-none.d-sm-block button');
            if (desktopProfileButton) {
                desktopProfileButton.addEventListener('click', function () {
                    hamburgerButton.style.display = 'none';
                });
            }

            // Hide hamburger when desktop profile dropdown links are clicked
            const desktopProfileLinks = document.querySelectorAll('.d-none.d-sm-block a[href*="profile.show"], .d-none.d-sm-block a[href*="api-tokens"], .d-none.d-sm-block a[href*="logout"]');
            desktopProfileLinks.forEach(function (link) {
                link.addEventListener('click', function () {
                    hamburgerButton.style.display = 'none';
                });
            });          
</script>