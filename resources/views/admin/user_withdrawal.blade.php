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
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-xl-3 col-md-4">
                                        <div class="text-center card-box shadow-none border border-secoundary">
                                            <div class="member-card">
                                                <a href="{{ route('admin.show-user', $user_details->id) }}">
                                                    <div class="avatar-xl member-thumb mb-3 mx-auto d-block">
                                                        <img src="{{ $user_details->profile_image }}" class="rounded-circle img-thumbnail" alt="profile-image">
                                                        {{--                                                <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>--}}
                                                        {!! $user_details->admin_status() !!}
                                                    </div>
                                                </a>

                                                <div class="">
                                                    <h5 class="font-18 mb-1">{{ $user_details->last_name." ".$user_details->first_name }}</h5>
                                                    <p class="text-muted mb-2">{{ $user_details->email }}</p>
                                                    <h5 class="font-18 mb-1">Account Bal: $@convert($user_details->acct_wallet)</h5>
                                                    <h5 class="font-18 mb-1">Bonus Bal: $@convert($user_details->bonus_wallet)</h5>
                                                </div>
                                                <div class="container">
                                                    @if(session()->has('verified'))
                                                        <div class="alert alert-success">
                                                            {{ session()->get('verified') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                {{--                                            <a href="{{ route('admin.user_message', $user_details->id) }}" class="btn btn-success btn-sm width-sm waves-effect mt-2 waves-light">Message</a>--}}
                                                <a href="{{ route('admin.user_message', $user_details->id) }}" class="btn btn-success btn-sm width-sm waves-effect mt-2 waves-light">Message</a>

                                                <a href="{{ route('admin.user_deposit', $user_details->id) }}" class="btn btn-primary btn-sm width-sm waves-effect mt-2 waves-light">Deposits</a>
                                                <a href="{{ route('admin.user_withdraw.show', $user_details->id) }}" class="btn btn-primary btn-sm width-sm waves-effect mt-2 waves-light">Withdrawal</a>

                                                @if( $user_details->status < 1)
                                                    <a href="{{ route('admin.verify_user', $user_details->id) }}" title="Verify this user" class="btn btn-success btn-sm width-sm waves-effect mt-2 waves-light">Verify</a>
                                                @else
                                                @endif


                                                <hr/>

                                                <div class="text-left">
                                                    {{--                                                <p class="text-muted font-13"><strong>Full Name :</strong> <span class="ml-4">{{ $user_details->name }}</span></p>--}}

                                                    {{--                                                <p class="text-muted font-13"><strong>Username :</strong><span class="ml-4">{{ $user_details->username }}</span></p>--}}

                                                    {{--                                                <p class="text-muted font-13"><strong>Email :</strong> <span class="ml-4">{{ $user_details->email }}</span></p>--}}

                                                    <p class="text-muted font-13"><strong>Joined At :</strong> <span class="ml-4">{{ date('d/m/Y', strtotime($user_details->created_at)) }}</span></p>
                                                </div>


                                            </div>

                                        </div>
                                        <!-- end card-box -->

                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-9 col-md-8">
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Approved Date</th>
                                                <th>User</th>
                                                <th>Email</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($user_withdraw->withdraws as $withdraw)
                                                <tr>
                                                    <td><strong>{{ date('d/m/y h:i A', strtotime($withdraw->created_at)) }}</strong></td>
                                                    <td><strong>{{ date('d/m/y h:i A', strtotime($withdraw->approved_date ? : '--/--/--/')) }}</strong></td>
                                                    <td><strong>{{ optional($withdraw->user)->last_name." ".optional($withdraw->user)->first_name }}</strong></td>
                                                    <td><strong>{{ $withdraw->user->email }}</strong></td>
                                                    <td><strong>$@convert($withdraw->amount)</strong></td>
                                                    <td><strong>{!! $withdraw->status() !!}</strong></td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="{{ route('admin.single_withdraw.view', $withdraw->id) }}" class="btn btn-secondary btn-sm">View</a>
                                                            @if($withdraw->status == 'pending')
                                                                <a href="#" class="btn btn-secondary btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                                </a>

                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                                                                    <a class="dropdown-item" href="{{ route('admin.accept_withdraw', $withdraw->id) }}">Approve</a>
                                                                    <a class="dropdown-item" href="{{ route('admin.decline_withdraw', $withdraw->id) }}">Declined</a>
                                                                </div>
                                                            @else
                                                            @endif
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- end col -->

                                </div>
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



        <!-- Footer Start -->


@endsection


