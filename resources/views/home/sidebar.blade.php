<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="{{ url('/redirect') }}"><img src="admin/assets/images/faces/sda3.png"
        alt="logo" /></a>
    <a class="sidebar-brand brand-logo-mini" href="{{ url('/redirect') }}"><img src="admin/assets/images/faces/sda4.png"
        alt="logo" /></a>
  </div>
  <ul class="nav">

    <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li>

    <li class="nav-item menu-items {{ request()->is('/redirected') ? 'active' : '' }}">
      <a class="nav-link" href="{{ url('/redirected') }}">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li
      class="nav-item menu-items {{ request()->is('view_members') || request()->is('see_members') || request()->is('update_member/*') ? 'active' : '' }}">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic"
        aria-expanded="{{ request()->is('view_members') || request()->is('see_members') ? 'true' : 'false' }}"
        aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="fa-solid fa-users"></i>
        </span>
        <span class="menu-title">Manage Members</span>
        <i class="mdi mdi-chevron-left menu-arrow"></i>
      </a>
      <div class="collapse {{ request()->is('view_members') || request()->is('see_members') ? 'show' : '' }}"
        id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ request()->is('view_members') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('view_members') }}">
              <i class="fa-solid fa-user-plus"></i>&nbsp;Register Members
            </a>
          </li>

          <li class="nav-item {{ request()->is('see_members') || request()->is('update_member/*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('see_members') }}">
              <i class="fa-solid fa-eye"></i>&nbsp;View Members
            </a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item menu-items {{ request()->is('member_givings') ? 'active' : '' }}">
      <a class="nav-link" href="{{ url('member_givings') }}">
        <span class="menu-icon">
          <i class="fa-solid fa-sack-dollar"></i>
        </span>
        <span class="menu-title">Givings</span>
      </a>
    </li>

    <li class="nav-item menu-items {{ request()->is('member_registration') ? 'show' : '' }}">
      <a class="nav-link" href="{{ url('member_registration') }}">
        <span class="menu-icon">
          <i class="fa-solid fa-user fa-3x"></i>
        </span>
        <span class="menu-title">Member Registration</span>
      </a>
    </li>

  </ul>
</nav>

<script>
  function previewImage(event) {
    const image = document.getElementById('profileImage');
    image.src = URL.createObjectURL(event.target.files[0]);
  }
</script>