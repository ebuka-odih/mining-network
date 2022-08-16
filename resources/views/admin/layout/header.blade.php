<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                 <img src="{{ asset('assets/images/ava.jpg') }}" alt="user-image" class="rounded-circle">
                <span class="d-none d-sm-inline-block ml-1">{{ optional(auth()->user())->last_name ." ".optional(auth()->user())->first_name }}.</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>

                <div class="dropdown-divider"></div>

                <!-- item-->

                <a class="dropdown-item notify-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                    <i class="mdi mdi-logout-variant"></i>
                    <span>Logout</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>
        </li>


    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="index.html" class="logo text-center">
                    <span class="logo-lg">
{{--                        <img src="assets/images/logo-light.png" alt="" height="18">--}}
<!-- <span class="logo-lg-text-light">Zircos</span> -->
                    </span>
            <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">Z</span> -->
{{--                        <img src="assets/images/logo-sm.png" alt="" height="24">--}}
                    </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect">
                <i class="mdi mdi-menu"></i>
            </button>
        </li>


    </ul>
</div>
