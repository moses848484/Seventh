<style>
.sidebar-offcanvas {
    width: 250px !important;
    height: 100vh !important;
    position: fixed !important;
    top: 0 !important;
    left: 250px !important;
    z-index: 1040 !important;
    background-color: #343a40 !important;
    transition: left 0.3s ease !important;
    overflow-y: auto !important;
}

.sidebar-offcanvas.active {
    left: 0 !important;
}

.sidebar-offcanvas .nav-link.active {
    background-color: #495057 !important;
    border-radius: 0.25rem !important;
    font-weight: bold !important;
}

.sidebar-offcanvas .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.1) !important;
}
</style>

<!-- Sidebar Offcanvas -->
<nav class="sidebar-offcanvas bg-dark text-white" id="sidebar">
    <div class="sidebar-brand d-flex align-items-center justify-content-between p-3">
        <a href="{{ url('/redirect') }}">
            <img src="{{ asset('admin/assets/images/faces/sda3.png') }}" height="50" alt="logo" />
        </a>
        <button class="btn btn-sm text-white d-md-none" data-bs-toggle="offcanvas">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <ul class="nav flex-column px-2">
        <li class="nav-item">
            <a class="nav-link text-white {{ request()->is('/redirected') ? 'active' : '' }}" href="{{ url('/redirected') }}">
                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#membersMenu" role="button" aria-expanded="false">
                <span><i class="fas fa-users me-2"></i> Manage Members</span>
                <i class="fas fa-chevron-right"></i>
            </a>
            <div class="collapse {{ request()->is('view_members*') || request()->is('see_members') ? 'show' : '' }}" id="membersMenu">
                <ul class="nav flex-column ms-3">
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('view_members') ? 'active' : '' }}" href="{{ url('view_members') }}">
                            <i class="fas fa-user-plus me-2"></i> Register Members
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->is('see_members') || request()->is('update_member/*') ? 'active' : '' }}" href="{{ url('see_members') }}">
                            <i class="fas fa-eye me-2"></i> View Members
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Repeat for Inventory, Strategic Plan, etc. -->
        <!-- Add other sections like Inventory, Time Management etc. in the same format -->

    </ul>
</nav>
