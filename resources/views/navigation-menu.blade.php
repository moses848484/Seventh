<!-- Hamburger Button -->
<style>
    /* Extra safety: Hide on tablet and desktop sizes */
    @media (min-width: 768px) {
        .mobile-only-toggle {
            display: none !important;
        }
    }
</style>
<nav x-data="{ open: false }" class="">
    <!-- Primary Navigation Menu -->
    <div class="">
        <div class="relative">
            <div class="flex justify-between items-center px-4 py-2">

                <!-- Hamburger Button: visible on all mobile sizes (portrait & landscape), hidden on tablets/desktops -->
                <div class="mobile-only-toggle ms-3 position-relative d-block d-sm-block"
                    style="right: -170px; top: -95px;">
                    <button class="btn btn-success" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

                <!-- Navigation Links -->
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

                    <!-- Settings Dropdown -->
                    <div class="ms-3 relative" style=" right: 20px; top: -95px;">
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
                </div>
            </div>
        </div>
    </div>

    <!-- Offcanvas element -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasMenuLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">


            <div x-data="{ open: false }" class="relative inline-block text-left">
                <!-- Profile Icon -->
                <div @click="open = !open" class="cursor-pointer flex items-center">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                            alt="{{ Auth::user()->name }} {{ Auth::user()->email }}" />
                    @endif
                    <div class="ml-2 text-gray-800 font-medium">
                        {{ Auth::user()->name }}
                        <div class="text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>

                <!-- Dropdown Menu -->
                <div x-show="open" @click.away="open = false"
                    class="absolute right-0 z-10 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                    <div class="bg-white p-3 border-t border-gray-200">
                        <div class="mt-3 space-y-1">
                            <x-responsive-nav-link href="{{ route('profile.show') }}"
                                :active="request()->routeIs('profile.show')">
                                {{ __('Profile') }}
                            </x-responsive-nav-link>
                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-responsive-nav-link href="{{ route('api-tokens.index') }}"
                                    :active="request()->routeIs('api-tokens.index')">
                                    {{ __('API Tokens') }}
                                </x-responsive-nav-link>
                            @endif
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Dashboard Link outside Dropdown -->
                <div class="pt-2">
                    <li class="nav-item nav-category">
                        <span class="nav-link">Navigation</span>
                    </li>
                    <li class="nav-item menu-items {{ request()->is('/redirect') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/redirected') }}">
                            <span class="menu-icon mr-2 text-lg text-green-500">
                                <i class="fa-solid fa-gauge-high"></i>
                            </span>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    @if (auth()->user()->usertype == 1)
                        <!-- Admin-only sections -->

                        <!-- Manage Members Section -->
                        <li
                            class="nav-item menu-items {{ request()->is('view_members') || request()->is('see_members') || request()->is('update_member/*') ? 'active' : '' }}">
                            <a class="nav-link" data-toggle="collapse" href="#ui-basic"
                                aria-expanded="{{ request()->is('view_members') || request()->is('see_members') ? 'true' : 'false' }}"
                                aria-controls="ui-basic">
                                <span class="menu-icon mr-2 text-lg text-green-500">
                                    <i class="fa-solid fa-users fa-3x"></i>
                                </span>
                                <span class="menu-title">Manage Members</span>
                                <i class="fa-solid fa-chevron-down menu-arrow text-gray-500"
                                    style="font-size: 13px; margin-left: 5px;"></i>
                            </a>
                            <div class="collapse {{ request()->is('view_members') || request()->is('see_members') ? 'show' : '' }}"
                                id="ui-basic">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item {{ request()->is('view_members') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ url('view_members') }}">
                                            <i class="fa-solid fa-user"></i>&nbsp;Register Members
                                        </a>
                                    </li>
                                    <li
                                        class="nav-item {{ request()->is('see_members') || request()->is('update_member/*') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ url('see_members') }}">
                                            <i class="fa-solid fa-eye"></i>&nbsp;View Members
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Inventory Section -->
                        <li
                            class="nav-item menu-items {{ request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'active' : '' }}">
                            <a class="nav-link" data-toggle="collapse" href="#auth"
                                aria-expanded="{{ request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'true' : 'false' }}"
                                aria-controls="auth">
                                <span class="menu-icon mr-2 text-lg text-red-500">
                                    <i class="fa-solid fa-warehouse"></i>
                                </span>
                                <span class="menu-title">Inventory</span>
                                <i class="fa-solid fa-chevron-down menu-arrow text-gray-500"
                                    style="font-size: 13px; margin-left: 5px;"></i>
                            </a>
                            <div class="collapse {{ request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'show' : '' }}"
                                id="auth">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item {{ request()->is('view_inventory') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ url('view_inventory') }}">
                                            <i class="fa-solid fa-wrench"></i>&nbsp; Add Inventory
                                        </a>
                                    </li>
                                    <li
                                        class="nav-item {{ request()->is('show_inventory') || request()->is('update_inventory/*') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ url('show_inventory') }}">
                                            <i class="fa-solid fa-eye"></i>&nbsp;Show Inventory
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Strategic Planning Section -->
                        <li
                            class="nav-item menu-items {{ request()->is('strategic_plan') || request()->is('strategic_details') ? 'active' : '' }}">
                            <a class="nav-link" data-toggle="collapse" href="#strategicPlanning"
                                aria-expanded="{{ request()->is('strategic_plan') || request()->is('strategic_details') ? 'true' : 'false' }}"
                                aria-controls="strategicPlanning">
                                <span class="menu-icon">
                                    <i class="fa-solid fa-briefcase" style="color: orange;"></i>
                                </span>
                                <span class="menu-title">Strategic Planning</span>
                                <i class="fa-solid fa-chevron-down menu-arrow text-gray-500"
                                    style="font-size: 13px; margin-left: 5px;"></i>
                            </a>
                            <div class="collapse {{ request()->is('strategic_plan') || request()->is('strategic_details') ? 'show' : '' }}"
                                id="strategicPlanning">
                                <ul class="nav flex-column sub-menu">
                                    <li
                                        class="nav-item menu-items {{ request()->is('scorecard') || request()->is('update_scorecard/*') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ url('scorecard') }}">
                                            <i class="fa-solid fa-book"></i>&nbsp;Strategic Plan
                                        </a>
                                    </li>

                                    <li
                                        class="nav-item menu-items {{ request()->is('strategic_plan') || request()->is('update_scorecard/*') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ url('strategic_plan') }}">
                                            <i class="fa-solid fa-file"></i>&nbsp;Strategic Details
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Users Section -->
                        <li
                            class="nav-item menu-items {{ request()->is('see_users') || request()->is('update_user/*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('see_users') }}">
                                <span class="menu-icon mr-2 text-lg text-green-500">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                <span class="menu-title">Users</span>
                            </a>
                        </li>

                        <!-- Givings Section -->
                        <li class="nav-item menu-items {{ request()->is('view_givings') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('view_givings') }}">
                                <span class="menu-icon mr-2 text-lg text-green-500">
                                    <i class="fa-solid fa-sack-dollar"></i>
                                </span>
                                <span class="menu-title">Givings</span>
                            </a>
                        </li>

                        <!-- Departments Section -->
                        <li class="nav-item menu-items {{ request()->is('departments') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('departments') }}">
                                <span class="menu-icon">
                                    <i class="fa-solid fa-book fa-10x"></i>
                                </span>
                                <span class="menu-title">Departments</span>
                            </a>
                        </li>

                        <li class="nav-item menu-items {{ request()->is('view') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('#') }}">
                                <span class="menu-icon">
                                    <i class="fa-solid fa-user-tie" style="color: orange;"></i>
                                </span>
                                <span class="menu-title">Human Resource</span>
                            </a>
                        </li>
                    @endif

                    @if (auth()->user()->usertype == 0)
                        <!-- Normal user-only sections -->

                        <!-- Member Registration -->
                        <li class="nav-item menu-items {{ request()->is('member_registration') ? 'show' : '' }}">
                            <a class="nav-link" href="{{ url('member_registration') }}">
                                <span class="menu-icon">
                                    <i class="fa-solid fa-user fa-3x"></i>
                                </span>
                                <span class="menu-title">Member Registration</span>
                            </a>
                        </li>

                        <!-- Givings Section -->
                        <li class="nav-item menu-items {{ request()->is('member_givings') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('member_givings') }}">
                                <span class="menu-icon">
                                    <i class="fa-solid fa-sack-dollar" style="color: #f39c12;"></i>
                                    <!-- Orange color -->
                                </span>
                                <span class="menu-title">Givings</span>
                            </a>
                        </li>
                    @endif

                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="border-t border-gray-200"></div>
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Team') }}
                        </div>
                        <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                            :active="request()->routeIs('teams.show')">
                            {{ __('Team Settings') }}
                        </x-responsive-nav-link>
                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                            <x-responsive-nav-link href="{{ route('teams.create') }}"
                                :active="request()->routeIs('teams.create')">
                                {{ __('Create New Team') }}
                            </x-responsive-nav-link>
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
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>