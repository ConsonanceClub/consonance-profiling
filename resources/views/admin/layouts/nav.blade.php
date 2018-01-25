<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin: 0;">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Home</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{route('admin.index')}}"><i class="fa fa-wrench fa-fw"></i> Users</a>

                </li>
                <li>
                    <a href="{{route('admin.create')}}"><i class="fa fa-wrench fa-fw"></i> Create a User</a>

                </li>
                <li>
                    <a href="{{route('category.index')}}"><i class="fa fa-dashboard fa-fw"></i> All Categories</a>
                </li>
                <li>
                    <a href="{{route('category.create')}}"><i class="fa fa-dashboard fa-fw"></i> Create Category</a>
                </li>

                <li>
                    <a href="{{route('activity.index')}}"><i class="fa fa-dashboard fa-fw"></i> All Activities</a>
                </li>
                <li>
                    <a href="{{route('activity.create')}}"><i class="fa fa-dashboard fa-fw"></i> Create an Activity</a>
                </li>

                <li>
                    <a href="{{route('group.index')}}"><i class="fa fa-wrench fa-fw"></i> Group</a>

                </li>
                <li>
                    <a href="{{route('group.create')}}"><i class="fa fa-wrench fa-fw"></i> Add a Group</a>

                </li>




                <li>
                    <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="blank.html">Blank Page</a>
                        </li>
                        <li>
                            <a href="login.html">Login Page</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
