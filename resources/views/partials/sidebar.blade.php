
<aside id="appSidebar"
       class="dashboard-sidebar text-white flex-shrink-0">

    <!-- Sidebar Brand -->
    <div class="sidebar-brand px-3 py-4 border-bottom border-secondary">
        <div class="d-flex align-items-center gap-2">
            <i class="bi bi-shield-check fs-3 text-info"></i>
            <div>
                <h5 class="mb-0 fw-bold">MyDashboard</h5>
                <small class="text-white-50">Administration</small>
            </div>
        </div>
    </div>

    <!-- User Information -->
    <div class="px-3 py-4 border-bottom border-secondary">
        <div class="d-flex align-items-center gap-3">
            <div class="sidebar-avatar">
                <i class="bi bi-person-fill fs-3"></i>
            </div>

            <div>
                <div class="fw-semibold">Administrator</div>
                <small class="text-white-50">
                    <i class="bi bi-circle-fill text-success me-1"
                       style="font-size: 8px;"></i>
                    Online
                </small>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="p-3">
        <small class="text-uppercase text-white-50 px-2">
            Main Menu
        </small>

        <nav class="nav flex-column gap-1 mt-3">

            <a href="{{ route('dashboard') }}"
               class="nav-link sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2 me-2"></i>
                Dashboard
            </a>

            <a href="{{ route('dashboard.v2') }}"
               class="nav-link sidebar-link {{ request()->routeIs('dashboard.v2') ? 'active' : '' }}">
                <i class="bi bi-grid me-2"></i>
                Dashboard v2
            </a>

            <a href="#" class="nav-link sidebar-link">
                <i class="bi bi-bar-chart-line me-2"></i>
                Analytics
            </a>

            <a href="#" class="nav-link sidebar-link">
                <i class="bi bi-people me-2"></i>
                Users
            </a>

            <a href="#" class="nav-link sidebar-link">
                <i class="bi bi-box-seam me-2"></i>
                Products
            </a>

            <a href="#" class="nav-link sidebar-link">
                <i class="bi bi-receipt me-2"></i>
                Orders
            </a>

            <a href="#" class="nav-link sidebar-link">
                <i class="bi bi-table me-2"></i>
                Tables
            </a>

            <a href="#" class="nav-link sidebar-link">
                <i class="bi bi-calendar-event me-2"></i>
                Calendar
            </a>

            <a href="#" class="nav-link sidebar-link">
                <i class="bi bi-envelope me-2"></i>
                Messages
                <span class="badge text-bg-primary ms-auto">5</span>
            </a>

        </nav>

        <small class="text-uppercase text-white-50 px-2 d-block mt-4 mb-3">
            Settings
        </small>

        <nav class="nav flex-column gap-1">
            <a href="#" class="nav-link sidebar-link">
                <i class="bi bi-gear me-2"></i>
                Settings
            </a>

            <a href="#" class="nav-link sidebar-link">
                <i class="bi bi-question-circle me-2"></i>
                Help & Support
            </a>
        </nav>
    </div>
</aside>

<style>
    .dashboard-sidebar {
        width: 250px;
        min-height: calc(100vh - 65px);
        background: #1e293b;
        transition: margin-left .25s ease;
    }

    .sidebar-brand {
        min-height: 85px;
    }

    .sidebar-avatar {
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #334155;
        color: #fff;
    }

    .sidebar-link {
        display: flex;
        align-items: center;
        padding: 12px 14px;
        color: #cbd5e1;
        border-radius: 7px;
        text-decoration: none;
        transition: background .2s ease, color .2s ease;
    }

    .sidebar-link:hover {
        background: #334155;
        color: #fff;
    }

    .sidebar-link.active {
        background: #0d6efd;
        color: #fff;
    }

    #appSidebar.sidebar-hidden {
        display: none;
    }

    @media (max-width: 767.98px) {
        .dashboard-sidebar {
            width: 230px;
        }
    }
</style>