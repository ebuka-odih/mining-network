<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>

    <li class="active">
        <a href="{{ route('user.dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Account Overview</span>
        </a>
    </li>


    <li class=""><a href="{{ route('user.deposit_plan') }}"><i class="fa fa-bitcoin"></i> <span>Make a Deposit</span></a></li>
    <li class=""><a href="{{ route('user.withdrawal') }}"><i class="fa fa-history"></i> <span>Transaction History</span></a></li>
    <li class=""><a href="{{ route('user.withdraw') }}"><i class="fa fa-credit-card"></i> <span>Withdrawal</span></a></li>
    <li class=""><a href="https://elitebitfx.com/index.php/User/Referrals"><i class="fa fa-user-plus"></i> <span>Your Referrals</span></a></li>
    <li class=""><a href="https://elitebitfx.com/index.php/User/Trade"><i class="fa fa-bitcoin"></i> <span>Trade Bitcoin</span></a></li>
    <li class="header">MISC</li>
    <li class=""><a href="https://elitebitfx.com/index.php/User/Profile"><i class="fa fa-user-circle"></i> <span>Referrals</span></a></li>
    <li class=""><a href="https://elitebitfx.com/index.php/User/Profile"><i class="fa fa-user-circle"></i> <span>Account Settings</span></a></li>
    <li class=""><a href="https://elitebitfx.com/index.php/User/Password"><i class="fa fa-key"></i> <span>Change Password</span></a></li>
    <li class=""><a href="https://elitebitfx.com/index.php/User/TwoFactorAuth"><i class="fa fa-lock"></i> <span>2FA Security</span></a></li>
    <li>
        <a class="nav-link" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out text-red"></i>
            <span class="nav-link-text">Sign Out</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
</ul>
