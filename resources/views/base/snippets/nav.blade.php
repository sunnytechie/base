<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <form class="d-none d-md-flex ms-4">
        <input class="form-control bg-dark border-0" type="search" placeholder="Search">
    </form>
    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <i class="fa fa-plus me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Create</span>
            </a>
            <div class="dropdown-menu shadow dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                <div>
                    <a href="#" class="dropdown-item p-2">
                        <div class="d-flex align-items-center">
                            <div class="ms-2">
                                <small>New Databank</small>
                            </div>
                        </div>
                    </a>
                </div>
                

                <div>
                    <a href="#" class="dropdown-item p-2">
                        <div class="d-flex align-items-center">
                            <div class="ms-2">
                                <small>Create Social</small>
                            </div>
                        </div>
                    </a>
                </div>
                
                <hr class="dropdown-divider">
                <a href="#" class="dropdown-item text-left">Manage</a>
            </div>
        </div>


        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <i class="fa fa-bell me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Notification</span>
            </a>
            <div class="dropdown-menu shadow dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                <a href="#" class="dropdown-item p-2">
                    <div class="d-flex align-items-center">
                        <div class="ms-2">
                            <small>Profile updated, 15 minutes ago</small>
                        </div>
                    </div>
                </a>

                <a href="#" class="dropdown-item p-2">
                    <div class="d-flex align-items-center">
                        <div class="ms-2">
                            <small>New user added, 15 minutes ago</small>
                        </div>
                    </div>
                </a>

                <a href="#" class="dropdown-item p-2">
                    <div class="d-flex align-items-center">
                        <div class="ms-2">
                            <small>Password changed, 15 minutes ago</small>
                        </div>
                    </div>
                </a>

                <hr class="dropdown-divider">
                <a href="#" class="dropdown-item text-left">See all notifications</a>
            </div>
        </div>


        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img class="rounded-circle me-lg-2" src="{{ asset('assets/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                <span class="d-none d-lg-inline-flex">Joshua Emma</span>
            </a>
            <div class="dropdown-menu shadow dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                <a href="#" class="dropdown-item"> <i class="fa fa-user me-lg-2"></i> My Profile</a>
                {{-- <a href="#" class="dropdown-item">Settings</a> --}}
                <a href="{{ route('logout') }}" class="dropdown-item"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out-alt me-lg-2"></i> Log Out</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</nav>