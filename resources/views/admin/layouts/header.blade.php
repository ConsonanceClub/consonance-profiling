<header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>C</b>SN</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Consonance</b> </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <!-- Notifications: style can be found in dropdown.less -->
                {{----}}
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('images/logo-146x150.png')}}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ucfirst(auth()->user()->first_name)}}</span>
                    </a>
                    <ul class="dropdown-menu" style="border-top: thick 2px black">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{asset('images/logo-146x150.png')}}" class="img-circle" alt="User Image">

                            <p>
                                {{ucfirst(auth()->user()->first_name)}}
{{--                                <small> since {{auth('admin')->user()->created_at->toFormattedDateString()}}</small>--}}
                            </p>
                        </li>
                        <!-- Menu Body -->

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            {{--<div class="pull-left">--}}
                                {{--<a href="#" class="btn btn-default btn-flat">Profile</a>--}}
                            {{--</div>--}}
                            <div class="pull-right">
                                <a class="btn btn-default btn-flat"  href="{{ route('auth.logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                                         </a>

                            <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                             {{--@endif--}}
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>