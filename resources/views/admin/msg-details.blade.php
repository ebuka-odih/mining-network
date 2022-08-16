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
                            <h4 class="page-title">{{ $user_details->name }} Messages</h4>
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
                                                <h5 class="font-18 mb-1">{{ $user_details->name }}</h5>
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
                                                <p class="text-muted font-13"><strong>Full Name :</strong> <span class="ml-4">{{ $user_details->name }}</span></p>

                                                <p class="text-muted font-13"><strong>Username :</strong><span class="ml-4">{{ $user_details->username }}</span></p>

                                                <p class="text-muted font-13"><strong>Email :</strong> <span class="ml-4">{{ $user_details->email }}</span></p>

                                                <p class="text-muted font-13"><strong>Joined At :</strong> <span class="ml-4">{{ date('d/m/Y', strtotime($user_details->created_at)) }}</span></p>
                                            </div>


                                        </div>

                                    </div>
                                    <!-- end card-box -->

                                </div>
                                <!-- end col -->

                                <div class="col-xl-9 col-md-8">

                                    <h4 class="text text-center">Message Details</h4>
                                    <form class="form-horizontal">

                                        <div class="form-group row">
                                            <label class="col-md-2 control-label">Title</label>
                                            <div class="col-md-10">
                                                <input type="text" name="title"  readonly class="form-control" value="{{ old('title', optional($msg_details)->title) }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-2 control-label">Message Body</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" name="message" rows="5" readonly>{{ old('message', optional($msg_details)->message) }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 control-label">Image</label>
                                            <div class="">
                                                <img height="250" height="250" src="{{ asset('message/images/'.$msg_details->image) }}" alt="Message Image" class="col-md-6 col-lg-6 img-responsive">
                                            </div>
                                        </div>

                                    </form>
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
