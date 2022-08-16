@extends('admin.layout.app')
@section('content')

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">

                            <h4 class="page-title">Invoice</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <!-- <div class="panel-heading">
                                    <h4>Invoice</h4>
                                </div> -->
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <h3 class="mt-0"><img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="" height="24" class="mr-1">
                                            {{ $deposit->user->name }}</h3>
                                    </div>
                                    {{--                                    <div class="float-right">--}}
                                    {{--                                        <h5 class="mt-0">Invoice # <br>--}}
                                    {{--                                            <strong>2016-04-23654789</strong>--}}
                                    {{--                                        </h5>--}}
                                    {{--                                    </div>--}}
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 col-lg-10">
                                        <div class="float-right mt-3">
                                            <p><strong>Order Date: </strong> {{ date('d/m/Y', strtotime($deposit->created_at)) }}</p>
                                            <p><strong>Approved Date: </strong> {{ date('d/m/Y', strtotime($deposit->approved_date)) }}</p>
                                            <p><strong>Order Status: </strong> <span>{!! $deposit->admin_status() !!}</span></p>
                                        </div>

                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            @if($deposit->status == 0)
                                                <table class="table mt-4">
                                                    <tr>
                                                        <th colspan="2">Invested Amount:</th>
                                                        <td>$@convert($deposit->amount)</td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">Package:</th>
                                                        <td>{{ $deposit->investment_plan->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">Interval:</th>
                                                        <td>{{ $deposit->investment_plan->term_days }} Day(s)</td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">Daily Interest:</th>
                                                        <td>{{ $deposit->investment_plan->daily_interest }}%</td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">Total Interest:</th>
                                                        <td>{{ optional($deposit->investment_plan)->total_return() }}(%)</td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">ROI:</th>
                                                        <td>${{ $deposit->expected_profit() }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">ROI + Amount:</th>
                                                        <td>$@convert($deposit->expected_profit() + $deposit->amount)</td>
                                                    </tr>

                                                    <tr>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">Payment Proof Screenshot:</th>
                                                        <td><img height="400" width="400" src="/storage/payment-proof/{{ $deposit->payment_proof }}" alt="Payment Proof"></td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">Payment Proof Transaction Hash:</th>
                                                        <td>{{ $deposit->payment_proof_hash }}</td>
                                                    </tr>
                                                </table>
                                                <a class="btn btn-primary" href="{{ route('admin.approve_deposit', $deposit->id) }}">Approve</a>
                                            @else
                                                <table class="table mt-4">
                                                    <tr>
                                                        <th colspan="2">Invested Amount:</th>
                                                        <td>$@convert($deposit->amount)</td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">Package:</th>
                                                        <td>{{ $deposit->investment_plan->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">Interval:</th>
                                                        <td>{{ $deposit->investment_plan->term_days }} Day(s)</td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">Daily Interest:</th>
                                                        <td>{{ $deposit->investment_plan->daily_interest }}%</td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">Total Interest:</th>
                                                        <td>{{ optional($deposit->investment_plan)->total_return() }}(%)</td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">ROI:</th>
                                                        <td>${{ $deposit->expected_profit() }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">ROI + Amount:</th>
                                                        <td>$@convert($deposit->expected_profit() + $deposit->amount)</td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">Start Date:</th>
                                                        <td>{{ date('d/m/Y', strtotime($deposit->approved_date)) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">End Date:</th>
                                                        <td>{{ date('d/m/Y', strtotime($deposit->ending_date())) }}</td>
                                                    </tr>

                                                    @if($deposit->completed == true)
                                                        <tr>
                                                            <th colspan="2">PLAN STATUS:</th>
                                                            <td ><span class='badge badge-success text text-uppercase'>Ended</span></td>
                                                        </tr>
                                                    @else
                                                        <tr>
                                                            <th colspan="2">RUNNING STATUS:</th>
                                                            <td><span class='badge badge-success text text-uppercase'>In progress</span></td>
                                                        </tr>
                                                    @endif

                                                    <tr>
                                                        <th colspan="3"></th>
                                                    </tr>

                                                </table>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @if($deposit->status == 1)
                                    <div class="row">
                                        <div class="col-md-6">
                                            {{--                                        <p class="text-right"><b>Progress:</b> Day {{ $deposit->progress() }}</p>--}}
                                            <hr>
                                            <h3 class="text-right"> Earned: $@convert($deposit->earning)</h3><br>
                                            <h3 class="text-right"> Earned + Capital: $@convert($deposit->total_earned)</h3>
                                        </div>
                                    </div>
                                @else
                                @endif
                                <hr>
                                <div class="hidden-print">
                                    <div class="float-right d-print-none">
                                        <a href="javascript:window.print()" class="btn btn-dark waves-effect waves-light"><i class="fa fa-print"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- end row -->

            </div>
            <!-- end container-fluid -->

        </div>
        <!-- end content -->



        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        2018 - 2020 &copy; Zircos theme by <a href="#">Coderthemes</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
@endsection
