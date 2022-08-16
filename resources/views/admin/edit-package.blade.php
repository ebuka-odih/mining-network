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

                    <div class="col-xl-12">
                        <div class="card-box">
                            <h4 class="header-title mb-4">Recent Users</h4>

                            <div class="container">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{ route('admin.packages.update', $investment_plans->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group col-md-6 col-lg-12">
                                        <label for="inputName">Name</label>
                                        <input type="text" name="name" value="{{ old('name', optional($investment_plans)->name)}}" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputAmount">Min Amount</label>
                                            <input type="number" name="min_deposit" value="{{ old('min_deposit', optional($investment_plans)->min_deposit) }}" class="form-control" id="inputAmount" placeholder="Min Amount">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputMax">Max Amount</label>
                                            <input type="number" name="max_deposit" value="{{ old('max_deposit', optional($investment_plans)->max_deposit) }}" class="form-control" id="inputMax" placeholder="Max Amount">
                                        </div>
                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="inputTerm">Term Days</label>
                                            <input type="number" name="term_days" value="{{ old('term_days', optional($investment_plans)->term_days) }}" class="form-control" id="inputTerm" placeholder="Term Days">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputInterest"> Daily Interest</label>
                                            <input type="number" name="daily_interest" value="{{ old('daily_interest', optional($investment_plans)->daily_interest) }}" class="form-control" id="inputInterest" placeholder=" Daily Interest">

                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <button type="submit" class="btn btn-primary ">Update</button>
                                    </div>

                                </form>

                            </div>
                            <!-- table-responsive -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->

            </div>
            <!-- end container-fluid -->

        </div>
        <!-- end content -->





@endsection
