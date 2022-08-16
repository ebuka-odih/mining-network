
@extends('admin.layout.app')
@section('content')
    <!-- Table datatable css -->




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
                            <h4 class="page-title">All Deposits</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="text text-center text-danger">You can make changes here that will reflect on the user dashboard</h3>
{{--                        <h4 class="text text-center text-danger">You can change your bitcoin, ethereum, litcoin and bitcoin cash wallet here</h4>--}}
                        <div class="card-box table-responsive">
                            <h4 class="header-title"><b>Deposit of All Users</b></h4>

                            <table id="" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th class="wd-30p"> Name</th>
                                    <th class="wd-60p">Action</th>
                                    <th class="wd-60p">Value</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-capitalize">Bitcoin Wallet</td>
                                    <td>
                                        <form action="{{ route('admin.setting.store') }}" method="POST">
                                            @csrf
                                            <input class="form-control" name="wallet_id" value="{{ setting('wallet_id') }}" /><br>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
{{--                                        <form action="" method="POST">--}}
{{--                                            @csrf--}}
{{--                                            <input type="file" class="form-control">--}}
{{--                                        </form>--}}
                                    </td>
                                    <td>{{ setting('wallet_id') }}</td>
                                </tr>
                                <tr>
                                    <td class="text-capitalize">Site Name</td>
                                    <td>
                                        <form action="{{ route('admin.setting.store') }}" method="POST">
                                            @csrf
                                            <input class="form-control" name="site_name" value="{{ setting('site_name') }}" /><br>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </td>
                                    <td>{{ setting('site_name') }}</td>
                                </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>
                    <hr>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">Change your password</div>

                                    <div class="card-body">
                                        <form method="POST" action="{{ route('admin.change.password') }}">
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
                                            @if(session()->has('message'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('message') }}
                                                </div>
                                            @endif

                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>

                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>

                                                <div class="col-md-6">
                                                    <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>

                                                <div class="col-md-6">
                                                    <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Update Password
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
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




    <script>
        $(document).ready( function () {
            $('#datatable').DataTable();
        } );

    </script>
@endsection
