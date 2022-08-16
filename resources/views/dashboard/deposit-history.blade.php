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
                    <div class="default-tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link"  href="{{ route('user.withdrawal') }}"><i class="la la-arrow-alt-circle-up mr-2"></i> Withdrawal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('user.deposit_history') }}"><i class="la la-arrow-alt-circle-down mr-2"></i> Deposits</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-12">

                    <div class="table-responsive table-hover fs-14">
                        <h4>Deposit History</h4>
                        <div id="example5_wrapper" class="dataTables_wrapper no-footer"><table class="table display mb-4 dataTablesCard short-one card-table text-black dataTable no-footer" id="example5" role="grid" aria-describedby="example5_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 60px;">
                                        <div class="checkbox mr-0 align-self-center">
                                            <div class="custom-control custom-checkbox ">
                                                <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                                                <label class="custom-control-label" for="checkAll"></label>
                                            </div>
                                        </div>
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 166px;">Date</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Coin: activate to sort column ascending" style="width: 128px;">Coin</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 84px;">Amount</th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 129px;" aria-sort="descending">Status</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Transaction ID: activate to sort column ascending" style="width: 174px;">Action</th>

                                </tr>
{{--                                    <th class="sorting_desc" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 129px;" aria-sort="descending">Action</th>--}}

                                </thead>
                                <tbody>


                                @foreach($deposits as $with)
                                    <tr role="row" class="odd">
                                        <td class="pr-0">
                                                <span class="bg-danger ic-icon">
												<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20.7529 19.1563L7.5703 5.97367C7.00891 5.41228 6.09876 5.41228 5.53737 5.97367C4.97598 6.53505 4.97598 7.44521 5.53737 8.0066L18.72 21.1892L15.2913 21.1809L15.2912 21.1809C14.4973 21.179 13.8522 21.8211 13.8503 22.615C13.8484 23.4091 14.4907 24.054 15.2844 24.056L15.2856 23.556L15.2844 24.056L22.1954 24.0727L22.2028 24.0727L22.2051 24.0726C22.9947 24.0692 23.6329 23.4284 23.6363 22.6414L23.6363 22.6391L23.6363 22.6317L23.6196 15.7207L23.6196 15.7207C23.6177 14.9268 22.9727 14.2847 22.1787 14.2866C21.3847 14.2885 20.7427 14.9336 20.7446 15.7275L20.7446 15.7275L20.7529 19.1563Z" fill="white" stroke="white"></path>
												</svg>
											</span>
                                        </td>
                                        <td>{{ date('M d, Y', strtotime($with->created_at )) }}</td>
                                        <td class="wspace-no">
                                            <svg class="mr-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16 9.50011C15.9993 8.67201 15.328 8.00092 14.5001 8H10V11H14.5001C15.328 10.9993 15.9993 10.328 16 9.50011Z" fill="#FFAB2D"></path>
                                                <path d="M10 16H14.5001C15.3285 16 16 15.3285 16 14.5001C16 13.6715 15.3285 13 14.5001 13H10V16Z" fill="#FFAB2D"></path>
                                                <path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM18.0001 14.5713C17.9978 16.4641 16.4641 17.9978 14.5716 17.9999V18.8571C14.5716 19.3305 14.1876 19.7143 13.7144 19.7143C13.2409 19.7143 12.8572 19.3305 12.8572 18.8571V17.9999H11.1431V18.8571C11.1431 19.3305 10.7591 19.7143 10.2859 19.7143C9.8124 19.7143 9.42866 19.3305 9.42866 18.8571V17.9999H6.85733C6.38387 17.9999 6.00013 17.6161 6.00013 17.1429C6.00013 16.6695 6.38387 16.2857 6.85733 16.2857H7.71427V7.71427H6.85733C6.38387 7.71427 6.00013 7.33053 6.00013 6.85707C6.00013 6.38361 6.38387 5.99987 6.85733 5.99987H9.42866V5.14293C9.42866 4.66947 9.8124 4.28573 10.2859 4.28573C10.7593 4.28573 11.1431 4.66947 11.1431 5.14293V5.99987H12.8572V5.14293C12.8572 4.66947 13.2409 4.28573 13.7144 4.28573C14.1879 4.28573 14.5716 4.66947 14.5716 5.14293V5.99987C16.4571 5.99202 17.992 7.5139 18.0001 9.39937C18.0043 10.3978 17.5714 11.3481 16.8152 12C17.5643 12.6445 17.9967 13.5828 18.0001 14.5713Z" fill="#FFAB2D"></path>
                                            </svg>

                                        </td>
                                        <td>
                                            <span class="text-black font-w700">&#163;{{ $with->amount }}</span>
                                        </td>
                                        <td >
                                            <a href="javascript:void(0);" class="btn-link text-light">{!! $with->status() !!}</a>
                                        </td>
                                        <td >
                                            <a href="{{ route('user.transaction', $with->id) }}" class="btn-">View</a>
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
@endsection
