
<nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm px-3 py-2">
    <div class="container-fluid">

        <!-- Sidebar Toggle -->
        <button class="btn btn-light border me-3"
                type="button"
                id="sidebarToggle"
                aria-label="Toggle sidebar">
            <i class="bi bi-list fs-4"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand fw-bold text-primary me-4"
           href="{{ route('dashboard') }}">
            <i class="bi bi-grid-1x2-fill me-2"></i>MyDashboard
        </a>

        <!-- Mobile Search Toggle -->
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#headerMenu"
                aria-controls="headerMenu"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="headerMenu">

            <!-- Search -->
            <form class="d-flex my-3 my-lg-0 me-auto"
                  role="search"
                  action="#"
                  method="GET">
                <div class="input-group">
                    <input type="search"
                           class="form-control"
                           name="search"
                           placeholder="Search..."
                           aria-label="Search">
                    <button class="btn btn-outline-secondary"
                            type="submit"
                            aria-label="Submit search">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>

            <!-- Right Navigation -->
            <ul class="navbar-nav align-items-lg-center gap-lg-2">

                <li class="nav-item">
                    <a href="#"
                       class="nav-link"
                       aria-label="Notifications">
                        <i class="bi bi-bell fs-5"></i>
                        <span class="badge text-bg-danger">3</span>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center gap-2"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        <i class="bi bi-person-circle fs-4"></i>
                        <span>Admin</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-person me-2"></i>Profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-gear me-2"></i>Settings
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item text-danger" href="#">
                                <i class="bi bi-box-arrow-right me-2"></i>Logout
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>