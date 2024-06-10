<html lang="en" style="height: auto;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Modals &amp; Alerts</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">

    <link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">
    <style>
        .vt-augment {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .vt-augment.drawer {
            display: none;
            width: 700px;
            background: white;
            border: 1px solid #e6e6e6;
            text-align: left;
            z-index: 102;
            position: fixed;
            right: 0;
            top: 0;
            height: 100vh;
            box-shadow: -4px 5px 8px -3px rgba(17, 17, 17, .16);
            animation: slideToRight 0.5s 1 forwards;
            transform: translateX(100vw);
        }

        .vt-augment.drawer[opened] {
            display: flex;
            animation: slideFromRight 0.2s 1 forwards;
        }

        .vt-augment>.spinner {
            position: absolute;
            z-index: 199;
            top: calc(50% - 50px);
            left: calc(50% - 50px);
            border: 8px solid rgba(0, 0, 0, 0.2);
            border-left-color: white;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1.2s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes slideFromRight {
            0% {
                transform: translateX(100vw);
            }

            100% {
                transform: translateX(0);
            }
        }

        @keyframes slideToRight {
            100% {
                transform: translateX(100vw);
                display: none;
            }
        }

        @media screen and (max-width: 700px) {
            .vt-augment.drawer {
                width: 100%;
            }
        }
    </style>
</head>

<body class="sidebar-mini" style="height: auto;">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="../../index3.html" class="brand-link">
                <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                    <div class="sidebar-search-results">
                        <div class="list-group"><a href="#" class="list-group-item">
                                <div class="search-title"><strong class="text-light"></strong>N<strong
                                        class="text-light"></strong>o<strong class="text-light"></strong> <strong
                                        class="text-light"></strong>e<strong class="text-light"></strong>l<strong
                                        class="text-light"></strong>e<strong class="text-light"></strong>m<strong
                                        class="text-light"></strong>e<strong class="text-light"></strong>n<strong
                                        class="text-light"></strong>t<strong class="text-light"></strong> <strong
                                        class="text-light"></strong>f<strong class="text-light"></strong>o<strong
                                        class="text-light"></strong>u<strong class="text-light"></strong>n<strong
                                        class="text-light"></strong>d<strong class="text-light"></strong>!<strong
                                        class="text-light"></strong></div>
                                <div class="search-path"></div>
                            </a></div>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../index.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../index2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v3</p>
                                    </a>
                                </li>
                            </ul>
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
                        <li class="nav-item">
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
                                    <a href="../layout/fixed-sidebar-custom.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fixed Sidebar <small>+ Custom Area</small></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../layout/fixed-topnav.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fixed Navbar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../layout/fixed-footer.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fixed Footer</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../layout/collapsed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Collapsed Sidebar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Charts
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../charts/chartjs.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ChartJS</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../charts/flot.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Flot</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inline</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../charts/uplot.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>uPlot</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    UI Elements
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../UI/general.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>General</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../UI/icons.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Icons</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../UI/buttons.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Buttons</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../UI/sliders.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sliders</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../UI/modals.html" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Modals &amp; Alerts</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../UI/navbar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Navbar &amp; Tabs</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../UI/timeline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Timeline</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../UI/ribbons.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ribbons</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Forms
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../forms/general.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>General Elements</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../forms/advanced.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Advanced Elements</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../forms/editors.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Editors</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../forms/validation.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Validation</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Tables
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../tables/simple.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Simple Tables</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../tables/data.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>DataTables</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../tables/jsgrid.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>jsGrid</p>
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
                        <li class="nav-item">
                            <a href="../kanban.html" class="nav-link">
                                <i class="nav-icon fas fa-columns"></i>
                                <p>
                                    Kanban Board
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    Mailbox
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../mailbox/mailbox.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inbox</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../mailbox/compose.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Compose</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../mailbox/read-mail.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Read</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
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
                                <li class="nav-item">
                                    <a href="../examples/faq.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>FAQ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/contact-us.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Contact us</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    Extras
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Login &amp; Register v1
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="../examples/login.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Login v1</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../examples/register.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Register v1</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../examples/forgot-password.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Forgot Password v1</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../examples/recover-password.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Recover Password v1</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Login &amp; Register v2
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="../examples/login-v2.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Login v2</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../examples/register-v2.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Register v2</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../examples/forgot-password-v2.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Forgot Password v2</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../examples/recover-password-v2.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Recover Password v2</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/lockscreen.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lockscreen</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/legacy-user-menu.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Legacy User Menu</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/language-menu.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Language Menu</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/404.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Error 404</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/500.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Error 500</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/pace.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pace</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../examples/blank.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Blank Page</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../starter.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Starter Page</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-search"></i>
                                <p>
                                    Search
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../search/simple.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Simple Search</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../search/enhanced.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Enhanced</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">MISCELLANEOUS</li>
                        <li class="nav-item">
                            <a href="../../iframe.html" class="nav-link">
                                <i class="nav-icon fas fa-ellipsis-h"></i>
                                <p>Tabbed IFrame Plugin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Documentation</p>
                            </a>
                        </li>
                        <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Level 1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Level 1
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Level 2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Level 2
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Level 2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Level 1</p>
                            </a>
                        </li>
                        <li class="nav-header">LABELS</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle text-danger"></i>
                                <p class="text">Important</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>Warning</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Informational</p>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>

        </aside>

        <div class="content-wrapper" style="min-height: 1517.73px;">

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>
                                Modals &amp; Alerts
                                <small>new</small>
                            </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Modals &amp; Alerts</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-edit"></i>
                                        Modal Examples
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-default" data-toggle="modal"
                                        data-target="#modal-default">
                                        Launch Default Modal
                                    </button>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#modal-primary">
                                        Launch Primary Modal
                                    </button>
                                    <button type="button" class="btn btn-secondary" data-toggle="modal"
                                        data-target="#modal-secondary">
                                        Launch Secondary Modal
                                    </button>
                                    <button type="button" class="btn btn-info" data-toggle="modal"
                                        data-target="#modal-info">
                                        Launch Info Modal
                                    </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#modal-danger">
                                        Launch Danger Modal
                                    </button>
                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                        data-target="#modal-warning">
                                        Launch Warning Modal
                                    </button>
                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#modal-success">
                                        Launch Success Modal
                                    </button>
                                    <br>
                                    <br>
                                    <button type="button" class="btn btn-default" data-toggle="modal"
                                        data-target="#modal-sm">
                                        Launch Small Modal
                                    </button>
                                    <button type="button" class="btn btn-default" data-toggle="modal"
                                        data-target="#modal-lg">
                                        Launch Large Modal
                                    </button>
                                    <button type="button" class="btn btn-default" data-toggle="modal"
                                        data-target="#modal-xl">
                                        Launch Extra Large Modal
                                    </button>
                                    <br>
                                    <br>
                                    <button type="button" class="btn btn-default" data-toggle="modal"
                                        data-target="#modal-overlay">
                                        Launch Modal with Overlay
                                    </button>
                                    <div class="text-muted mt-3">
                                        Instructions for how to use modals are available on the
                                        <a href="https://getbootstrap.com/docs/4.4/components/modal/">Bootstrap
                                            documentation</a>
                                    </div>
                                </div>

                            </div>
                            <div class="card card-info card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-edit"></i>
                                        Toasts Examples <small>built in AdminLTE</small>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-default toastsDefaultDefault">
                                        Launch Default Toast
                                    </button>
                                    <button type="button" class="btn btn-default toastsDefaultFull">
                                        Launch Full Toast (with icon)
                                    </button>
                                    <button type="button" class="btn btn-default toastsDefaultFullImage">
                                        Launch Full Toast (with image)
                                    </button>
                                    <button type="button" class="btn btn-default toastsDefaultAutohide">
                                        Launch Default Toasts with autohide
                                    </button>
                                    <button type="button" class="btn btn-default toastsDefaultNotFixed">
                                        Launch Default Toasts with not fixed
                                    </button>
                                    <br>
                                    <br>
                                    <button type="button" class="btn btn-default toastsDefaultTopLeft">
                                        Launch Default Toast (topLeft)
                                    </button>
                                    <button type="button" class="btn btn-default toastsDefaultBottomRight">
                                        Launch Default Toast (bottomRight)
                                    </button>
                                    <button type="button" class="btn btn-default toastsDefaultBottomLeft">
                                        Launch Default Toast (bottomLeft)
                                    </button>
                                    <br>
                                    <br>
                                    <button type="button" class="btn btn-success toastsDefaultSuccess">
                                        Launch Success Toast
                                    </button>
                                    <button type="button" class="btn btn-info toastsDefaultInfo">
                                        Launch Info Toast
                                    </button>
                                    <button type="button" class="btn btn-warning toastsDefaultWarning">
                                        Launch Warning Toast
                                    </button>
                                    <button type="button" class="btn btn-danger toastsDefaultDanger">
                                        Launch Danger Toast
                                    </button>
                                    <button type="button" class="btn btn-default bg-maroon toastsDefaultMaroon">
                                        Launch Maroon Toast
                                    </button>
                                    <div class="text-muted mt-3">
                                    </div>
                                </div>
                            </div>
                            <div class="card card-success card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-edit"></i>
                                        SweetAlert2 Examples
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-success swalDefaultSuccess">
                                        Launch Success Toast
                                    </button>
                                    <button type="button" class="btn btn-info swalDefaultInfo">
                                        Launch Info Toast
                                    </button>
                                    <button type="button" class="btn btn-danger swalDefaultError">
                                        Launch Error Toast
                                    </button>
                                    <button type="button" class="btn btn-warning swalDefaultWarning">
                                        Launch Warning Toast
                                    </button>
                                    <button type="button" class="btn btn-default swalDefaultQuestion">
                                        Launch Question Toast
                                    </button>
                                    <div class="text-muted mt-3">
                                        For more examples look at <a
                                            href="https://sweetalert2.github.io/">https://sweetalert2.github.io/</a>
                                    </div>
                                </div>

                            </div>
                            <div class="card card-warning card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-edit"></i>
                                        Toastr Examples
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-success toastrDefaultSuccess">
                                        Launch Success Toast
                                    </button>
                                    <button type="button" class="btn btn-info toastrDefaultInfo">
                                        Launch Info Toast
                                    </button>
                                    <button type="button" class="btn btn-danger toastrDefaultError">
                                        Launch Error Toast
                                    </button>
                                    <button type="button" class="btn btn-warning toastrDefaultWarning">
                                        Launch Warning Toast
                                    </button>
                                    <div class="text-muted mt-3">
                                        For more examples look at <a
                                            href="https://codeseven.github.io/toastr/">https://codeseven.github.io/toastr/</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Default Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal fade" id="modal-overlay" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="overlay">
                                <i class="fas fa-2x fa-sync fa-spin"></i>
                            </div>
                            <div class="modal-header">
                                <h4 class="modal-title">Default Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal fade" id="modal-primary">
                    <div class="modal-dialog">
                        <div class="modal-content bg-primary">
                            <div class="modal-header">
                                <h4 class="modal-title">Primary Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-light"
                                    data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-outline-light">Save changes</button>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal fade" id="modal-secondary" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content bg-secondary">
                            <div class="modal-header">
                                <h4 class="modal-title">Secondary Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-light"
                                    data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-outline-light">Save changes</button>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal fade" id="modal-info" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content bg-info">
                            <div class="modal-header">
                                <h4 class="modal-title">Info Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-light"
                                    data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-outline-light">Save changes</button>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal fade" id="modal-warning" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content bg-warning">
                            <div class="modal-header">
                                <h4 class="modal-title">Warning Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-dark"
                                    data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-outline-dark">Save changes</button>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal fade" id="modal-success">
                    <div class="modal-dialog">
                        <div class="modal-content bg-success">
                            <div class="modal-header">
                                <h4 class="modal-title">Success Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-light"
                                    data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-outline-light">Save changes</button>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal fade" id="modal-danger" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content bg-danger">
                            <div class="modal-header">
                                <h4 class="modal-title">Danger Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-light"
                                    data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-outline-light">Save changes</button>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal fade" id="modal-sm" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Small Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal fade" id="modal-lg" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Large Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal fade" id="modal-xl" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Extra Large Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>

                    </div>

                </div>

            </section>

        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright © 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

        <aside class="control-sidebar control-sidebar-dark" style="display: none;">

            <div class="p-3 control-sidebar-content" style="">
                <h5>Customize AdminLTE</h5>
                <hr class="mb-2">
                <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Dark Mode</span>
                </div>
                <h6>Header Options</h6>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Dropdown Legacy
                        Offset</span></div>
                <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>No border</span>
                </div>
                <h6>Sidebar Options</h6>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Collapsed</span>
                </div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div>
                <div class="mb-1"><input type="checkbox" value="1" checked="checked"
                        class="mr-1"><span>Sidebar Mini</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini
                        MD</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini
                        XS</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Flat Style</span>
                </div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Legacy
                        Style</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav
                        Compact</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child
                        Indent</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Hide on
                        Collapse</span></div>
                <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Disable
                        Hover/Focus Auto-Expand</span></div>
                <h6>Footer Options</h6>
                <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span>
                </div>
                <h6>Small Text Options</h6>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Body</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Navbar</span>
                </div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Brand</span>
                </div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar
                        Nav</span></div>
                <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Footer</span>
                </div>
                <h6>Navbar Variants</h6>
                <div class="d-flex"><select class="custom-select mb-3 text-light border-0 bg-white">
                        <option class="bg-primary">Primary</option>
                        <option class="bg-secondary">Secondary</option>
                        <option class="bg-info">Info</option>
                        <option class="bg-success">Success</option>
                        <option class="bg-danger">Danger</option>
                        <option class="bg-indigo">Indigo</option>
                        <option class="bg-purple">Purple</option>
                        <option class="bg-pink">Pink</option>
                        <option class="bg-navy">Navy</option>
                        <option class="bg-lightblue">Lightblue</option>
                        <option class="bg-teal">Teal</option>
                        <option class="bg-cyan">Cyan</option>
                        <option class="bg-dark">Dark</option>
                        <option class="bg-gray-dark">Gray dark</option>
                        <option class="bg-gray">Gray</option>
                        <option class="bg-light">Light</option>
                        <option class="bg-warning">Warning</option>
                        <option class="bg-white">White</option>
                        <option class="bg-orange">Orange</option>
                    </select></div>
                <h6>Accent Color Variants</h6>
                <div class="d-flex"></div><select class="custom-select mb-3 border-0">
                    <option>None Selected</option>
                    <option class="bg-primary">Primary</option>
                    <option class="bg-warning">Warning</option>
                    <option class="bg-info">Info</option>
                    <option class="bg-danger">Danger</option>
                    <option class="bg-success">Success</option>
                    <option class="bg-indigo">Indigo</option>
                    <option class="bg-lightblue">Lightblue</option>
                    <option class="bg-navy">Navy</option>
                    <option class="bg-purple">Purple</option>
                    <option class="bg-fuchsia">Fuchsia</option>
                    <option class="bg-pink">Pink</option>
                    <option class="bg-maroon">Maroon</option>
                    <option class="bg-orange">Orange</option>
                    <option class="bg-lime">Lime</option>
                    <option class="bg-teal">Teal</option>
                    <option class="bg-olive">Olive</option>
                </select>
                <h6>Dark Sidebar Variants</h6>
                <div class="d-flex"></div><select class="custom-select mb-3 text-light border-0 bg-primary">
                    <option>None Selected</option>
                    <option class="bg-primary">Primary</option>
                    <option class="bg-warning">Warning</option>
                    <option class="bg-info">Info</option>
                    <option class="bg-danger">Danger</option>
                    <option class="bg-success">Success</option>
                    <option class="bg-indigo">Indigo</option>
                    <option class="bg-lightblue">Lightblue</option>
                    <option class="bg-navy">Navy</option>
                    <option class="bg-purple">Purple</option>
                    <option class="bg-fuchsia">Fuchsia</option>
                    <option class="bg-pink">Pink</option>
                    <option class="bg-maroon">Maroon</option>
                    <option class="bg-orange">Orange</option>
                    <option class="bg-lime">Lime</option>
                    <option class="bg-teal">Teal</option>
                    <option class="bg-olive">Olive</option>
                </select>
                <h6>Light Sidebar Variants</h6>
                <div class="d-flex"></div><select class="custom-select mb-3 border-0">
                    <option>None Selected</option>
                    <option class="bg-primary">Primary</option>
                    <option class="bg-warning">Warning</option>
                    <option class="bg-info">Info</option>
                    <option class="bg-danger">Danger</option>
                    <option class="bg-success">Success</option>
                    <option class="bg-indigo">Indigo</option>
                    <option class="bg-lightblue">Lightblue</option>
                    <option class="bg-navy">Navy</option>
                    <option class="bg-purple">Purple</option>
                    <option class="bg-fuchsia">Fuchsia</option>
                    <option class="bg-pink">Pink</option>
                    <option class="bg-maroon">Maroon</option>
                    <option class="bg-orange">Orange</option>
                    <option class="bg-lime">Lime</option>
                    <option class="bg-teal">Teal</option>
                    <option class="bg-olive">Olive</option>
                </select>
                <h6>Brand Logo Variants</h6>
                <div class="d-flex"></div><select class="custom-select mb-3 border-0">
                    <option>None Selected</option>
                    <option class="bg-primary">Primary</option>
                    <option class="bg-secondary">Secondary</option>
                    <option class="bg-info">Info</option>
                    <option class="bg-success">Success</option>
                    <option class="bg-danger">Danger</option>
                    <option class="bg-indigo">Indigo</option>
                    <option class="bg-purple">Purple</option>
                    <option class="bg-pink">Pink</option>
                    <option class="bg-navy">Navy</option>
                    <option class="bg-lightblue">Lightblue</option>
                    <option class="bg-teal">Teal</option>
                    <option class="bg-cyan">Cyan</option>
                    <option class="bg-dark">Dark</option>
                    <option class="bg-gray-dark">Gray dark</option>
                    <option class="bg-gray">Gray</option>
                    <option class="bg-light">Light</option>
                    <option class="bg-warning">Warning</option>
                    <option class="bg-white">White</option>
                    <option class="bg-orange">Orange</option><a href="#">clear</a>
                </select>
            </div>
        </aside>

        <div id="sidebar-overlay"></div>
    </div>


    <script src="../../plugins/jquery/jquery.min.js"></script>

    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>

    <script src="../../plugins/toastr/toastr.min.js"></script>

    <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>

    <script src="../../dist/js/demo.js"></script>

    <script>
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            $('.swalDefaultSuccess').click(function() {
                Toast.fire({
                    icon: 'success',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultInfo').click(function() {
                Toast.fire({
                    icon: 'info',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultError').click(function() {
                Toast.fire({
                    icon: 'error',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultWarning').click(function() {
                Toast.fire({
                    icon: 'warning',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.swalDefaultQuestion').click(function() {
                Toast.fire({
                    icon: 'question',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });

            $('.toastrDefaultSuccess').click(function() {
                toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultInfo').click(function() {
                toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultError').click(function() {
                toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultWarning').click(function() {
                toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });

            $('.toastsDefaultDefault').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultTopLeft').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    position: 'topLeft',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultBottomRight').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    position: 'bottomRight',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultBottomLeft').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    position: 'bottomLeft',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultAutohide').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    autohide: true,
                    delay: 750,
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultNotFixed').click(function() {
                $(document).Toasts('create', {
                    title: 'Toast Title',
                    fixed: false,
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultFull').click(function() {
                $(document).Toasts('create', {
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    icon: 'fas fa-envelope fa-lg',
                })
            });
            $('.toastsDefaultFullImage').click(function() {
                $(document).Toasts('create', {
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    image: '../../dist/img/user3-128x128.jpg',
                    imageAlt: 'User Picture',
                })
            });
            $('.toastsDefaultSuccess').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-success',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultInfo').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-info',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultWarning').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-warning',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultDanger').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-danger',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
            $('.toastsDefaultMaroon').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-maroon',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
        });
    </script>


    <div>
        <div class="vtResetstyles">
            <div id="vtoverlay" class="vtoverlay vthidden w3-animate-right
        w3-container">
                <div class="vtmain vthidden" id="vtmain">
                    <div class="vtcontactus">
                        <a id="linktest" href="https://www.virustotal.com">
                            <img class="vtlogo-popup" style=" width: 32px;
                height: 32px;"
                                src="chrome-extension://efbjojhplkelaegfbieplglfidafgoka/icons/vt-logo.svg">
                        </a>
                        <a href="https://www.virustotal.com">VT4Browsers
                        </a>
                    </div>
                    <span id="vtclose"><strong>X</strong></span>
                    <div class="vttextpopup vthidden" id="statustext">
                        <div class="vtscanstatus" id="vtscanstatus"></div>
                        <div class="vtprogress vthidden" id="vtprogress"></div>
                        <br id="brfile">
                        <div class="vtscanstatus" id="vtscanfilelink"></div>
                    </div>
                    <div class="vttextpopup vthidden" id="widgettext">
                        <div id="vtwidgetError"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="vt-augment-container" class="vtzindex vt-augment drawer" style="background: rgb(49, 61, 90);">
        </div>
    </div><span class="vttooltiptext vthidden">&nbsp;Click to open VirusTotal report&nbsp;<br>with VT Augment</span>
    <style></style>
    <div id="toastsContainerTopRight" class="toasts-top-right fixed">
        <div class="toast bg-success fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header"><strong class="mr-auto">Toast Title</strong><small>Subtitle</small><button
                    data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close"><span
                        aria-hidden="true">×</span></button></div>
            <div class="toast-body">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</div>
        </div>
        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header"><strong class="mr-auto">Toast Title</strong><button data-dismiss="toast"
                    type="button" class="ml-2 mb-1 close" aria-label="Close"><span
                        aria-hidden="true">×</span></button></div>
            <div class="toast-body">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</div>
        </div>
        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header"><i class="mr-2 fas fa-envelope fa-lg"></i><strong class="mr-auto">Toast
                    Title</strong><small>Subtitle</small><button data-dismiss="toast" type="button"
                    class="ml-2 mb-1 close" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="toast-body">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</div>
        </div>
        <div class="toast bg-danger fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header"><strong class="mr-auto">Toast Title</strong><small>Subtitle</small><button
                    data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close"><span
                        aria-hidden="true">×</span></button></div>
            <div class="toast-body">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</div>
        </div>
    </div>
    <div id="toastsContainerBottomRight" class="toasts-bottom-right fixed">
        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header"><strong class="mr-auto">Toast Title</strong><button data-dismiss="toast"
                    type="button" class="ml-2 mb-1 close" aria-label="Close"><span
                        aria-hidden="true">×</span></button></div>
            <div class="toast-body">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</div>
        </div>
        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header"><strong class="mr-auto">Toast Title</strong><button data-dismiss="toast"
                    type="button" class="ml-2 mb-1 close" aria-label="Close"><span
                        aria-hidden="true">×</span></button></div>
            <div class="toast-body">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</div>
        </div>
    </div>
    <div id="toastsContainerTopLeft" class="toasts-top-left fixed">
        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header"><strong class="mr-auto">Toast Title</strong><button data-dismiss="toast"
                    type="button" class="ml-2 mb-1 close" aria-label="Close"><span
                        aria-hidden="true">×</span></button></div>
            <div class="toast-body">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</div>
        </div>
        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header"><strong class="mr-auto">Toast Title</strong><button data-dismiss="toast"
                    type="button" class="ml-2 mb-1 close" aria-label="Close"><span
                        aria-hidden="true">×</span></button></div>
            <div class="toast-body">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</div>
        </div>
    </div>
</body>

</html>
