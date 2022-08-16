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



                    <!-- end col -->

                    <div class="col-xl-12">
                        <div class="card-box">
                            <h4 class="header-title mb-4">Recent Users</h4>

                            <div class="table-responsive">
                                <table class="table table-hover table-centered m-0">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Min Amount</th>
                                        <th>Max Amount</th>
                                        <th>Daily Profit (%)</th>
                                        <th>Term Days</th>
                                        <th>Total Return (%)</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($packages as $investment_plan)
                                        <tr>
                                            <td><strong>{{ $investment_plan->name }}</strong></td>
                                            <td><strong>${{ $investment_plan->min_deposit }}</strong></td>
                                            <td><strong>${{ $investment_plan->max_deposit }}</strong></td>
                                            <td><strong>{{ $investment_plan->daily_interest}}%</strong></td>
                                            <td><strong>{{ $investment_plan->term_days}} Day(s)</strong></td>
                                            <td><strong>{{ $investment_plan->total_return() }}%</strong></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-secondary btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                                                        <a class="dropdown-item" href="{{ route('admin.packages.edit', $investment_plan->id) }}">Edit</a>
                                                        <form method="POST" action="{{ route('admin.packages.destroy', $investment_plan->id) }}" accept-charset="UTF-8">
                                                            @csrf
                                                            @method('DELETE')
                                                            {{--                                                            <input type="hidden" name="_method" value="DELETE">--}}
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
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




@endsection


