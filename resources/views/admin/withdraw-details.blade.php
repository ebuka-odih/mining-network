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
                                    <div class="float-right">
                                        <h5 class="mt-0">Invoice # <br>
                                        </h5>
                                    </div>
                                </div>
                                <hr>

                                <!-- end row -->

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <h3>Withdrawal Details</h3>
                                            <table class="table mt-4">

                                                <tr>
                                                    <th colspan="2">User:</th>
                                                    <td>{{ optional($withdraw->user)->last_name.' '.optional($withdraw->user)->first_name }}</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="2">Date:</th>
                                                    <td>{{ date('M d, Y', strtotime($withdraw->created_at)) }}</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="2">Amount:</th>
                                                    <td>$@convert($withdraw->amount)</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="2">Wallet Type:</th>
                                                    <td>{{ $withdraw->wallet_type }}</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="2">Trans Hash:</th>
                                                    <td>{{ $withdraw->code_hash }}</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="2">Status:</th>
                                                    <td>{!! $withdraw->admin_status() !!}</td>
                                                </tr>

                                            </table>
{{--                                            <form action="">--}}
{{--                                                <div class="col-md-6 mb-3">--}}
{{--                                                    <label for="amount">Amount</label>--}}
{{--                                                    <input type="number" name="amount" class="form-control col-md-10">--}}
{{--                                                    <p>If you want to edit amount of the withdrawal enter the amount above</p>--}}
{{--                                                </div>--}}

{{--                                                <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                                            </form>--}}
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="hidden-print">
                                    <div class="float-right d-print-none">
                                        <a href="javascript:window.print()" class="btn btn-dark waves-effect waves-light"><i class="fa fa-print"></i></a>
{{--                                        <a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>--}}
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
