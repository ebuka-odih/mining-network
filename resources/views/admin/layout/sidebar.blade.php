<div id="sidebar-menu">

    <ul class="metismenu" id="side-menu">

        <li class="menu-title">Navigation</li>

        <li>
            <a href="{{ route('admin.dashboard') }}" class="waves-effect waves-light">
                <i class="mdi mdi-view-dashboard"></i>
                <span>  Dashboard  </span>
            </a>
        </li>

        <li>
            <a href="javascript: void(0);" class="waves-effect waves-light">
                <i class="mdi mdi-gift"></i>
                <span>  Transactions </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="{{ route('admin.deposit') }}">Deposits</a></li>
                <li><a href="{{ route('admin.withdrawal') }}">Withdrawal</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="waves-effect waves-light">
                <i class="mdi mdi-gift"></i>
                <span>  Package </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="{{ route('admin.packages.create') }}">Add Package</a></li>
                <li><a href="{{ route('admin.packages.index') }}">All Package</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('admin.users') }}" class="waves-effect waves-light">
                <i class="mdi mdi-calendar"></i>
                <span> Users </span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.user_message') }}" class="waves-effect waves-light">
                <i class="mdi mdi-settings"></i>
                <span>  Settings </span>
            </a>
        </li>




    </ul>

</div>


