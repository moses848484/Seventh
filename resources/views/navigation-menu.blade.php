<nav class="bg-white border-gray-200">
    <!-- Primary Navigation Menu -->
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <!-- Hamburger Button - Hide on profile page -->
        <div class="{{ request()->routeIs('profile.show') ? 'hidden' : 'block' }} sm:hidden fixed right-5 top-5 z-50">
            <button data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation" 
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white bg-green-500 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                <span class="sr-only">Open main menu</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>

        <!-- Navigation Links for Desktop -->
        <div class="hidden w-full md:block md:w-auto">
            <div class="flex items-center space-x-3">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="relative">
                        <button id="teamsDropdownButton" data-dropdown-toggle="teamsDropdown" 
                                class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex items-center">
                            {{ Auth::user()->currentTeam->name }}
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <!-- Teams dropdown menu -->
                        <div id="teamsDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-60">
                            <div class="px-4 py-3 text-sm text-gray-900">
                                <div class="text-xs text-gray-400 uppercase tracking-wide">{{ __('Manage Team') }}</div>
                            </div>
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="teamsDropdownButton">
                                <li>
                                    <a href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" class="block px-4 py-2 hover:bg-gray-100">{{ __('Team Settings') }}</a>
                                </li>
                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                    <li>
                                        <a href="{{ route('teams.create') }}" class="block px-4 py-2 hover:bg-gray-100">{{ __('Create New Team') }}</a>
                                    </li>
                                @endcan
                                @if (Auth::user()->allTeams()->count() > 1)
                                    <li><hr class="my-1 border-gray-200"></li>
                                    <li class="px-4 py-2 text-xs text-gray-400 uppercase tracking-wide">{{ __('Switch Teams') }}</li>
                                    @foreach (Auth::user()->allTeams() as $team)
                                        <li>
                                            <x-switchable-team :team="$team" />
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                @endif

                <!-- Settings Dropdown (Desktop) - Hide on profile page -->
                @unless(request()->routeIs('profile.show'))
                    <div class="relative">
                        <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <img class="w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                            @else
                                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white text-sm font-bold">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </div>
                            @endif
                        </button>
                        <!-- User dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow" id="user-dropdown">
                            <div class="px-4 py-3">
                                <span class="block text-sm text-gray-900">{{ Auth::user()->name }}</span>
                                <span class="block text-sm text-gray-500 truncate">{{ Auth::user()->email }}</span>
                            </div>
                            <ul class="py-2" aria-labelledby="user-menu-button">
                                <li>
                                    <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">{{ __('Profile') }}</a>
                                </li>
                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <li>
                                        <a href="{{ route('api-tokens.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">{{ __('API Tokens') }}</a>
                                    </li>
                                @endif
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">{{ __('Log Out') }}</a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endunless
            </div>
        </div>
    </div>

    <!-- Flowbite Drawer (Offcanvas) -->
    <div id="drawer-navigation" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 border-r border-gray-200" tabindex="-1" aria-labelledby="drawer-navigation-label">
        <!-- Drawer Header -->
        <div class="flex items-center justify-between pb-4 border-b border-gray-200">
            <h5 id="drawer-navigation-label" class="text-lg font-semibold text-gray-900 uppercase">Menu</h5>
            <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
        </div>

        <!-- User Profile Section -->
        <div class="py-4 border-b border-gray-200 bg-gray-50 -mx-4 px-4 mb-4">
            <div class="flex items-center space-x-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <img class="w-12 h-12 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                @else
                    <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white font-bold">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                @endif
                <div class="font-medium">
                    <div class="text-sm font-semibold text-gray-900">{{ Auth::user()->name }}</div>
                    <div class="text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>
        </div>

        <!-- Navigation Menu -->
        <div class="py-4 overflow-y-auto">
            <!-- Dashboard Link -->
            <div class="mb-4">
                <p class="mb-2 text-xs font-semibold text-gray-400 uppercase tracking-wide">Navigation</p>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ url('/redirected') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group {{ request()->is('/redirect') ? 'bg-green-100 text-green-700' : '' }}">
                            <i class="fa-solid fa-gauge-high text-green-500"></i>
                            <span class="ms-3">Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>

            @if (auth()->user()->usertype == 1)
                <!-- Admin-only sections -->

                <!-- Manage Members Section -->
                <div class="mb-4">
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-members" data-collapse-toggle="dropdown-members">
                        <i class="fa-solid fa-users text-green-500"></i>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Manage Members</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <ul id="dropdown-members" class="{{ request()->is('view_members') || request()->is('see_members') || request()->is('update_member/*') ? '' : 'hidden' }} py-2 space-y-2">
                        <li>
                            <a href="{{ url('view_members') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ request()->is('view_members') ? 'bg-gray-100' : '' }}">
                                <i class="fa-solid fa-user text-sm"></i>
                                <span class="ms-2">Register Members</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('see_members') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ request()->is('see_members') || request()->is('update_member/*') ? 'bg-gray-100' : '' }}">
                                <i class="fa-solid fa-eye text-sm"></i>
                                <span class="ms-2">View Members</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Inventory Section -->
                <div class="mb-4">
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-inventory" data-collapse-toggle="dropdown-inventory">
                        <i class="fa-solid fa-warehouse text-red-500"></i>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Inventory</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <ul id="dropdown-inventory" class="{{ request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? '' : 'hidden' }} py-2 space-y-2">
                        <li>
                            <a href="{{ url('view_inventory') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ request()->is('view_inventory') ? 'bg-gray-100' : '' }}">
                                <i class="fa-solid fa-wrench text-sm"></i>
                                <span class="ms-2">Add Inventory</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('show_inventory') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ request()->is('show_inventory') || request()->is('update_inventory/*') ? 'bg-gray-100' : '' }}">
                                <i class="fa-solid fa-eye text-sm"></i>
                                <span class="ms-2">Show Inventory</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Strategic Planning Section -->
                <div class="mb-4">
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-strategic" data-collapse-toggle="dropdown-strategic">
                        <i class="fa-solid fa-briefcase text-orange-500"></i>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Strategic Planning</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <ul id="dropdown-strategic" class="{{ request()->is('strategic_plan') || request()->is('strategic_details') ? '' : 'hidden' }} py-2 space-y-2">
                        <li>
                            <a href="{{ url('scorecard') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ request()->is('scorecard') || request()->is('update_scorecard/*') ? 'bg-gray-100' : '' }}">
                                <i class="fa-solid fa-book text-sm"></i>
                                <span class="ms-2">Strategic Plan</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('strategic_plan') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ request()->is('strategic_plan') || request()->is('update_scorecard/*') ? 'bg-gray-100' : '' }}">
                                <i class="fa-solid fa-file text-sm"></i>
                                <span class="ms-2">Strategic Details</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Single Menu Items -->
                <div class="mb-4">
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ url('see_users') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group {{ request()->is('see_users') || request()->is('update_user/*') ? 'bg-green-100 text-green-700' : '' }}">
                                <i class="fa-solid fa-user text-green-500"></i>
                                <span class="ms-3">Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('view_givings') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group {{ request()->is('view_givings') ? 'bg-green-100 text-green-700' : '' }}">
                                <i class="fa-solid fa-sack-dollar text-green-500"></i>
                                <span class="ms-3">Givings</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('departments') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group {{ request()->is('departments') ? 'bg-green-100 text-green-700' : '' }}">
                                <i class="fa-solid fa-book"></i>
                                <span class="ms-3">Departments</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('#') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group {{ request()->is('view') ? 'bg-green-100 text-green-700' : '' }}">
                                <i class="fa-solid fa-user-tie text-orange-500"></i>
                                <span class="ms-3">Human Resource</span>
                            </a>
                        </li>
                    </ul>
                </div>
            @endif

            @if (auth()->user()->usertype == 0)
                <!-- Normal user-only sections -->
                <div class="mb-4">
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ url('member_registration') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group {{ request()->is('member_registration') ? 'bg-green-100 text-green-700' : '' }}">
                                <i class="fa-solid fa-user"></i>
                                <span class="ms-3">Member Registration</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('member_givings') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group {{ request()->is('member_givings') ? 'bg-green-100 text-green-700' : '' }}">
                                <i class="fa-solid fa-sack-dollar text-yellow-500"></i>
                                <span class="ms-3">Givings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            @endif

            @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                <!-- Team Management Section -->
                <div class="mb-4 pt-4 border-t border-gray-200">
                    <p class="mb-2 text-xs font-semibold text-gray-400 uppercase tracking-wide">{{ __('Manage Team') }}</p>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group {{ request()->routeIs('teams.show') ? 'bg-gray-100' : '' }}">
                                <span>{{ __('Team Settings') }}</span>
                            </a>
                        </li>
                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                            <li>
                                <a href="{{ route('teams.create') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group {{ request()->routeIs('teams.create') ? 'bg-gray-100' : '' }}">
                                    <span>{{ __('Create New Team') }}</span>
                                </a>
                            </li>
                        @endcan
                        @if (Auth::user()->allTeams()->count() > 1)
                            <li class="pt-2 border-t border-gray-100">
                                <p class="mb-2 text-xs font-semibold text-gray-400 uppercase tracking-wide">{{ __('Switch Teams') }}</p>
                                @foreach (Auth::user()->allTeams() as $team)
                                    <x-switchable-team :team="$team" />
                                @endforeach
                            </li>
                        @endif
                    </ul>
                </div>
            @endif

            <!-- Account Section -->
            <div class="pt-4 border-t border-gray-200">
                <p class="mb-2 text-xs font-semibold text-gray-400 uppercase tracking-wide">Account</p>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('profile.show') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group {{ request()->routeIs('profile.show') ? 'bg-gray-100' : '' }}">
                            <i class="fa-solid fa-user"></i>
                            <span class="ms-3">{{ __('Profile') }}</span>
                        </a>
                    </li>
                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <li>
                            <a href="{{ route('api-tokens.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group {{ request()->routeIs('api-tokens.index') ? 'bg-gray-100' : '' }}">
                                <i class="fa-solid fa-key"></i>
                                <span class="ms-3">{{ __('API Tokens') }}</span>
                            </a>
                        </li>
                    @endif
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="flex items-center p-2 text-red-600 rounded-lg hover:bg-red-50 group">
                                <i class="fa-solid fa-sign-out-alt"></i>
                                <span class="ms-3">{{ __('Log Out') }}</span>
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Include Flowbite JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const drawerElement = document.getElementById('drawer-navigation');
        const hamburgerButton = document.querySelector('[data-drawer-show="drawer-navigation"]');
        
        if (drawerElement && hamburgerButton) {
            // Initialize Flowbite drawer
            const drawer = new Drawer(drawerElement, {
                placement: 'left',
                backdrop: true,
                bodyScrolling: false,
                edge: false,
                edgeOffset: '',
                backdropClasses: 'bg-gray-900/50 fixed inset-0 z-30'
            });

            // Hide hamburger when drawer is shown
            drawerElement.addEventListener('show', function () {
                hamburgerButton.style.display = 'none';
            });

            // Show hamburger when drawer is hidden (unless we're on profile page)
            drawerElement.addEventListener('hide', function () {
                const isProfilePage = {{ request()->routeIs('profile.show') ? 'true' : 'false' }};
                if (!isProfilePage) {
                    hamburgerButton.style.display = 'block';
                }
            });

            // Hide hamburger when Profile link is clicked
            const profileLink = document.querySelector('#drawer-navigation a[href="{{ route("profile.show") }}"]');
            if (profileLink) {
                profileLink.addEventListener('click', function () {
                    hamburgerButton.style.display = 'none';
                    drawer.hide();
                });
            }

            // Hide hamburger when desktop profile dropdown links are clicked
            const desktopProfileLinks = document.querySelectorAll('#user-dropdown a[href*="profile.show"], #user-dropdown a[href*="api-tokens"], #user-dropdown a[onclick*="logout"]');
            desktopProfileLinks.forEach(function (link) {
                link.addEventListener('click', function () {
                    hamburgerButton.style.display = 'none';
                });
            });

            // Show hamburger when clicking outside (but not on profile page)
            document.addEventListener('click', function (event) {
                const isProfilePage = {{ request()->routeIs('profile.show') ? 'true' : 'false' }};
                const clickedInsideDesktopProfile = event.target.closest('#user-dropdown') || event.target.closest('[data-dropdown-toggle="user-dropdown"]');
                const clickedInsideDrawer = event.target.closest('#drawer-navigation');
                const clickedHamburger = event.target.closest('[data-drawer-show="drawer-navigation"]');
                const clickedBackdrop = event.target.classList.contains('drawer-backdrop');

                if (!clickedInsideDesktopProfile && !clickedInsideDrawer && !clickedHamburger && !clickedBackdrop && !isProfilePage) {
                    hamburgerButton.style.display = 'block';
                }
            });
        }
    });
</script>

<style>
    /* Custom styles for better mobile navigation */
    @media (max-width: 640px) {
        #drawer-navigation {
            width: 320px;
        }
    }

    /* Fix for drawer positioning */
    #drawer-navigation {
        right: 0;
        left: auto;
        transform: translateX(100%);
    }

    #drawer-navigation.translate-x-0 {
        transform: translateX(0);
    }

    #drawer-navigation.-translate-x-full {
        transform: translateX(100%);
    }
</style>