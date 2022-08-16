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
                                        <th>Email</th>
                                        <th>Amount </th>
                                        <th>Date </th>
                                        <th>Approved Date </th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($deposits as $deposit)
                                        <tr>
                                            <td><strong>{{ optional($deposit->user)->first_name }} {{ optional($deposit->user)->last_name }}</strong></td>
                                            <td><strong>{{ optional($deposit->user)->email }}</strong></td>
                                            <td><strong>${{ $deposit->amount }}</strong></td>
                                            <td><strong>{{ date('d/m/y', strtotime($deposit->created_at)) }}</strong></td>
                                            @if($deposit->status == 'pending')
                                                <td><strong>"dd/mm/yy"</strong></td>
                                            @else
                                                <td><strong>{{ date('d/m/y', strtotime($deposit->approved_date)) }}</strong></td>
                                            @endif
                                            {{--                                            <td><strong>{{ date('d/m/y', strtotime($users_deposit->approved_date() )) }}</strong></td>--}}
                                            <td><strong>{!! $deposit->admin_status() !!}</strong></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('admin.single_deposit.view', $deposit->id) }}" class="btn btn-secondary btn-sm">View</a>

                                                    <a href="#" class="btn btn-secondary btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                                                        @if($deposit->status == 'pending')
                                                            <a class="dropdown-item" href="{{ route('admin.approve_deposit', $deposit->id) }}">Approve</a>
                                                        @else
                                                        @endif
                                                        <form method="POST" action="{!! route('admin.delete_deposit', $deposit->id) !!}" accept-charset="UTF-8">
                                                            <input name="_method" value="DELETE" type="hidden">
                                                            {{ csrf_field() }}

                                                            <div class="btn-group btn-group-xs pull-right" role="group">
                                                                <button data-toggle="tooltip" data-placement="top" type="submit" class="btn  btn-sm btn-danger" onclick="return confirm(&quot;Delete Deposit?&quot;)">
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


