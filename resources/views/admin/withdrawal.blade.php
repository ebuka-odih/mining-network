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

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <h4 class="header-title"><b>Withdrawal of All Users</b></h4>

                                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Approved Date</th>
                                        <th>Status</th>
                                        <th>User Wallet</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($withdrawal as $users_withdrawal)
                                        <tr>
                                            <td><strong>{{ optional($users_withdrawal->user)->last_name }} {{ optional($users_withdrawal->user)->first_name }}</strong></td>
                                            <td><strong>{{ $users_withdrawal->amount }}</strong></td>
                                            <td><strong>{{ date('d/m/y', strtotime($users_withdrawal->created_at)) }}</strong></td>
                                            <td><strong>{{ date('d/m/y', strtotime($users_withdrawal->updated_at)) }}</strong></td>
                                            <td><strong>{!! $users_withdrawal->admin_status() !!}</strong></td>
                                            <td><strong>{!! $users_withdrawal->admin_wallet_type() !!}</strong></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('admin.single_withdraw.view', $users_withdrawal->id) }}" class="btn btn-secondary btn-sm">View</a>


                                                    <a href="#" class="btn btn-secondary btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                                                        @if($users_withdrawal->status == 'pending')
                                                            <a class="dropdown-item" href="{{ route('admin.approve_withdraw', $users_withdrawal->id) }}">Approve</a>
                                                            <a class="dropdown-item" href="{{ route('admin.reject_withdraw', $users_withdrawal->id) }}">Reject</a>
                                                        @elseif($users_withdrawal->status == 'approved')
                                                        @else
                                                            <a class="dropdown-item" href="{{ route('admin.approve_withdraw', $users_withdrawal->id) }}">Approve</a>
                                                        @endif
                                                        <form method="POST" action="{!! route('admin.delete_withdrawal', $users_withdrawal->id) !!}" accept-charset="UTF-8">
                                                            <input name="_method" value="DELETE" type="hidden">
                                                            {{ csrf_field() }}

                                                            <div class="btn-group btn-group-xs pull-right" role="group">
                                                                <button data-toggle="tooltip" data-placement="top" type="submit" class="btn  btn-sm btn-danger" onclick="return confirm(&quot;Delete Withdrawal?&quot;)">
                                                                    Delete
                                                                </button>

                                                            </div>

                                                        </form>
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->

            </div>
            <!-- end container-fluid -->

        </div>
        <!-- end content -->



@endsection


