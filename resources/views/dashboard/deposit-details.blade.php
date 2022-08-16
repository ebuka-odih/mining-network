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

                    <div class="card mt-3">
                        <div class="card-header"> <strong>TRANSACTION DETAILS</strong>
                            </div>
                        <div class="card-body">

                            <div class="row">
                                @if( $deposit_detail->status == 1)
                                <div class="col-lg-12 col-sm-5 ml-auto">
                                    <table class="table table-clear">
                                        <tbody>
                                        <tr>
                                            <td class="left"><strong>PLAN NAME</strong></td>
                                            <td class="right">{{ optional($deposit_detail->investment_plan)->name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="left"><strong>PLAN AMOUNT</strong></td>
                                            <td class="right">{{ $deposit_detail->amount }}</td>
                                        </tr>
                                        <tr>
                                            <td class="left"><strong>ROI</strong></td>
                                            <td class="right">&#163; @convert($profit)</td>
                                        </tr>
                                        <tr>
                                            <td class="left"><strong>ROI (WITH CAPITAL)</strong></td>
                                            <td class="right">&#163;@convert($profit + $deposit_detail->amount)</td>
                                        </tr>
                                        <tr>
                                            <th class="left">START DATE:</th>
                                            <td class="right">{{ date('d-M-y', strtotime($deposit_detail->approved_date)) }}</td>
                                        </tr>
                                        <tr>
                                            <th class="left">ENDING DATE:</th>
                                            <td class="right">{{ date('d-M-y', strtotime($deposit_detail->end_date)) }}</td>
                                        </tr>
                                        <tr>
                                            <th class="left">INTERVAL:</th>
                                            <td class="right">{{ optional($deposit_detail->investment_plan)->term_days }} Days</td>
                                        </tr>
                                        <tr>
                                            <th>DAILY PROFIT:</th>
                                            <td colspan="2">{{ optional($deposit_detail->investment_plan)->daily_interest }}(%)</td>
                                        </tr>
                                        <tr>
                                            <th>TOTAL PROFIT (%):</th>
                                            <td colspan="2">{{ optional($deposit_detail->investment_plan)->total_return() }}(%)</td>
                                        </tr>
                                        <tr>
                                            <th class="left">STATUS:</th>
                                            <td class="right">{!! $deposit_detail->status() !!}</td>
                                        </tr>

                                        <tr>
                                            <td colspan=3>&nbsp;</td>
                                        </tr>
                                        @if($deposit_detail->completed == true)
                                            <tr>
                                                <th class="left">PLAN STATUS:</th>
                                                <td class="right"><span class='badge badge-success text text-uppercase'>Ended</span></td>
                                            </tr>
                                        @else
                                            <tr>
                                                <th>RUNNING STATUS:</th>
                                                <td><span class='badge badge-success text text-uppercase'>In progress</span></td>
                                            </tr>
                                        @endif

                                        <tr>
                                            <th class="left">PROFIT EARNED:</th>
                                            <td class="right"><strong>&#163;{{  $deposit_detail->earning }} (without capital)</strong><br>
                                                <strong>{{ auth()->user()->btc_value( $deposit_detail->total_earned) }} BTC</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="left"><strong>TOTAL EARNED:</strong></td>
                                            <td class="right"><strong>&#163;{{  $deposit_detail->total_earned }} (plus capital)</strong><br>
                                                <strong>{{ auth()->user()->btc_value( $deposit_detail->total_earned) }} BTC</strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                @else
                                    <table class="table table-clear">
                                        <tbody>
                                        <tr>
                                            <td class="left"><strong>PLAN NAME</strong></td>
                                            <td class="right">{{ optional($deposit_detail->investment_plan)->name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="left"><strong>PLAN AMOUNT</strong></td>
                                            <td class="right">{{ $deposit_detail->amount }}</td>
                                        </tr>
                                        <tr>
                                            <td class="left"><strong>ROI</strong></td>
                                            <td class="right">&#163; @convert($profit)</td>
                                        </tr>
                                        <tr>
                                            <td class="left"><strong>ROI (WITH CAPITAL)</strong></td>
                                            <td class="right">&#163;@convert($profit + $deposit_detail->amount)</td>
                                        </tr>
                                        <tr>
                                            <th class="left">INTERVAL:</th>
                                            <td class="right">{{ optional($deposit_detail->investment_plan)->term_days }} Days</td>
                                        </tr>
                                        <tr>
                                            <th>DAILY PROFIT:</th>
                                            <td colspan="2">{{ optional($deposit_detail->investment_plan)->daily_interest }}(%)</td>
                                        </tr>
                                        <tr>
                                            <th>TOTAL PROFIT (%):</th>
                                            <td colspan="2">{{ optional($deposit_detail->investment_plan)->total_return() }}(%)</td>
                                        </tr>
                                        <tr>
                                            <th class="left">STATUS:</th>
                                            <td class="right">{!! $deposit_detail->status() !!}</td>
                                        </tr>

                                        <tr>
                                            <td colspan=3>&nbsp;</td>
                                        </tr>


                                        </tbody>
                                    </table>
                                    <div class="col-md-10">
                                        <h4 class="text text-center text-danger mb-5">Please Make Payment To The Bitcoin Address Below</h4>
                                    @if ($errors->any())
                                            <div style="margin-bottom: 5px" class="container">
                                                <div class="alert-message">
                                                    <span><strong style="color: white">Some Errors Prevented Your Form From Submitting</strong></span>
                                                    @foreach ($errors->all() as $error)
                                                        <li style="color: lightcoral">{{ $error }}</li>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                        <div class="col-md-8 mb-5">
                                            <h3 class="col-md-12">SEND £{{ $deposit_detail->amount }}( {{ auth()->user()->btc_value($deposit_detail->amount) }} BTC) TO BITCOIN WALLET BELOW:</h3>
                                            <form action="">
                                                <div class="form-group">
                                                    {{--                                <input class="form-control col-md-12 col-lg-6" id="btc" value="3BknrQv7HQQqqjeP6LiBuYFRWxyLrfJrDm">--}}
                                                    <input class="form-control col-md-12 col-lg-10" id="btc" value="{{ setting('wallet_id') }}">
                                                    <button  class="btn btn-sm btn-primary" data-clipboard-target="#btc">
{{--                                                        <span class="flaticon-381-file"></span>--}}
                                                        <p>Copy Address</p>
                                                    </button>
{{--                                                    <h4>OR SCAN BARCODE</h4>--}}
{{--                                                    <img height="250" width="250" src="{{ asset('images/btc2.png') }}" alt="Bitcoin Barcode">--}}
                                                </div>
                                            </form>
                                        </div>
                                          <br>
                                    <h3 class="text text-center mb-5">Note: if you have made your deposit and your transaction is still pending is likely that it is still under review</h3>

                                            <h3 class="mb-5">PAYMENT PROOF</h3>
                                            @if(Session::has('success_message'))
                                                <div class="alert alert-success" role="alert">Proof of Payment awaiting confirmation, If you made a mistake refresh the page then submit again</div>

                                                  @else
                                                    <h3>UPLOAD TRANSACTION HASH</h3>
                                                    <form method="POST" action="{{ route('user.payment_proof2') }}" >
                                                        @csrf
                                                        <input required name="payment_proof_id" value="{{ $deposit_detail->id }}" style="width: 380px; max-width: 100%;" type="hidden">
                                                        <input required name="payment_proof" class="form-control form-control-lg col-md-10 "  type="text">
                                                        @error('payment_proof')
                                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                        {{--                         <input style="width: 200px; margin-top: 18px" type="submit" value="Upload Transaction Proof">--}}
                                                        <button type="submit" class="btn btn-primary mt-3">Upload Proof</button>
                                                    </form>
                                                <br>
                                                <h3>OR</h3>
                                                <br>
                                                <h3>UPLOAD SCREENSHOT OF PAYMENT PROOF</h3>
                                                <form method="POST" action="{{ route('user.payment_proof') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input required name="payment_proof_id" value="{{ $deposit_detail->id }}" style="width: 380px; max-width: 100%;" type="hidden">
                                                    <input required name="payment_proof" class="form-control form-control-lg col-md-10 " accept=".jpg, .png, .jpeg" type="file">
                                                    @error('payment_proof')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    {{--                         <input style="width: 200px; margin-top: 18px" type="submit" value="Upload Transaction Proof">--}}
                                                    <button type="submit" class="btn btn-primary mt-3">Upload Proof</button>
                                                </form>
                                            @endif
                                        </div>


                                @endif
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
    <script>
        new ClipboardJS('.btn');
    </script>
@endsection
