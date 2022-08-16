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
                    <li class=""><a href="https://elitebitfx.com/index.php/User/Trade"><i class="fa fa-envelope"></i> <span>Messages </span></a></li>
                    <li class="header">MISC</li>
                    <li class=""><a href="https://elitebitfx.com/index.php/User/Profile"><i class="fa fa-user-circle"></i> <span>Account Settings</span></a></li>
                    <li class=""><a href="https://elitebitfx.com/index.php/User/Password"><i class="fa fa-key"></i> <span>Change Password</span></a></li>
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
                                <div class="deposit">

                                    @if( $deposit_detail->status == 1)
                                        <table class="table">
                                            <tr>
                                                <th>PLAN:</th>
                                                <td colspan="2">{{ optional($deposit_detail->investment_plan)->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>INVESTED AMOUNT:</th>
                                                <td colspan="2">${{ $deposit_detail->amount }}</td>
                                            </tr>
                                            <tr>
                                                <th>ROI:</th>
                                                <td colspan="2">$@convert($profit)</td>
                                            </tr>
                                            <tr>
                                                <th>TOTAL RETURN (WITH CAPITAL):</th>
                                                <td colspan="2">$@convert($profit + $deposit_detail->amount)</td>
                                            </tr>
                                            <tr>
                                                <th>START DATE:</th>
                                                <td colspan="2">{{ date('d-M-y', strtotime($deposit_detail->approved_date)) }}</td>
                                            </tr>
                                            <tr>
                                                <th>ENDING DATE:</th>
                                                <td colspan="2">{{ date('d-M-y', strtotime($deposit_detail->end_date)) }}</td>
                                            </tr>
                                            <tr>
                                                <th>INTERVAL:</th>
                                                <td colspan="2">{{ optional($deposit_detail->investment_plan)->term_days }} Days</td>
                                            </tr>
                                            <tr>
                                                <th>DAILY PROFIT:</th>
                                                <td colspan="2">{{ optional($deposit_detail->investment_plan)->daily_interest }}(%)</td>
                                            </tr>
                                            <tr>
                                                <th>TOTAL PROFIT (%):</th>
                                                <td colspan="2">{{ optional($deposit_detail->investment_plan)->total_return() }}(%)</td>
                                            </tr>
                                            <tr>
                                                <th>STATUS:</th>
                                                <td colspan="2">{!! $deposit_detail->status() !!}</td>
                                            </tr>

                                            <tr>
                                                <td colspan=3>&nbsp;</td>
                                            </tr>
                                            @if($deposit_detail->completed == true)
                                                <tr>

                                                    <th>PLAN STATUS:</th>
                                                    <td><span class='label label-success text text-uppercase'>Ended</span></td>
                                                </tr>
                                            @else
                                                <tr>

                                                    <th>PLAN STATUS:</th>

                                                    <td><span class='label label-success text text-uppercase'>In progress</span></td>
                                                </tr>
                                            @endif
                                            <tr>
                                                <th>PROFIT EARNED:</th>
                                                <td colspan="2">$ {{ $deposit_detail->earning }} (without capital)</td>
                                            </tr>
                                            <tr>
                                                <th>TOTAL EARNED:</th>
                                                <td colspan="2">$ {{  $deposit_detail->total_earned }} (plus capital)</td>
                                            </tr>
                                        </table>
                                    @elseif( $deposit_detail->status == 0)
                                        <table  class="table">
                                            <tr>
                                                <th>CHOSEN PLAN:</th>
                                                <td colspan="2">{{ optional($deposit_detail->investment_plan)->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>INVESTMENT AMOUNT:</th>
                                                <td colspan="2">${{ $deposit_detail->amount }}</td>
                                            </tr>
                                            <tr>
                                                <th>EXPECTED PROFIT:</th>
                                                <td colspan="2">${{ $profit }}</td>
                                            </tr>
                                            <tr>
                                                <th>INVESTMENT INTERVAL:</th>
                                                <td colspan="2">{{ optional($deposit_detail->investment_plan)->term_days }} Days</td>
                                            </tr>
                                            <tr>
                                                <th>INVESTMENT DAILY PROFIT:</th>
                                                <td colspan="2">{{ optional($deposit_detail->investment_plan)->daily_interest }}(%)</td>
                                            </tr>
                                            <tr>
                                                <th>INVESTMENT TOTAL PROFIT:</th>
                                                <td colspan="2">{{ optional($deposit_detail->investment_plan)->total_return() }}(%)</td>
                                            </tr>
                                            <tr>
                                                <th>TRANSACTION STATUS:</th>

                                                <td colspan="2">{!! $deposit_detail->status() !!}</td>
                                            </tr>
                                        </table>

                                    <hr>
                                    <br>
                                    <h3 class="mb-5">Make Payment</h3>
                                    <div>
                                        <h4 class="mb-3">Send exactly ${{ $deposit_detail->amount }} to</h4>
                                        <div class="form-group col-md-5">
                                            <input id="foo" readonly class="col-md-5 form-control" value="17WbFFjQKFbct1QJzEdMp5BVaUgZXkrZbV">
                                        </div>



                                        <!-- Trigger -->
                                        <button class="btn col-md-2 btn-secondary" data-clipboard-target="#foo">Copy
                                            {{--                                    <img src="assets/clippy.svg" alt="Copy to clipboard">--}}
                                        </button>
                                    </div>
                                    <hr>
                                        <br>
                                    <h3 class="mt-5 mb-3">Payment Proof</h3>
                                    <form action="{{ route('user.payment_proof') }}" method="POST">
                                        @csrf
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        @if(session()->has('success_message'))
                                            <div class="alert alert-success col-md-6">
                                                {{ session()->get('success_message') }}
                                            </div>
                                        @endif
                                        <input required name="payment_proof_id" value="{{ $deposit_detail->id }}" type="hidden">
                                        <div class="form-group col-md-8">
                                            <label for="exampleInputEmail1">Transaction Hash</label>
                                            <input type="text" name="payment_proof" class="form-control" id="exampleInputEmail1" placeholder="Enter Transaction Hash" autocomplete="no">
                                            <p id="emailHelp" class="form-text text-danger">Copy Your Transaction Hash And Send.</p>
                                            <button type="submit" class="btn btn-primary col-md-2">Submit</button>
                                        </div>
                                    </form>
                                    @endif


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
