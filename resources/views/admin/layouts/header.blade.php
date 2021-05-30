<nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="home" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

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

        <li class="nav-item dropdown user-menu">
{{--            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">--}}
{{--                <span class="d-none d-md-inline">{{Auth::user()->name}}</span>--}}
{{--            </a>--}}
{{--            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
{{--                <li class="user-header bg-primary">--}}
{{--                    <p>--}}
{{--                        {{Auth::user()->name}} - Web Developer--}}
{{--                        <small>Member since   {{Auth::user()->created_at->toFormattedDateString()}}</small>--}}
{{--                    </p>--}}
{{--                </li>--}}
{{--                <li class="user-footer">--}}
{{--                    <a href="#" class="btn btn-default btn-flat">Profile</a>--}}
{{--                    <a href="{{ route('logout') }}"--}}
{{--                       onclick="event.preventDefault();--}}
{{--                                   document.getElementById('logout-form').submit();" class="btn btn-default btn-flat float-right">--}}
{{--                        Logout--}}
{{--                    </a>--}}
{{--                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                        {{ csrf_field() }}--}}
{{--                    </form>--}}
{{--                </li>--}}
{{--            </ul>--}}
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

    </ul>
</nav>











{{--<header class="main-header">--}}
{{--    <!-- Logo -->--}}
{{--    <a href="index2.html" class="logo">--}}
{{--        <!-- mini logo for sidebar mini 50x50 pixels -->--}}
{{--        <span class="logo-mini"><b>A</b>LT</span>--}}
{{--        <!-- logo for regular state and mobile devices -->--}}
{{--        <span class="logo-lg"><b>Admin</b>LTE</span>--}}
{{--    </a>--}}
{{--    <!-- Header Navbar: style can be found in header.less -->--}}
{{--    <nav class="navbar navbar-static-top">--}}
{{--        <!-- Sidebar toggle button-->--}}
{{--        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">--}}
{{--            <span class="sr-only">Toggle navigation</span>--}}
{{--        </a>--}}

{{--        <div class="navbar-custom-menu">--}}
{{--            <ul class="nav navbar-nav">--}}

{{--            </ul>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--</header>--}}
