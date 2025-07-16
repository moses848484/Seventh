<style>
    .fa-file {
        color: blueviolet !important;
    }

    .fa-book {
        color: green !important;
    }
</style>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{ url('/redirect') }}">
            <img src="admin/assets/images/faces/sda3.png" alt="logo" />
        </a>
        <a class="sidebar-brand brand-logo-mini" href="{{ url('/redirect') }}">
            <img src="admin/assets/images/faces/sda4.png" alt="logo" />
        </a>
    </div>
    <ul class="nav">
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>

        <!-- Dashboard -->
        <li class="nav-item menu-items {{ request()->is('/redirect') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/redirected') }}">
                <span class="menu-icon"><i class="mdi mdi-speedometer"></i></span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <!-- Manage Members -->
        <li class="nav-item menu-items {{ request()->is('view_members') || request()->is('see_members') || request()->is('update_member/*') ? 'active' : '' }}">
            <a class="nav-link" data-bs-toggle="collapse" href="#membersCollapse" role="button"
                aria-expanded="{{ request()->is('view_members') || request()->is('see_members') ? 'true' : 'false' }}"
                aria-controls="membersCollapse">
                <span class="menu-icon"><i class="fa-solid fa-users fa-3x"></i></span>
                <span class="menu-title">Manage Members</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->is('view_members') || request()->is('see_members') ? 'show' : '' }}"
                id="membersCollapse">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ request()->is('view_members') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('view_members') }}"><i class="fa-solid fa-user"></i>&nbsp;Register Members</a>
                    </li>
                    <li class="nav-item {{ request()->is('see_members') || request()->is('update_member/*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('see_members') }}"><i class="fa-solid fa-eye"></i>&nbsp;View Members</a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Inventory -->
        <li class="nav-item menu-items {{ request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'active' : '' }}">
            <a class="nav-link" data-bs-toggle="collapse" href="#inventoryCollapse" role="button"
                aria-expanded="{{ request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'true' : 'false' }}"
                aria-controls="inventoryCollapse">
                <span class="menu-icon"><i class="fa-solid fa-warehouse"></i></span>
                <span class="menu-title">Inventory</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'show' : '' }}"
                id="inventoryCollapse">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ request()->is('view_inventory') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('view_inventory') }}"><i class="fa-solid fa-wrench"></i>&nbsp;Add Inventory</a>
                    </li>
                    <li class="nav-item {{ request()->is('show_inventory') || request()->is('update_inventory/*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('show_inventory') }}"><i class="fa-solid fa-eye"></i>&nbsp;Show Inventory</a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Strategic Planning -->
        <li class="nav-item menu-items {{ request()->is('strategic_plan') || request()->is('strategic_details') ? 'active' : '' }}">
            <a class="nav-link" data-bs-toggle="collapse" href="#strategicPlanningCollapse" role="button"
                aria-expanded="{{ request()->is('strategic_plan') || request()->is('strategic_details') ? 'true' : 'false' }}"
                aria-controls="strategicPlanningCollapse">
                <span class="menu-icon"><i class="fa-solid fa-briefcase"></i></span>
                <span class="menu-title">Strategic Planning</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->is('strategic_plan') || request()->is('strategic_details') ? 'show' : '' }}"
                id="strategicPlanningCollapse">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ request()->is('scorecard') || request()->is('update_scorecard/*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('scorecard') }}"><i class="fa-solid fa-book"></i>&nbsp;Create Scorecard</a>
                    </li>
                    <li class="nav-item {{ request()->is('strategic_plan') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('strategic_plan') }}"><i class="fa-solid fa-file"></i>&nbsp;Create Work Plan</a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Time Management -->
        <li class="nav-item menu-items {{ request()->is('time_management') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('time_management') }}">
                <span class="menu-icon"><i class="fa-solid fa-clock fa-10x"></i></span>
                <span class="menu-title">Time Management</span>
            </a>
        </li>

        <!-- Departments -->
        <li class="nav-item menu-items {{ request()->is('departments') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('departments') }}">
                <span class="menu-icon"><i class="fa-solid fa-book fa-10x"></i></span>
                <span class="menu-title">Departments</span>
            </a>
        </li>

        <!-- Givings -->
        <li class="nav-item menu-items {{ request()->is('view_givings') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('view_givings') }}">
                <span class="menu-icon"><i class="fa-solid fa-sack-dollar"></i></span>
                <span class="menu-title">Givings</span>
            </a>
        </li>

        <!-- Users -->
        <li class="nav-item menu-items {{ request()->is('see_users') || request()->is('update_user/*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('see_users') }}">
                <span class="menu-icon"><i class="fa-solid fa-user"></i></span>
                <span class="menu-title">Users</span>
            </a>
        </li>

        <!-- Human Resource -->
        <li class="nav-item menu-items {{ request()->is('view') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('#') }}">
                <span class="menu-icon"><i class="fa-solid fa-user-tie"></i></span>
                <span class="menu-title">Human Resource</span>
            </a>
        </li>
    </ul>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
  crossorigin="anonymous"></script>

