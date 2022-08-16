@extends('dashboard.layout.app2')
@section('content')

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">

                <div class="col-xl-10">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h5 class="card-title">Deposit</h5>
                        </div>
                        <div class="card-body">
                            <p>
                                To make a new deposit, please select your preferred plan from the list below. You can use the Calculate your profit feature to calculate your return on investment and how much you'd earn at the end of the plan period.
                            </p>
                            <br>

                            <form action="{{ route('user.deposit.store') }}" method="POST">
                                @csrf
                                @if(session()->has('disapproved'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('disapproved') }}
                                    </div>
                                @endif

                                <hr>

                                <div class="form-group col-md-10">

                                    <label for="">Select a Plan:</label>
                                    <select name="package_id" id="package" class="form-control" required>
                                        <option value=''>Choose a Plan</option>
                                        @foreach($plans as $plan)
                                            <option value='{{ $plan->id }}'>{{ $plan->name }} ({{ "£".$plan->min_deposit." - £".$plan->max_deposit }}) -  {{ $plan->total_return()."%" }} After {{ $plan->term_days }} Day(s)</option>
                                        @endforeach
                                    </select>
                                    <small>Select the plan you want to buy</small>
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
