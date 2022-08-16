<header class="main-header">
    <!-- Logo -->
    <a href="https://elitebitfx.com/index.php/User" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>{{ setting("site_name") }}</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>{{ setting("site_name") }}</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <strong>1 BTC = <span class="btc-price"></span> USD</strong>
                    </a>
                </li>

                <!-- <li class="dropdown messages-menu hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-clock-o"></i> <small>Last Login: </small>
                    </a>
                </li> -->

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ auth()->user()->profile_image }}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ auth()->user()->last_name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ auth()->user()->profile_image }}" class="img-circle" alt="Admin Passport">

                            <p>
                                {{ auth()->user()->first_name." ".auth()->user()->last_name }}<small>Investor</small>									</p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="https://elitebitfx.com/index.php/User/Profile" class="btn btn-default btn-flat">View Profile</a>
                            </div>
                            <div class="pull-right">
{{--                                <a href="https://elitebitfx.com/index.php/Auth/Logout" class="btn btn-default btn-flat">Logout</a>\--}}

                                <a class="nav-link btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    <span class="nav-link-text">Sign Out</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
