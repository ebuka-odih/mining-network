@extends('dashboard.layout.app')
@section('content')

<div class="wrapper">

   @include('dashboard.layout.header')
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="https://elitebitfx.com/assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Nancy John</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>

                <li class="">
                    <a href="{{ route('user.dashboard') }}">
                        <i class="fa fa-dashboard"></i> <span>Account Overview</span>
                    </a>
                </li>

                <li class="active"><a href="{{ route('user.deposit_plan') }}"><i class="fa fa-bitcoin"></i> <span>Make a Deposit</span></a></li>
                <li class=""><a href="{{ route('user.withdrawal') }}"><i class="fa fa-history"></i> <span>Transaction History</span></a></li>
                <li class=""><a href="{{ route('user.withdraw') }}"><i class="fa fa-credit-card"></i> <span>Withdrawal</span></a></li>
                <li class=""><a href="https://elitebitfx.com/index.php/User/Referrals"><i class="fa fa-user-plus"></i> <span>Your Referrals</span></a></li>
                <li class=""><a href="https://elitebitfx.com/index.php/User/Trade"><i class="fa fa-bitcoin"></i> <span>Trade Bitcoin</span></a></li>
                <li class="header">MISC</li>
                <li class=""><a href="https://elitebitfx.com/index.php/User/Profile"><i class="fa fa-user-circle"></i> <span>Account Settings</span></a></li>
                <li class=""><a href="https://elitebitfx.com/index.php/User/Password"><i class="fa fa-key"></i> <span>Change Password</span></a></li>
                <li class=""><a href="https://elitebitfx.com/index.php/User/TwoFactorAuth"><i class="fa fa-lock"></i> <span>2FA Security</span></a></li>
                <li> <a class="nav-link" href="{{ route('logout') }}"
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
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Deposits
            </h1>
            <ol class="breadcrumb">
                <li><a href="https://elitebitfx.com/index.php/User"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Deposit Records</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Main row -->
            <div class="row">

                @include('dashboard.layout.board')

                <div class="col-md-12">
                </div>

                <div class="col-md-10 col-md-offset-1">
                    <div class="box box-blue">
                        <div class="box-header with-border">
                            <i class="ion ion-cube"></i>
                            <h3 class="box-title">Make a Deposit</h3>
                        </div>
                        <div class="box-body">
                            <p>
                                To make a new deposit, please select your preferred plan from the list below. You can use the Calculate your profit feature to calculate your return on investment and how much you'd earn at the end of the plan period.
                            </p>
                            <div class="" style="margin-top: 5%;">

                                <form action="{{ route('user.deposit.store') }}" method="POST">
                                    @csrf
                                    @if(session()->has('disapproved'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('disapproved') }}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="">Select a Plan:</label>
                                        <select name="package_id" id="package" class="form-control" required>
                                            <option value=''>Choose a Plan</option>
                                            @foreach($plans as $plan)
                                                <option value='{{ $plan->id }}'>{{ $plan->name }} ({{ "$".$plan->min_deposit." - $".$plan->max_deposit }}) -  {{ $plan->total_return()."%" }} After {{ $plan->term_days }} Day(s)</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <hr>
                                    <h4>Deposit Information</h4>
                                    <p>
                                        - Account Balance: <strong>0.00000000 BTC</strong>
                                    </p>
                                    <p>
                                        - Selected Plan: <strong id="selected_plan">Choose a Plan</strong>
                                    </p>
                                    <p>
                                        - Payment Method: <strong id="payment_method">Bitcoin</strong>
                                    </p>
                                    <div class="form-group ">
                                        <label for="">Amount (in BTC): </label>
                                        <input type="text" name="amount" value="" onkeypress="return isNumberKey(event)" class="form-control" required>
                                    </div>
                                    <button class="btn btn-lg bg-blue btn-flat" type="submit" style="width: 200px;">Deposit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

        </section>
        <!-- /.Left col -->
    </div>
    <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>

@endsection
