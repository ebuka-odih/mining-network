@extends('dashboard.layout.app2')
@section('content')

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6">
                    <div class="card text-white bg-primary">
                        <div class="card-header">
                            <h5 class="card-title text-white">Main Balance</h5>
                        </div>
                        <div class="card-body mb-0">
                            <p class="card-text">&#163;{{ auth()->user()->acct_wallet  }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card text-white bg-primary">
                        <div class="card-header">
                            <h5 class="card-title text-white">Profit Balance</h5>
                        </div>
                        <div class="card-body mb-0">
                            <p class="card-text">&#163;{{ auth()->user()->bonus_wallet  }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-10">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h5 class="card-title">Withdrawal</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-danger">NOTE: After you make your withdrawal request and it's verified your requested amount will be sent to your wallet below
                            </p>
                            <br>
                            <form action="{{ route('user.user_withdraw') }}" method="POST">
                                @csrf


                                Your wallet address: <strong>{{ auth()->user()->btc_wallet }}</strong>
                                <hr>
                                <div class="container">
                                    @if(session()->has('declined_message'))
                                        <div class="alert alert-danger col-md-7 offset-lg-2 mb-3">
                                            {{ session()->get('declined_message') }}
                                        </div>
                                    @endif
                                    @if(session()->has('declined'))
                                        <div class="alert alert-danger col-md-7 offset-lg-2 mb-3">
                                            {{ session()->get('declined') }}
                                        </div>
                                    @endif
                                    @if(session()->has('reject'))
                                        <div class="alert alert-danger col-md-7 offset-lg-2 mb-3">
                                            {{ session()->get('reject') }}
                                        </div>
                                    @endif
                                    @if(session()->has('success_message'))
                                        <div class="alert alert-success col-md-7 offset-lg-2 mb-3">
                                            {{ session()->get('success_message') }}
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group col-md-10">

                                    <label>Account</label>
                                    <select class="form-control" name="wallet_type" id="account" required>
                                        <option value="acct_wallet">Account Balance ({{ auth()->user()->acct_wallet }})</option>
                                        <option value="bonus_wallet">Bonus Balance ({{ auth()->user()->bonus_wallet }})</option>
                                    </select>
                                    <small>Select the account you want to make withdrawal from</small>
                                </div>
                                <div class="form-group col-md-10">
                                    <label>Amount</label>
                                    <input type="number" class="form-control" id="amount" name="amount" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Send</button>
                            </form>


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
