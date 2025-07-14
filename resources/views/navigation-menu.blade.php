<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <!-- Hamburger Button for offcanvas on small screens -->
    <button class="btn btn-success d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Brand -->
    <a class="navbar-brand ms-3" href="{{ url('/') }}">
      {{ config('app.name', 'Laravel') }}
    </a>

    <!-- Navbar links visible on lg and above -->
    <div class="collapse navbar-collapse d-none d-lg-flex justify-content-end align-items-center">
      @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
      <div class="dropdown me-3">
        <button class="btn btn-white dropdown-toggle text-muted" type="button" id="teamsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          {{ Auth::user()->currentTeam->name }}
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="teamsDropdown" style="min-width: 15rem;">
          <li class="dropdown-header text-muted small">Manage Team</li>
          <li><a class="dropdown-item" href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">Team Settings</a></li>
          @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
            <li><a class="dropdown-item" href="{{ route('teams.create') }}">Create New Team</a></li>
          @endcan
          @if (Auth::user()->allTeams()->count() > 1)
            <li><hr class="dropdown-divider"></li>
            <li class="dropdown-header text-muted small">Switch Teams</li>
            @foreach (Auth::user()->allTeams() as $team)
              <li>
                <form method="POST" action="{{ route('current-team.update') }}">
                  @csrf
                  <input type="hidden" name="team_id" value="{{ $team->id }}">
                  <button type="submit" class="dropdown-item">{{ $team->name }}</button>
                </form>
              </li>
            @endforeach
          @endif
        </ul>
      </div>
      @endif

      <!-- User Dropdown -->
      <div class="dropdown me-3">
        <button class="btn btn-white dropdown-toggle d-flex align-items-center" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <img class="rounded-circle me-2" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" width="32" height="32">
          @endif
          <span>{{ Auth::user()->name }}</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown" style="min-width: 15rem;">
          <li class="dropdown-header text-muted small">Manage Account</li>
          <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a></li>
          @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
            <li><a class="dropdown-item" href="{{ route('api-tokens.index') }}">API Tokens</a></li>
          @endif
          <li><hr class="dropdown-divider"></li>
          <li>
            <form method="POST" action="{{ route('logout') }}" id="logout-form">
              @csrf
              <button type="submit" class="dropdown-item">Log Out</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<!-- Offcanvas Sidebar for Mobile -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasMenuLabel">Menu</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body p-0">
    <nav class="nav flex-column">
      <!-- Profile Info -->
      <div class="d-flex align-items-center p-3 border-bottom">
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
          <img class="rounded-circle me-3" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" width="48" height="48">
        @endif
        <div>
          <div class="fw-bold">{{ Auth::user()->name }}</div>
          <div class="text-muted small">{{ Auth::user()->email }}</div>
        </div>
      </div>

      <a href="{{ route('profile.show') }}" class="nav-link px-3 py-2">Profile</a>
      @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
        <a href="{{ route('api-tokens.index') }}" class="nav-link px-3 py-2">API Tokens</a>
      @endif
      <form method="POST" action="{{ route('logout') }}" class="px-3 py-2">
        @csrf
        <button type="submit" class="btn btn-link nav-link p-0 text-start w-100">Log Out</button>
      </form>

      <hr>

      <span class="nav-link disabled px-3 py-2 text-uppercase small">Navigation</span>

      <a href="{{ url('/redirected') }}" class="nav-link px-3 py-2 {{ request()->is('/redirect') ? 'active' : '' }}">
        <i class="fa-solid fa-gauge-high me-2 text-success"></i> Dashboard
      </a>

      @if (auth()->user()->usertype == 1)
        <a class="nav-link px-3 py-2 d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#collapseMembers" role="button" aria-expanded="{{ request()->is('view_members') || request()->is('see_members') || request()->is('update_member/*') ? 'true' : 'false' }}" aria-controls="collapseMembers">
          <span><i class="fa-solid fa-users me-2 text-success"></i> Manage Members</span>
          <i class="fa-solid fa-chevron-down"></i>
        </a>
        <div class="collapse {{ request()->is('view_members') || request()->is('see_members') || request()->is('update_member/*') ? 'show' : '' }}" id="collapseMembers">
          <nav class="nav flex-column ms-3">
            <a href="{{ url('view_members') }}" class="nav-link {{ request()->is('view_members') ? 'active' : '' }}">
              <i class="fa-solid fa-user me-2"></i> Register Members
            </a>
            <a href="{{ url('see_members') }}" class="nav-link {{ request()->is('see_members') || request()->is('update_member/*') ? 'active' : '' }}">
              <i class="fa-solid fa-eye me-2"></i> View Members
            </a>
          </nav>
        </div>

        <a class="nav-link px-3 py-2 d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#collapseInventory" role="button" aria-expanded="{{ request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'true' : 'false' }}" aria-controls="collapseInventory">
          <span><i class="fa-solid fa-warehouse me-2 text-danger"></i> Inventory</span>
          <i class="fa-solid fa-chevron-down"></i>
        </a>
        <div class="collapse {{ request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'show' : '' }}" id="collapseInventory">
          <nav class="nav flex-column ms-3">
            <a href="{{ url('view_inventory') }}" class="nav-link {{ request()->is('view_inventory') ? 'active' : '' }}">
              <i class="fa-solid fa-wrench me-2"></i> Add Inventory
            </a>
            <a href="{{ url('show_inventory') }}" class="nav-link {{ request()->is('show_inventory') || request()->is('update_inventory/*') ? 'active' : '' }}">
              <i class="fa-solid fa-eye me-2"></i> Show Inventory
            </a>
          </nav>
        </div>

        <a class="nav-link px-3 py-2 d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#collapseStrategic" role="button" aria-expanded="{{ request()->is('strategic_plan') || request()->is('strategic_details') ? 'true' : 'false' }}" aria-controls="collapseStrategic">
          <span><i class="fa-solid fa-briefcase me-2" style="color: orange;"></i> Strategic Planning</span>
          <i class="fa-solid fa-chevron-down"></i>
        </a>
        <div class="collapse {{ request()->is('strategic_plan') || request()->is('strategic_details') ? 'show' : '' }}" id="collapseStrategic">
          <nav class="nav flex-column ms-3">
            <a href="{{ url('scorecard') }}" class="nav-link {{ request()->is('scorecard') || request()->is('update_scorecard/*') ? 'active' : '' }}">
              <i class="fa-solid fa-book me-2"></i> Strategic Plan
            </a>
            <a href="{{ url('strategic_plan') }}" class="nav-link {{ request()->is('strategic_plan') || request()->is('update_scorecard/*') ? 'active' : '' }}">
              <i class="fa-solid fa-file me-2"></i> Strategic Details
            </a>
          </nav>
        </div>

        <a href="{{ url('see_users') }}" class="nav-link px-3 py-2 {{ request()->is('see_users') || request()->is('update_user/*') ? 'active' : '' }}">
          <i class="fa-solid fa-user me-2 text-success"></i> Users
        </a>

        <a href="{{ url('view_givings') }}" class="nav-link px-3 py-2 {{ request()->is('view_givings') ? 'active' : '' }}">
          <i class="fa-solid fa-sack-dollar me-2 text-success"></i> Givings
        </a>

        <a href="{{ url('departments') }}" class="nav-link px-3 py-2 {{ request()->is('departments') ? 'active' : '' }}">
          <i class="fa-solid fa-book me-2"></i> Departments
        </a>

        <a href="#" class="nav-link px-3 py-2 {{ request()->is('view') ? 'active' : '' }}">
          <i class="fa-solid fa-user-tie me-2" style="color: orange;"></i> Human Resource
        </a>
      @endif

      @if (auth()->user()->usertype == 0)
        <a href="{{ url('member_registration') }}" class="nav-link px-3 py-2 {{ request()->is('member_registration') ? 'active' : '' }}">
          <i class="fa-solid fa-user me-2"></i> Member Registration
        </a>
        <a href="{{ url('member_givings') }}" class="nav-link px-3 py-2 {{ request()->is('member_givings') ? 'active' : '' }}">
          <i class="fa-solid fa-sack-dollar me-2" style="color: #f39c12;"></i> Givings
        </a>
      @endif

      @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
        <hr>
        <div class="px-3 py-2 text-muted small">Manage Team</div>
        <a href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" class="nav-link px-3 py-2 {{ request()->routeIs('teams.show') ? 'active' : '' }}">
          Team Settings
        </a>
        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
          <a href="{{ route('teams.create') }}" class="nav-link px-3 py-2 {{ request()->routeIs('teams.create') ? 'active' : '' }}">
            Create New Team
          </a>
        @endcan
        @if (Auth::user()->allTeams()->count() > 1)
          <hr>
          <div class="px-3 py-2 text-muted small">Switch Teams</div>
          @foreach (Auth::user()->allTeams() as $team)
            <form method="POST" action="{{ route('current-team.update') }}" class="px-3 py-1">
              @csrf
              <input type="hidden" name="team_id" value="{{ $team->id }}">
              <button type="submit" class="btn btn-link nav-link p-0 text-start w-100">{{ $team->name }}</button>
            </form>
          @endforeach
        @endif
      @endif
    </nav>
  </div>
</div>
