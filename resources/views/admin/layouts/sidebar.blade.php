<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">

            <div class="pull-left info">
                <p>Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
{{--        <!-- search form -->--}}
{{--        <form action="#" method="get" class="sidebar-form">--}}
{{--            <div class="input-group">--}}
{{--                <input type="text" name="q" class="form-control" placeholder="Search...">--}}
{{--                <span class="input-group-btn">--}}
{{--                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>--}}
{{--                </button>--}}
{{--              </span>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--        <!-- /.search form -->--}}
{{--        <!-- sidebar menu: : style can be found in sidebar.less -->--}}
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a  href="{{route('movie.index')}}"><i class="fa fa-circle-o"></i>Movies</a></li>
                    <li><a href="{{route('cast.index')}}"><i class="fa fa-circle-o"></i> Casts</a></li>
                    <li><a href="{{route('theatre.index')}}"><i class="fa fa-circle-o"></i> Theatre</a></li>
                    <li><a href="{{route('seats.index')}}"><i class="fa fa-circle-o"></i> Seats</a></li>
                    <li><a href="{{route('city.index')}}"><i class="fa fa-circle-o"></i> City</a></li>
                </ul>
            </li>




    <!-- /.sidebar -->
</aside>
