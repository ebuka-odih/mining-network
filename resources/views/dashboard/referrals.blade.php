@extends('dashboard.layout.app2')
@section('content')

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row">
                <div class="card-body mb-5">
                    <!-- Nav tabs -->
                    <form>
                        <div class="form-group col-md-8 mt-4">
                            <label for="exampleInputEmail1">Referral Link</label>
                            <input  type="text" value="{{ auth()->user()->referral_link }}" class="form-control" id="ref" aria-describedby="emailHelp">
                            <a href="" data-clipboard-target="#ref" class="btn btn-primary">Copy</a>
                        </div>

                    </form>
                </div>

                <div class="col-xl-12">

                    <div class="table-responsive table-hover fs-14">
                        <h4>Deposit History</h4>
                        <div id="example5_wrapper" class="dataTables_wrapper no-footer"><table class="table display mb-4 dataTablesCard short-one card-table text-black dataTable no-footer" id="example5" role="grid" aria-describedby="example5_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 166px;">First Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Coin: activate to sort column ascending" style="width: 128px;">Last Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 84px;">Username</th>

                                </tr>
                                {{--                                    <th class="sorting_desc" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 129px;" aria-sort="descending">Action</th>--}}

                                </thead>
                                <tbody>


                                @foreach(auth()->user()->all_referrals() as $ref)
                                    <tr role="row" class="odd">
                                        <td>{{  $ref->first_name }}</td>
                                        <td>{{  $ref->last_name }}</td>
                                        <td>
                                            <span class="text-black font-w700">{{ $ref->username }}</span>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
        <script>
            new ClipboardJS('.btn');
        </script>
@endsection
