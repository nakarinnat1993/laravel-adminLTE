<a href="/backend" class="brand-link">
    <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
</a>
<div class="sidebar">
    <!-- Sidebar user (optional) -->
    {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

            <li class="nav-item">
                <a href="../widgets.html" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../widgets.html" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Widgets
                        <span class="right badge badge-danger">New</span>
                    </p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Layout Options
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right">6</span>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../layout/top-nav.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Top Navigation</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../layout/top-nav-sidebar.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Top Navigation + Sidebar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../layout/boxed.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Boxed</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../layout/fixed-sidebar.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Fixed Sidebar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../layout/fixed-topnav.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Fixed Navbar</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-header">EXAMPLES</li>
            <li class="nav-item">
                <a href="../calendar.html" class="nav-link">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>
                        Calendar
                        <span class="badge badge-info right">2</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../gallery.html" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Gallery
                    </p>
                </a>
            </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Pages
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../examples/invoice.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Invoice</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../examples/profile.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../examples/e-commerce.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>E-commerce</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../examples/projects.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Projects</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../examples/project-add.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Project Add</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../examples/project-edit.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Project Edit</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../examples/project-detail.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Project Detail</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../examples/contacts.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Contacts</p>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
