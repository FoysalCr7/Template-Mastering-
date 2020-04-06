<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">


        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{ asset('/') }}admin/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{ asset('/') }}admin/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{ asset('/') }}admin/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
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
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
                        class="fas fa-th-large"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('/admin/home') }}" class="brand-link">
            <img src="{{ asset('/') }}admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('/') }}admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                    </li>




                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-circle"></i>
                            <p>
                                Customer
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('/admin/add-customer') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Customer</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('/admin/manege-customer') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manege Customer</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('/admin/unregister-customer') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Unregistered Customer</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-circle"></i>
                            <p>
                                Order
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('/admin/add-order') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Order</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('/admin/new-order') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>new Order</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('/admin/complete-order') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Complete Orders</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('/admin/ongoing-order') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ongoing Orders</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-circle"></i>
                            <p>
                                Items
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('/admin/add-product') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Items</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('/admin/manege-product') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manege Items</p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa-circle"></i>
                                    <p>
                                        Category
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('/admin/add-category') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add Category</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('/admin/manege-category') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Manege Category</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa-circle"></i>
                                    <p>
                                        Add Onns
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('/admin/add-addons') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add Addons</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('/admin/manege-addons') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Manege Addons</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa-circle"></i>
                                    <p>
                                        Design Types
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('/admin/add-design') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add Design Types</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('/admin/manege-design') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Manege Design Types</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>



                    <li class="nav-item has-treeview">

                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-circle"></i>
                            <p>
                                Page
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('/admin/add-page') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Page</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('/admin/manege-page') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manege page</p>
                                </a>
                            </li>

                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa-circle"></i>
                                    <p>
                                        Nav/Menu
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('/admin/manege-menu') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add Menu</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('/admin/manege-menu') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Manege Menu</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('/admin/homepage-setting') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Homepage Setting</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('/admin/social-network') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Social Networks Settings</p>
                                </a>
                            </li>


                        </ul>
                    </li>

                    <li class="nav-item has-treeview">

                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-circle"></i>
                            <p>
                                Widgets
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('/admin/widget-top') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Top</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('/admin/widget-homecontrol') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Home Control</p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="{{ route('/admin/widget-leftside') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Left Side</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('/admin/widget-content') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Content</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('/admin/widget-rightside') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Right Side</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('/admin/widget-footer') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Footer</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('/admin/widget-statics') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Statics</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-circle"></i>
                            <p>
                                Profile
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/tables/simple.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Edit Profile</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-circle"></i>
                            <p>
                                User
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('/admin/add-user') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('/admin/manege-user') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manege User</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-circle"></i>
                            <p>
                                Setting
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('/admin/setting-log') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Log</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="p{{ route('/admin/setting-external-code') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>External Code Integration
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('/admin/setting-payment-setting') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Payment Setting
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('/admin/setting-offer') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Promotional Offer

                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('/admin/setting-order-status-condition') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Order Status Conditions
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('/admin/setting-sellerrate') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Seller Commission rate
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('/admin/setting-siteinformation') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Site Information
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa-circle"></i>
                            <p>
                                My Account
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/tables/simple.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Logout</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="container-fluid">
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <h1 class="m-0 text-dark">Dashboard </h1>
                                    </div><!-- /.col -->
                                    <div class="col-sm-6">
                                        <ol class="breadcrumb float-sm-right">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item active">Dashboard </li>
                                        </ol>
                                    </div><!-- /.col -->
                                </div><!-- /.row -->
                            </div><!-- /.container-fluid -->
                        </div>



                @yield('body')

@include('admin.includes.footer')
                        <script src="{{ asset('/') }}admin/plugins/jquery/jquery.min.js"></script>
                        <!-- Bootstrap -->
                        <script src="{{ asset('/') }}admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                        <!-- AdminLTE -->
                        <script src="{{ asset('/') }}admin/dist/js/adminlte.js"></script>

                        <!-- OPTIONAL SCRIPTS -->
                        <script src="{{ asset('/') }}admin/plugins/chart.js/Chart.min.js"></script>
                        <script src="{{ asset('/') }}admin/dist/js/demo.js"></script>
                        <script src="{{ asset('/') }}admin/dist/js/pages/dashboard3.js"></script>
</body>
</html>
