<!-- Tailwind Sidebar Replacement -->
<aside class="fixed top-0 left-0 h-full w-72 bg-gray-900 text-white shadow-lg z-40">
    <!-- Brand section -->
    <div class="flex items-center justify-center h-16 border-b border-gray-700">
        <a href="{{ url('/redirect') }}">
            <img src="admin/assets/images/faces/sda3.png" alt="Logo" class="h-8 hidden lg:block">
            <img src="admin/assets/images/faces/sda4.png" alt="Logo Mini" class="h-8 block lg:hidden">
        </a>
    </div>

    <!-- Navigation -->
    <nav class="mt-4 px-4 overflow-y-auto">
        <!-- Header with toggler -->
        <div class="flex items-center justify-between mb-4">
            <span class="text-sm font-semibold uppercase text-gray-400">Navigation</span>
            <button class="text-gray-400 hover:text-white focus:outline-none">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Dashboard -->
        <a href="{{ url('/redirected') }}" class="flex items-center space-x-3 px-3 py-2 rounded-md hover:bg-gray-800 {{ request()->is('/redirect') ? 'bg-indigo-600 text-white' : 'text-gray-300' }}">
            <i class="mdi mdi-speedometer text-xl"></i>
            <span class="text-sm">Dashboard</span>
        </a>

        <!-- Example Collapsible Menu -->
        <div x-data="{ open: {{ request()->is('view_members') || request()->is('see_members') ? 'true' : 'false' }} }" class="mt-2">
            <button @click="open = !open" class="w-full flex items-center justify-between px-3 py-2 rounded-md text-gray-300 hover:bg-gray-800">
                <div class="flex items-center space-x-3">
                    <i class="fa-solid fa-users"></i>
                    <span class="text-sm">Manage Members</span>
                </div>
                <svg class="w-4 h-4 transform transition-transform duration-200" :class="{ 'rotate-90': open }" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>
            <div x-show="open" class="ml-6 mt-1 space-y-1 text-sm text-gray-400">
                <a href="{{ url('view_members') }}" class="block px-3 py-1 rounded hover:bg-gray-800 {{ request()->is('view_members') ? 'text-white' : '' }}">
                    <i class="fa-solid fa-user-plus"></i> Register Members
                </a>
                <a href="{{ url('see_members') }}" class="block px-3 py-1 rounded hover:bg-gray-800 {{ request()->is('see_members') ? 'text-white' : '' }}">
                    <i class="fa-solid fa-eye"></i> View Members
                </a>
            </div>
        </div>

        <!-- Add other nav items in similar pattern -->
    </nav>
</aside>

<!-- Alpine.js for toggle functionality -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
