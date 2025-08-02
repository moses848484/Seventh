<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Sidebar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css">
    <style>
        .sidebar-transition {
            transition: transform 0.3s ease-in-out;
        }
        
        .sidebar-hidden {
            transform: translateX(-100%);
        }
        
        .sidebar-visible {
            transform: translateX(0);
        }
        
        .overlay {
            transition: opacity 0.3s ease-in-out;
        }
        
        .submenu-transition {
            transition: all 0.3s ease-in-out;
            overflow: hidden;
        }
        
        .submenu-hidden {
            max-height: 0;
            opacity: 0;
        }
        
        .submenu-visible {
            max-height: 500px;
            opacity: 1;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Mobile Menu Button -->
    <button id="mobileMenuBtn" class="lg:hidden fixed top-4 left-4 z-50 p-2 bg-white rounded-md shadow-lg">
        <span class="mdi mdi-menu text-xl"></span>
    </button>

    <!-- Overlay for mobile -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 lg:hidden opacity-0 pointer-events-none overlay"></div>

    <!-- Sidebar -->
    <nav id="sidebar" class="fixed top-0 left-0 h-full w-64 bg-white shadow-lg z-40 sidebar-transition sidebar-hidden lg:sidebar-visible">
        <!-- Brand -->
        <div class="p-4 border-b border-gray-200">
            <div class="flex items-center justify-center">
                <a href="{{ url('/redirect') }}" class="flex items-center">
                    <img src="admin/assets/images/faces/sda3.png" alt="logo" class="h-10 w-auto">
                </a>
                <a href="{{ url('/redirect') }}" class="ml-2 lg:hidden">
                    <img src="admin/assets/images/faces/sda4.png" alt="logo" class="h-8 w-auto">
                </a>
            </div>
        </div>

        <!-- Navigation -->
        <div class="flex-1 overflow-y-auto">
            <ul class="p-4 space-y-2">
                <!-- Navigation Header -->
                <li class="flex items-center justify-between text-gray-500 text-sm font-medium mb-4">
                    <span>Navigation</span>
                    <button id="sidebarToggler" class="p-1 hover:bg-gray-100 rounded">
                        <span class="mdi mdi-menu text-lg"></span>
                    </button>
                </li>

                <!-- Dashboard -->
                <li>
                    <a href="{{ url('/redirected') }}" class="flex items-center p-3 text-gray-700 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-colors duration-200 {{ request()->is('/redirect') ? 'bg-blue-50 text-blue-600' : '' }}">
                        <span class="w-6 h-6 flex items-center justify-center mr-3">
                            <i class="mdi mdi-speedometer text-xl"></i>
                        </span>
                        <span class="font-medium">Dashboard</span>
                    </a>
                </li>

                <!-- Manage Members -->
                <li>
                    <button class="w-full flex items-center p-3 text-gray-700 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-colors duration-200 {{ request()->is('view_members') || request()->is('see_members') || request()->is('update_member/*') ? 'bg-blue-50 text-blue-600' : '' }}" 
                            onclick="toggleSubmenu('manageMembersSubmenu')">
                        <span class="w-6 h-6 flex items-center justify-center mr-3">
                            <i class="fa-solid fa-users text-lg"></i>
                        </span>
                        <span class="font-medium flex-1 text-left">Manage Members</span>
                        <i class="mdi mdi-chevron-down transition-transform duration-200" id="manageMembersArrow"></i>
                    </button>
                    <div id="manageMembersSubmenu" class="submenu-transition submenu-hidden ml-6 mt-2">
                        <ul class="space-y-1">
                            <li>
                                <a href="{{ url('view_members') }}" class="flex items-center p-2 text-gray-600 rounded-lg hover:bg-gray-100 transition-colors duration-200 {{ request()->is('view_members') ? 'bg-gray-100 text-gray-800' : '' }}">
                                    <i class="fa-solid fa-user-plus text-sm mr-2"></i>
                                    Register Members
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('see_members') }}" class="flex items-center p-2 text-gray-600 rounded-lg hover:bg-gray-100 transition-colors duration-200 {{ request()->is('see_members') || request()->is('update_member/*') ? 'bg-gray-100 text-gray-800' : '' }}">
                                    <i class="fa-solid fa-eye text-sm mr-2"></i>
                                    View Members
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Inventory -->
                <li>
                    <button class="w-full flex items-center p-3 text-gray-700 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-colors duration-200 {{ request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'bg-blue-50 text-blue-600' : '' }}" 
                            onclick="toggleSubmenu('inventorySubmenu')">
                        <span class="w-6 h-6 flex items-center justify-center mr-3">
                            <i class="fa-solid fa-warehouse text-lg"></i>
                        </span>
                        <span class="font-medium flex-1 text-left">Inventory</span>
                        <i class="mdi mdi-chevron-down transition-transform duration-200" id="inventoryArrow"></i>
                    </button>
                    <div id="inventorySubmenu" class="submenu-transition submenu-hidden ml-6 mt-2">
                        <ul class="space-y-1">
                            <li>
                                <a href="{{ url('view_inventory') }}" class="flex items-center p-2 text-gray-600 rounded-lg hover:bg-gray-100 transition-colors duration-200 {{ request()->is('view_inventory') ? 'bg-gray-100 text-gray-800' : '' }}">
                                    <i class="fa-solid fa-plus text-sm mr-2"></i>
                                    Add Inventory
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('show_inventory') }}" class="flex items-center p-2 text-gray-600 rounded-lg hover:bg-gray-100 transition-colors duration-200 {{ request()->is('show_inventory') || request()->is('update_inventory/*') ? 'bg-gray-100 text-gray-800' : '' }}">
                                    <i class="fa-solid fa-list text-sm mr-2"></i>
                                    Show Inventory
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Strategic Planning -->
                <li>
                    <button class="w-full flex items-center p-3 text-gray-700 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-colors duration-200 {{ request()->is('strategic_plan') || request()->is('strategic_details') ? 'bg-blue-50 text-blue-600' : '' }}" 
                            onclick="toggleSubmenu('strategicSubmenu')">
                        <span class="w-6 h-6 flex items-center justify-center mr-3">
                            <i class="fa-solid fa-briefcase text-lg"></i>
                        </span>
                        <span class="font-medium flex-1 text-left">Strategic Planning</span>
                        <i class="mdi mdi-chevron-down transition-transform duration-200" id="strategicArrow"></i>
                    </button>
                    <div id="strategicSubmenu" class="submenu-transition submenu-hidden ml-6 mt-2">
                        <ul class="space-y-1">
                            <li>
                                <a href="{{ url('scorecard') }}" class="flex items-center p-2 text-gray-600 rounded-lg hover:bg-gray-100 transition-colors duration-200 {{ request()->is('scorecard') || request()->is('update_scorecard/*') ? 'bg-gray-100 text-gray-800' : '' }}">
                                    <i class="fa-solid fa-chart-line text-sm mr-2"></i>
                                    Create Scorecard
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('strategic_plan') }}" class="flex items-center p-2 text-gray-600 rounded-lg hover:bg-gray-100 transition-colors duration-200 {{ request()->is('strategic_plan') || request()->is('update_scorecard/*') ? 'bg-gray-100 text-gray-800' : '' }}">
                                    <i class="fa-solid fa-tasks text-sm mr-2"></i>
                                    Create Work Plan
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Time Management -->
                <li>
                    <a href="{{ url('time_management') }}" class="flex items-center p-3 text-gray-700 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-colors duration-200 {{ request()->is('time_management') ? 'bg-blue-50 text-blue-600' : '' }}">
                        <span class="w-6 h-6 flex items-center justify-center mr-3">
                            <i class="fa-solid fa-clock text-lg"></i>
                        </span>
                        <span class="font-medium">Time Management</span>
                    </a>
                </li>

                <!-- Departments -->
                <li>
                    <a href="{{ url('departments') }}" class="flex items-center p-3 text-gray-700 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-colors duration-200 {{ request()->is('departments') ? 'bg-blue-50 text-blue-600' : '' }}">
                        <span class="w-6 h-6 flex items-center justify-center mr-3">
                            <i class="fa-solid fa-building text-lg"></i>
                        </span>
                        <span class="font-medium">Departments</span>
                    </a>
                </li>

                <!-- Givings -->
                <li>
                    <a href="{{ url('view_givings') }}" class="flex items-center p-3 text-gray-700 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-colors duration-200 {{ request()->is('view_givings') ? 'bg-blue-50 text-blue-600' : '' }}">
                        <span class="w-6 h-6 flex items-center justify-center mr-3">
                            <i class="fa-solid fa-hand-holding-heart text-lg"></i>
                        </span>
                        <span class="font-medium">Givings</span>
                    </a>
                </li>

                <!-- Users -->
                <li>
                    <a href="{{ url('see_users') }}" class="flex items-center p-3 text-gray-700 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-colors duration-200 {{ request()->is('see_users') || request()->is('update_user/*') ? 'bg-blue-50 text-blue-600' : '' }}">
                        <span class="w-6 h-6 flex items-center justify-center mr-3">
                            <i class="fa-solid fa-users-cog text-lg"></i>
                        </span>
                        <span class="font-medium">Users</span>
                    </a>
                </li>

                <!-- Human Resource -->
                <li>
                    <a href="{{ url('#') }}" class="flex items-center p-3 text-gray-700 rounded-lg hover:bg-blue-50 hover:text-blue-600 transition-colors duration-200 {{ request()->is('view') ? 'bg-blue-50 text-blue-600' : '' }}">
                        <span class="w-6 h-6 flex items-center justify-center mr-3">
                            <i class="fa-solid fa-user-tie text-lg"></i>
                        </span>
                        <span class="font-medium">Human Resource</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <script>
        // Mobile menu functionality
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const sidebarToggler = document.getElementById('sidebarToggler');

        function toggleSidebar() {
            const isHidden = sidebar.classList.contains('sidebar-hidden');
            
            if (isHidden) {
                sidebar.classList.remove('sidebar-hidden');
                sidebar.classList.add('sidebar-visible');
                overlay.classList.remove('opacity-0', 'pointer-events-none');
                overlay.classList.add('opacity-100');
            } else {
                sidebar.classList.remove('sidebar-visible');
                sidebar.classList.add('sidebar-hidden');
                overlay.classList.remove('opacity-100');
                overlay.classList.add('opacity-0', 'pointer-events-none');
            }
        }

        // Event listeners
        mobileMenuBtn.addEventListener('click', toggleSidebar);
        sidebarToggler.addEventListener('click', toggleSidebar);
        overlay.addEventListener('click', toggleSidebar);

        // Submenu functionality
        function toggleSubmenu(submenuId) {
            const submenu = document.getElementById(submenuId);
            const arrow = document.getElementById(submenuId.replace('Submenu', 'Arrow'));
            
            const isHidden = submenu.classList.contains('submenu-hidden');
            
            if (isHidden) {
                submenu.classList.remove('submenu-hidden');
                submenu.classList.add('submenu-visible');
                arrow.classList.add('rotate-180');
            } else {
                submenu.classList.remove('submenu-visible');
                submenu.classList.add('submenu-hidden');
                arrow.classList.remove('rotate-180');
            }
        }

        // Initialize submenus based on active state (you can customize this logic)
        document.addEventListener('DOMContentLoaded', function() {
            // Auto-expand submenus if they contain active items
            const activeSubmenuTriggers = document.querySelectorAll('button[class*="bg-blue-50"]');
            activeSubmenuTriggers.forEach(trigger => {
                const submenuId = trigger.getAttribute('onclick')?.match(/toggleSubmenu\('(\w+)'\)/)?.[1];
                if (submenuId) {
                    const submenu = document.getElementById(submenuId);
                    const arrow = document.getElementById(submenuId.replace('Submenu', 'Arrow'));
                    if (submenu) {
                        submenu.classList.remove('submenu-hidden');
                        submenu.classList.add('submenu-visible');
                        arrow?.classList.add('rotate-180');
                    }
                }
            });
        });

        // Close sidebar when window is resized to desktop
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1024) {
                sidebar.classList.remove('sidebar-hidden');
                sidebar.classList.add('sidebar-visible');
                overlay.classList.remove('opacity-100');
                overlay.classList.add('opacity-0', 'pointer-events-none');
            } else {
                sidebar.classList.remove('sidebar-visible');
                sidebar.classList.add('sidebar-hidden');
            }
        });
    </script>
</body>
</html>