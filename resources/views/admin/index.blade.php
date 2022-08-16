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
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Zircos</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard </a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-6 col-xl-4">
                            <div class="card widget-box-three">
                                <div class="card-body">
                                    <div class="float-right mt-2">
                                        <i class="mdi mdi-chart-areaspline display-3 m-0"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class="m-0 text-uppercase font-weight-bold text-muted" title="Statistics">Total Deposited</p>
                                        <h2><span data-plugin="">$@convert($total_deposit)</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-lg-6 col-xl-4">
                            <div class="card widget-box-three">
                                <div class="card-body">
                                    <div class="float-right mt-2">
                                        <i class="mdi mdi-account-convert display-3 m-0"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class="m-0 text-uppercase font-weight-bold text-muted" title="User This Month">Total Withdraw</p>
                                        <h2><span data-plugin="">$@convert($total_withdraw) </span></h2>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-lg-6 col-xl-4">
                            <div class="card widget-box-three">
                                <div class="card-body">
                                    <div class="float-right mt-2">
                                        <i class="mdi mdi-layers display-3 m-0"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <p class="m-0 text-uppercase font-weight-bold text-muted" title="User Today">Total User</p>
                                        <h2><span data-plugin="counterup">{{ $users_count }}</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <!-- end row -->

                    <div class="row">

                        <!-- end col -->

                        <div class="col-xl-12">
                            <div class="card-box">
                                <h4 class="header-title mb-4">Recent Users</h4>

                                <div class="table-responsive">
                                    <table class="table table-hover table-centered m-0">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>
                                                    <h5 class="m-0 font-15">{{ $user->last_name." ". $user->first_name }}</h5>
                                                </td>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ date('M d Y', strtotime($user->created_at)) }}</td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>

                                </div>
                                <!-- table-responsive -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

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




@endsection
