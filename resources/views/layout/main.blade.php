<html lang="en" style="height: auto;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/assets/logo.svg">
    <title>Hotel</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ config('paths.adminlte_path') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="{{ config('paths.adminlte_path') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ config('paths.adminlte_path') }}/dist/css/adminlte.min.css">
    {{-- Pace --}}
    <link rel="stylesheet"
        href="{{ config('paths.adminlte_path') }}/plugins/pace-progress/themes/black/pace-theme-flat-top.css">

    @yield('link')

    <style type="text/css">
        .pace .pace-progress {
            background: #0166ff;
        }

        /* ..... */
        .navbar-dark,
        .content-wrapper,
        .main-sidebar,
        .brand-link {
            background-color: #0f0f0f !important;
        }

        .custom-img-size {
            width: 34px;
            height: 34px;
            object-fit: cover;
            left: 10px;
        }

        .dark-mode .dropdown-menu {
            background-color: #282828;
            color: #fff;
        }

        .dropdown-menu {
            border-radius: .52rem;
        }

        ::-webkit-scrollbar {
            width: 12px;
            height: 12px;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: rgb(34, 34, 34);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.2);
        }

        .fas {
            line-height: 1.4;
        }

        .nav-pills .nav-link {
            border-radius: .52rem;
        }

        .dark-mode .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active,
        .dark-mode .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
            background-color: #3d3d3d;
            color: #fff;
        }
    </style>
</head>

<body class="dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" style="height: 0px;">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a style="" class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/home" class="nav-link">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto mr-4">
                <li class="nav-item dropdown">
                    @php
                        $photo =
                            Auth::user()->photo != null
                                ? config('paths.image_users_path') . '/' . Auth::user()->photo
                                : config('paths.no_image');
                    @endphp
                    <img class="custom-img-size rounded-circle" src="{{ $photo }}" class="border-top-0 nav-link"
                        role="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                        style="left: 0px; right: inherit; height: 100px;">
                        <a class="dropdown-item" href="/profile">Profile</a>
                        <div class="dropdown-divider"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="dropdown-item" href="/logout"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </div>
                </li>
            </ul>

            <!-- Right navbar links -->
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/dashboard" class="brand-link ml-2">
                <img src="/assets/logobg.svg" alt="" class="brand-image"
                        style="border-radius: 10px;">
                <span class="brand-text font-weight-light">Hotel</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <!-- SidebarSearch Form -->
                {{-- <div class="form-inline mt-3">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div> --}}

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="../dashboard" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('hotels.index') }}" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>Hotels</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('roomtypes.index') }}" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>RoomTypes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('rooms.index') }}" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>Rooms</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../books" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>Books</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('customers.index') }}" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>Customers</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/test" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>Test</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
            <!-- Content Header (Page header) -->

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ config('paths.adminlte_path') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ config('paths.adminlte_path') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{ config('paths.adminlte_path') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ config('paths.adminlte_path') }}/dist/js/adminlte.js?v=3.2.0"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ config('paths.adminlte_path') }}/dist/js/pages/dashboard2.js"></script>
    {{-- Pace --}}
    <script src="{{ config('paths.adminlte_path') }}/plugins/pace-progress/pace.min.js"></script>

    <script>
        $(function() {
            var url = window.location;
            // for single sidebar menu
            $('ul.nav-sidebar a').filter(function() {
                return this.href == url;
            }).addClass('active');

            // for sidebar menu and treeview
            $('ul.nav-treeview a').filter(function() {
                    return this.href == url;
                }).parentsUntil(".nav-sidebar > .nav-treeview")
                .css({
                    'display': 'block'
                })
                .addClass('menu-open').prev('a')
                .addClass('active');
        });

        $(document).ajaxStart(function() {
            Pace.restart();
        });
    </script>


    {{-- @yield('script') --}}
    @yield('script')
</body>

</html>
