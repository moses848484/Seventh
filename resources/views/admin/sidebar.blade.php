<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bootstrap 4 Sidebar Layout</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap 4 CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Material Design Icons -->
  <link href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css" rel="stylesheet">

  <style>
    body {
      overflow-x: hidden;
    }

    /* Sidebar */
    #sidebar {
      width: 250px;
      min-height: 100vh;
      background-color: #343a40;
      transition: all 0.3s;
      color: #fff;
    }

    #sidebar.collapsed {
      width: 70px !important;
    }

    #sidebar .nav-link {
      color: #adb5bd;
      transition: all 0.3s;
    }

    #sidebar .nav-link:hover {
      background-color: #495057;
      color: #fff;
    }

    #sidebar .nav-link span {
      transition: opacity 0.3s;
    }

    #sidebar.collapsed .nav-link span {
      opacity: 0;
    }

    #sidebar .mdi {
      font-size: 20px;
    }

    #sidebar .nav-category {
      font-size: 0.85rem;
      padding-left: 1rem;
      color: #ced4da;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-top: 1rem;
      padding-bottom: 0.5rem;
    }

    /* Main content */
    #main-content {
      margin-left: 250px;
      padding: 2rem;
      transition: all 0.3s;
      width: 100%;
    }

    #main-content.collapsed {
      margin-left: 70px;
    }

    .navbar-toggler {
      border: none;
      background: none;
      padding: 0;
      margin-right: 0.75rem;
    }

    .mdi-menu {
      font-size: 24px;
      color: #ffffff;
    }
  </style>
</head>
<body>

  <div class="d-flex">
    <!-- Sidebar -->
    <nav id="sidebar" class="bg-dark">
      <ul class="nav flex-column">
        <li class="nav-item nav-category px-3">
          <span class="mb-0">Dashboard</span>
          <!-- Sidebar toggler button -->
          <button class="navbar-toggler" type="button" id="sidebarToggle">
            <span class="mdi mdi-menu"></span>
          </button>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="mdi mdi-view-dashboard-outline mr-2"></i>
            <span>Overview</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="mdi mdi-account-outline mr-2"></i>
            <span>Users</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="mdi mdi-settings-outline mr-2"></i>
            <span>Settings</span>
          </a>
        </li>
      </ul>
    </nav>

    <!-- Main Content -->
    <div id="main-content">
      <h2>Welcome</h2>
      <p>This is the main content area. Use the menu button to toggle the sidebar.</p>
    </div>
  </div>

  <!-- JS Dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    // Toggle sidebar
    document.getElementById('sidebarToggle').addEventListener('click', function () {
      document.getElementById('sidebar').classList.toggle('collapsed');
      document.getElementById('main-content').classList.toggle('collapsed');
    });
  </script>

</body>
</html>
