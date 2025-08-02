import React, { useState, useEffect } from 'react';

const Sidebar = () => {
  const [isSidebarOpen, setIsSidebarOpen] = useState(false);
  const [openSubmenus, setOpenSubmenus] = useState({
    manageMembersSubmenu: false,
    inventorySubmenu: false,
    strategicSubmenu: false
  });

  // Mock function to simulate Laravel's request()->is() helper
  const isActive = (route) => {
    // In a real React app, you'd use React Router's useLocation
    // For demo purposes, you can modify this to test active states
    return route === 'view_members'; // Example: make "Register Members" active for demo
  };

  const toggleSidebar = () => {
    setIsSidebarOpen(!isSidebarOpen);
  };

  const toggleSubmenu = (submenuId) => {
    setOpenSubmenus(prev => ({
      ...prev,
      [submenuId]: !prev[submenuId]
    }));
  };

  const closeSidebar = () => {
    setIsSidebarOpen(false);
  };

  // Handle window resize
  useEffect(() => {
    const handleResize = () => {
      if (window.innerWidth >= 1024) {
        setIsSidebarOpen(true);
      } else {
        setIsSidebarOpen(false);
      }
    };

    handleResize();
    window.addEventListener('resize', handleResize);
    return () => window.removeEventListener('resize', handleResize);
  }, []);

  // Auto-expand submenus if they contain active items
  useEffect(() => {
    const shouldExpandMembers = isActive('view_members') || isActive('see_members') || isActive('update_member/*');
    const shouldExpandInventory = isActive('view_inventory') || isActive('show_inventory') || isActive('update_inventory/*');
    const shouldExpandStrategic = isActive('strategic_plan') || isActive('strategic_details');

    setOpenSubmenus({
      manageMembersSubmenu: shouldExpandMembers,
      inventorySubmenu: shouldExpandInventory,
      strategicSubmenu: shouldExpandStrategic
    });
  }, []);

  return (
    <>
      <style>{`
        .fa-file {
          color: blueviolet !important;
        }

        .fa-book {
          color: green !important;
        }

        /* Arrow Animation Styles */
        .menu-arrow {
          transition: transform 0.3s ease-in-out;
          font-size: 12px;
          margin-left: auto;
        }

        /* Rotate arrow when menu is expanded */
        .nav-link[aria-expanded="true"] .menu-arrow {
          transform: rotate(90deg);
        }

        /* Smooth collapse transitions */
        .collapse {
          transition: all 0.35s ease;
        }

        /* Add hover effects */
        .nav-item.menu-items .nav-link {
          transition: all 0.3s ease;
          border-radius: 8px;
          margin: 2px 8px;
        }

        .nav-item.menu-items .nav-link:hover {
          background-color: rgba(255, 255, 255, 0.1);
          transform: translateX(5px);
        }

        /* Active state styling */
        .nav-item.menu-items.active > .nav-link {
          background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
          color: white;
          box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        /* Sub-menu styling */
        .sub-menu .nav-item .nav-link {
          padding-left: 50px;
          font-size: 14px;
          transition: all 0.3s ease;
        }

        .sub-menu .nav-item .nav-link:hover {
          background-color: rgba(255, 255, 255, 0.05);
          padding-left: 55px;
        }

        .sub-menu .nav-item.active .nav-link {
          background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
          color: white;
          border-radius: 6px;
        }

        /* Icon animations */
        .menu-icon {
          transition: all 0.3s ease;
          display: inline-flex;
          align-items: center;
          justify-content: center;
          width: 35px;
          height: 35px;
          border-radius: 8px;
          margin-right: 15px;
        }

        .nav-link:hover .menu-icon {
          background-color: rgba(255, 255, 255, 0.1);
          transform: scale(1.1);
        }

        /* Pulse animation for active items */
        .nav-item.menu-items.active > .nav-link .menu-icon {
          animation: pulse 2s infinite;
        }

        @keyframes pulse {
          0% {
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7);
          }
          70% {
            box-shadow: 0 0 0 10px rgba(255, 255, 255, 0);
          }
          100% {
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
          }
        }

        /* Smooth fade in for collapsed content */
        .collapse.show {
          animation: fadeInDown 0.5s ease-in-out;
        }

        @keyframes fadeInDown {
          from {
            opacity: 0;
            transform: translateY(-10px);
          }
          to {
            opacity: 1;
            transform: translateY(0);
          }
        }

        /* Menu title animations */
        .menu-title {
          transition: all 0.3s ease;
        }

        .nav-link:hover .menu-title {
          color: #fff;
          text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        /* Sidebar background */
        .sidebar {
          background: linear-gradient(180deg, #2c3e50 0%, #34495e 100%);
        }

        /* Override text colors for dark background */
        .sidebar .nav-link {
          color: #ecf0f1;
        }

        .sidebar .nav-category {
          color: #bdc3c7;
        }
      `}</style>

      {/* Mobile Menu Button */}
      <button 
        onClick={toggleSidebar}
        className="lg:hidden fixed top-4 left-4 z-50 p-2 bg-white rounded-md shadow-lg"
      >
        <span className="text-xl">☰</span>
      </button>

      {/* Overlay for mobile */}
      <div 
        className={`fixed inset-0 bg-black bg-opacity-50 z-30 lg:hidden transition-opacity duration-300 ${
          isSidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'
        }`}
        onClick={closeSidebar}
      />

      {/* Sidebar */}
      <nav className={`sidebar fixed top-0 left-0 h-full w-64 shadow-lg z-40 transition-transform duration-300 ease-in-out ${
        isSidebarOpen ? 'translate-x-0' : '-translate-x-full'
      } lg:translate-x-0`}>
        
        {/* Brand */}
        <div className="flex items-center justify-center p-4 border-b border-gray-600">
          <a href="{{ url('/redirect') }}" className="flex items-center">
            <img src="admin/assets/images/faces/sda3.png" alt="logo" className="h-10 w-auto" />
          </a>
          <a href="{{ url('/redirect') }}" className="ml-2 lg:hidden">
            <img src="admin/assets/images/faces/sda4.png" alt="logo" className="h-8 w-auto" />
          </a>
        </div>

        {/* Navigation */}
        <div className="flex-1 overflow-y-auto">
          <ul className="p-0">
            
            {/* Navigation Header */}
            <li className="nav-item nav-category flex items-center justify-between px-4 py-3">
              <span className="text-sm font-medium">Navigation</span>
              <button 
                onClick={toggleSidebar}
                className="p-1 hover:bg-gray-600 rounded"
              >
                <span className="text-lg">☰</span>
              </button>
            </li>

            {/* Dashboard */}
            <li className={`nav-item menu-items ${isActive('/redirect') ? 'active' : ''}`}>
              <a 
                href="{{ url('/redirected') }}" 
                className="nav-link flex items-center p-3"
              >
                <span className="menu-icon">
                  <i className="fas fa-tachometer-alt"></i>
                </span>
                <span className="menu-title">Dashboard</span>
              </a>
            </li>

            {/* Manage Members */}
            <li className={`nav-item menu-items ${
              isActive('view_members') || isActive('see_members') || isActive('update_member/*') ? 'active' : ''
            }`}>
              <button 
                className="nav-link w-full flex items-center p-3"
                aria-expanded={openSubmenus.manageMembersSubmenu}
                onClick={() => toggleSubmenu('manageMembersSubmenu')}
              >
                <span className="menu-icon">
                  <i className="fa-solid fa-users"></i>
                </span>
                <span className="menu-title flex-1 text-left">Manage Members</span>
                <i className="fas fa-chevron-left menu-arrow"></i>
              </button>
              <div className={`collapse ${openSubmenus.manageMembersSubmenu ? 'show' : ''}`}>
                <ul className="sub-menu flex flex-col">
                  <li className={`nav-item ${isActive('view_members') ? 'active' : ''}`}>
                    <a href="{{ url('view_members') }}" className="nav-link flex items-center">
                      <i className="fa-solid fa-user-plus mr-2"></i>
                      Register Members
                    </a>
                  </li>
                  <li className={`nav-item ${isActive('see_members') || isActive('update_member/*') ? 'active' : ''}`}>
                    <a href="{{ url('see_members') }}" className="nav-link flex items-center">
                      <i className="fa-solid fa-eye mr-2"></i>
                      View Members
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            {/* Inventory */}
            <li className={`nav-item menu-items ${
              isActive('view_inventory') || isActive('show_inventory') || isActive('update_inventory/*') ? 'active' : ''
            }`}>
              <button 
                className="nav-link w-full flex items-center p-3"
                aria-expanded={openSubmenus.inventorySubmenu}
                onClick={() => toggleSubmenu('inventorySubmenu')}
              >
                <span className="menu-icon">
                  <i className="fa-solid fa-warehouse"></i>
                </span>
                <span className="menu-title flex-1 text-left">Inventory</span>
                <i className="fas fa-chevron-right menu-arrow"></i>
              </button>
              <div className={`collapse ${openSubmenus.inventorySubmenu ? 'show' : ''}`}>
                <ul className="sub-menu flex flex-col">
                  <li className={`nav-item ${isActive('view_inventory') ? 'active' : ''}`}>
                    <a href="{{ url('view_inventory') }}" className="nav-link flex items-center">
                      <i className="fa-solid fa-plus mr-2"></i>
                      Add Inventory
                    </a>
                  </li>
                  <li className={`nav-item ${isActive('show_inventory') || isActive('update_inventory/*') ? 'active' : ''}`}>
                    <a href="{{ url('show_inventory') }}" className="nav-link flex items-center">
                      <i className="fa-solid fa-list mr-2"></i>
                      Show Inventory
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            {/* Strategic Planning */}
            <li className={`nav-item menu-items ${
              isActive('strategic_plan') || isActive('strategic_details') ? 'active' : ''
            }`}>
              <button 
                className="nav-link w-full flex items-center p-3"
                aria-expanded={openSubmenus.strategicSubmenu}
                onClick={() => toggleSubmenu('strategicSubmenu')}
              >
                <span className="menu-icon">
                  <i className="fa-solid fa-briefcase"></i>
                </span>
                <span className="menu-title flex-1 text-left">Strategic Planning</span>
                <i className="fas fa-chevron-right menu-arrow"></i>
              </button>
              <div className={`collapse ${openSubmenus.strategicSubmenu ? 'show' : ''}`}>
                <ul className="sub-menu flex flex-col">
                  <li className={`nav-item ${isActive('scorecard') || isActive('update_scorecard/*') ? 'active' : ''}`}>
                    <a href="{{ url('scorecard') }}" className="nav-link flex items-center">
                      <i className="fa-solid fa-chart-line mr-2"></i>
                      Create Scorecard
                    </a>
                  </li>
                  <li className={`nav-item ${isActive('strategic_plan') || isActive('update_scorecard/*') ? 'active' : ''}`}>
                    <a href="{{ url('strategic_plan') }}" className="nav-link flex items-center">
                      <i className="fa-solid fa-tasks mr-2"></i>
                      Create Work Plan
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            {/* Time Management */}
            <li className={`nav-item menu-items ${isActive('time_management') ? 'active' : ''}`}>
              <a href="{{ url('time_management') }}" className="nav-link flex items-center p-3">
                <span className="menu-icon">
                  <i className="fa-solid fa-clock"></i>
                </span>
                <span className="menu-title">Time Management</span>
              </a>
            </li>

            {/* Departments */}
            <li className={`nav-item menu-items ${isActive('departments') ? 'active' : ''}`}>
              <a href="{{ url('departments') }}" className="nav-link flex items-center p-3">
                <span className="menu-icon">
                  <i className="fa-solid fa-building"></i>
                </span>
                <span className="menu-title">Departments</span>
              </a>
            </li>

            {/* Givings */}
            <li className={`nav-item menu-items ${isActive('view_givings') ? 'active' : ''}`}>
              <a href="{{ url('view_givings') }}" className="nav-link flex items-center p-3">
                <span className="menu-icon">
                  <i className="fa-solid fa-hand-holding-heart"></i>
                </span>
                <span className="menu-title">Givings</span>
              </a>
            </li>

            {/* Users */}
            <li className={`nav-item menu-items ${isActive('see_users') || isActive('update_user/*') ? 'active' : ''}`}>
              <a href="{{ url('see_users') }}" className="nav-link flex items-center p-3">
                <span className="menu-icon">
                  <i className="fa-solid fa-users-cog"></i>
                </span>
                <span className="menu-title">Users</span>
              </a>
            </li>

            {/* Human Resource */}
            <li className={`nav-item menu-items ${isActive('view') ? 'active' : ''}`}>
              <a href="{{ url('#') }}" className="nav-link flex items-center p-3">
                <span className="menu-icon">
                  <i className="fa-solid fa-user-tie"></i>
                </span>
                <span className="menu-title">Human Resource</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </>
  );
};

export default Sidebar;