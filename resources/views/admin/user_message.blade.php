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
                            <h4 class="page-title">{{ $user_details->last_name." ".$user_details->first_name }} Messages</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

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
                                            </div>
                                            <div class="container">
                                                @if(session()->has('verified'))
                                                    <div class="alert alert-success">
                                                        {{ session()->get('verified') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <a href="{{ route('admin.user_message', $user_details->id) }}" class="btn btn-success btn-sm width-sm waves-effect mt-2 waves-light">Message</a>
                                            <a href="{{ route('admin.user_deposit', $user_details->id) }}" class="btn btn-primary btn-sm width-sm waves-effect mt-2 waves-light">Deposits</a>
                                            <a href="{{ route('admin.user_withdraw.show', $user_details->id) }}" class="btn btn-primary btn-sm width-sm waves-effect mt-2 waves-light">Withdrawal</a>

                                            @if( $user_details->status < 1)
                                                <a href="{{ route('admin.verify_user', $user_details->id) }}" title="Verify this user" class="btn btn-success btn-sm width-sm waves-effect mt-2 waves-light">Verify</a>
                                            @else
                                            @endif
                                            <hr/>

                                            <div class="text-left">
                                              <p class="text-muted font-13"><strong>Joined At :</strong> <span class="ml-4">{{ date('d/m/Y', strtotime($user_details->created_at)) }}</span></p>
                                            </div>


                                        </div>

                                    </div>
                                    <!-- end card-box -->

                                </div>
                                <!-- end col -->

                                <div class="col-xl-9 col-md-8">
                                    <a href="{{ route('admin.msg_create', $user_details->id) }}" class="btn btn-primary btn-sm mb-5">Create Message</a>
                                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Title</th>
                                            <th>Message</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($user_msg->notifyUser as $message)
                                            <tr>
                                                <td><strong>{{ date('d/m/y h:i A', strtotime($message->created_at)) }}</strong></td>
                                                <td><strong class=" text d-inline-block text-truncate" style="max-width: 150px;">{{ $message->title}}</strong></td>
                                                <td class="text d-inline-block text-truncate" style="max-width: 150px;">{{ $message->message }}</td>
                                                <td>{!! $message->status() !!}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ route('admin.msg_show', $message->id) }}" class="btn btn-secondary btn-sm">View</a>
                                                        <form method="POST" action="{!! route('admin.delete_msg', $message->id) !!}" accept-charset="UTF-8">
                                                            <input name="_method" value="DELETE" type="hidden">
                                                            {{ csrf_field() }}

                                                            <div class="btn-group btn-group-xs pull-right" role="group">
                                                                <button data-toggle="tooltip" data-placement="top" type="submit" class="btn  btn-sm btn-danger" onclick="return confirm(&quot;Delete Message?&quot;)">
                                                                    <span class="fa flaticon-delete" aria-hidden="true"></span>Delete
                                                                </button>

                                                            </div>

                                                        </form>
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
                <!-- End row -->

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
