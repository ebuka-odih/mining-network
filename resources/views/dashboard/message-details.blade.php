@extends('dashboard.layout.app2')
@section('content')

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="email-left-box px-0 mb-3">
                                <div class="mail-list mt-4">
                                    <a href="email-inbox.html" class="list-group-item active"><i class="fa fa-inbox font-18 align-middle mr-2"></i> Inbox <span class="badge badge-primary badge-sm float-right">{{ $all_messages }}</span> </a>
                                    {{--                                    <a href="javascript:void()" class="list-group-item"><i class="fa fa-paper-plane font-18 align-middle mr-2"></i>Read</a> --}}

                                    <a href="{{ route('user.uread_messages') }}" class="list-group-item"><i class="mdi mdi-file-document-box font-18 align-middle mr-2"></i>Unread <span class="badge badge-danger text-white badge-sm float-right">{{ $unread_msg }}</span></a>
                                    <a href="{{ route('user.messages') }}" class="list-group-item"><i class="fa fa-star font-18 align-middle mr-2"></i>Read <span class="badge badge-primary text-white badge-sm float-right">{{ $read_msg }}</span>
                                    </a>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="right-box-padding">
                                        <div class="read-content">

                                            <div class="media mb-2 mt-3">
                                                <div class="media-body"><span class="pull-right">{{ date('M d, Y', strtotime($msg_details->created_at)) }}</span>
                                                    <h4 class="my-1 text-primary">{{ $msg_details->title }}</h4>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="form-group pt-3">
                                                <textarea name="write-email" id="write-email" cols="30" rows="5" class="form-control">{{ $msg_details->message }}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
@endsection
