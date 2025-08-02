<style>
    /* CoreUI-friendly styling (custom enhancements) */
    .menu-arrow {
        transition: transform 0.3s ease-in-out;
        font-size: 12px;
        margin-left: auto;
    }

    .nav-link[aria-expanded="true"] .menu-arrow {
        transform: rotate(90deg);
    }

    .nav-group-toggle::after {
        font-family: "Material Design Icons";
        content: "\F140"; /* mdi-chevron-right */
        margin-left: auto;
        transition: transform 0.3s ease;
    }

    .nav-group.show > .nav-group-toggle::after {
        transform: rotate(90deg);
    }

    .nav-icon {
        margin-right: 10px;
    }

    .nav-item .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 6px;
    }

    .nav-link.active {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
        color: white !important;
        border-radius: 6px;
        font-weight: bold;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.0.0/dist/css/coreui.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <a href="{{ url('/redirect') }}">
            <img src="{{ asset('admin/assets/images/faces/sda3.png') }}" height="50" alt="logo" />
        </a>
    </div>

    <ul class="sidebar-nav" data-coreui="navigation" role="navigation">
        <li class="nav-title d-flex justify-content-between align-items-center">
            <span>Navigation</span>
            <button class="btn btn-sm text-white" type="button" onclick="coreui.Sidebar.getInstance(document.getElementById('sidebar')).toggle()">
                <i class="mdi mdi-menu"></i>
            </button>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('/redirected') ? 'active' : '' }}" href="{{ url('/redirected') }}">
                <i class="nav-icon fas fa-tachometer-alt"></i> Dashboard
            </a>
        </li>

        <li class="nav-group {{ request()->is('view_members*') || request()->is('see_members') ? 'show' : '' }}">
            <a class="nav-link nav-group-toggle {{ request()->is('view_members*') || request()->is('see_members') ? 'active' : '' }}" href="#">
                <i class="nav-icon fas fa-users"></i> Manage Members
            </a>
            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('view_members') ? 'active' : '' }}" href="{{ url('view_members') }}">
                        <i class="fas fa-user-plus nav-icon"></i> Register Members
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('see_members') || request()->is('update_member/*') ? 'active' : '' }}" href="{{ url('see_members') }}">
                        <i class="fas fa-eye nav-icon"></i> View Members
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-group {{ request()->is('view_inventory*') || request()->is('show_inventory') ? 'show' : '' }}">
            <a class="nav-link nav-group-toggle {{ request()->is('view_inventory*') || request()->is('show_inventory') ? 'active' : '' }}" href="#">
                <i class="nav-icon fas fa-warehouse"></i> Inventory
            </a>
            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('view_inventory') ? 'active' : '' }}" href="{{ url('view_inventory') }}">
                        <i class="fas fa-plus nav-icon"></i> Add Inventory
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('show_inventory') || request()->is('update_inventory/*') ? 'active' : '' }}" href="{{ url('show_inventory') }}">
                        <i class="fas fa-list nav-icon"></i> Show Inventory
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-group {{ request()->is('strategic_plan') || request()->is('strategic_details') ? 'show' : '' }}">
            <a class="nav-link nav-group-toggle {{ request()->is('strategic_plan') || request()->is('strategic_details') ? 'active' : '' }}" href="#">
                <i class="nav-icon fas fa-briefcase"></i> Strategic Planning
            </a>
            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('scorecard') ? 'active' : '' }}" href="{{ url('scorecard') }}">
                        <i class="fas fa-chart-line nav-icon"></i> Create Scorecard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('strategic_plan') ? 'active' : '' }}" href="{{ url('strategic_plan') }}">
                        <i class="fas fa-tasks nav-icon"></i> Create Work Plan
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('time_management') ? 'active' : '' }}" href="{{ url('time_management') }}">
                <i class="nav-icon fas fa-clock"></i> Time Management
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('departments') ? 'active' : '' }}" href="{{ url('departments') }}">
                <i class="nav-icon fas fa-building"></i> Departments
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('view_givings') ? 'active' : '' }}" href="{{ url('view_givings') }}">
                <i class="nav-icon fas fa-hand-holding-heart"></i> Givings
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('see_users') ? 'active' : '' }}" href="{{ url('see_users') }}">
                <i class="nav-icon fas fa-users-cog"></i> Users
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('view') ? 'active' : '' }}" href="{{ url('#') }}">
                <i class="nav-icon fas fa-user-tie"></i> Human Resource
            </a>
        </li>
    </ul>
</div>
<!-- CoreUI CSS -->


<!-- CoreUI JS -->
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.0.0/dist/js/coreui.bundle.min.js"></script>
