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
                            <div class="email-right-box ml-0 ml-sm-4 ml-sm-0">
                                <div class="email-list mt-3">
                                    @forelse($messages as $msg)
                                    <div class="message">
                                        <div>

                                            <a href="{{ route('user.show_messages', $msg->id) }}" class="col-mail col-mail-2">
                                                <div class="date">{{ date('M d, Y', strtotime($msg->created_at)) }}</div>
                                                <div class="subject">{{ $msg->title }}</div>
                                            </a>
                                        </div>
                                    </div>
                                    @empty
                                        <h3 class="text text-center">No Message Found</h3>
                                    @endforelse
                                </div>
                                <!-- panel -->
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
