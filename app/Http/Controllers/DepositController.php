<?php

namespace App\Http\Controllers;
use App\Packages;
use App\Deposit;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DepositController extends Controller
{

    public function deposit_history()
    {
        $deposits = Deposit::whereUserId(auth()->id())->get();
        return view('dashboard.deposit-history', compact('deposits'));
    }

    public function deposit_plan()
    {
        $plans = Packages::all();
        return view('dashboard.deposit2', compact('plans'));
    }

    public function make_deposit(Request $request)
    {
//        return $request->all();
//        $invest_plan = Packages::findOrFail($request->package_id);
        $package_id = $request->package_id;
        $invest_plan = Packages::findOrFail($package_id);
        if ($request->amount < $invest_plan->min_deposit || $request->amount > $invest_plan->max_deposit){
            return redirect()->back()->with('disapproved', "The amount you entered is not within the plan limit, please review!");
        }else {
            $deposit = new Deposit();
            $deposit->amount = $request->input('amount');
            $deposit->hash_code = (string)Str::uuid();
            $deposit->user_id = auth()->id();
            $deposit->package_id = $invest_plan->id;
            $deposit->save();
            return redirect()->route('user.transaction', $deposit->id);
        }
    }

    public function transaction($id){
        $deposit_detail = Deposit::whereUserId(auth()->id())->findOrFail($id);
        $investment_plan = Packages::findOrFail($deposit_detail->package_id);
        $user = User::findOrFail($deposit_detail->user_id);
        $expected_profit = $investment_plan->total_return()  * $deposit_detail->amount;
        $profit =  number_format((float)$expected_profit / 100, 2, '.', '');

        $expected_percent = $investment_plan->daily_interest  * $deposit_detail->amount;
        $profit_percent =  number_format((float)$expected_percent / 100, 2, '.', '');

        $days = 1;

        $current_date = Carbon::now();
        $d_approved = Carbon::parse($deposit_detail->approved_date);
        $d_ended = Carbon::parse($deposit_detail->end_date);

        if($d_approved->diffInDays($current_date) < $investment_plan->term_days){
            $days = $d_approved->diffInDays($current_date);
        }else {
            $days =  $investment_plan->term_days;
        }

        $i = 1;
        while ($i < $days){
            $i++;
        }


        return view('dashboard.deposit-details', compact('deposit_detail', 'investment_plan', 'profit', 'days', 'i'));
    }


    public function process_deposit(Request $request)
    {
        $id = $request->payment_proof_id;
        $payment_image = Deposit::findOrfail($id);
        $payment_image->update(['payment_proof_hash' => $request->payment_proof_hash]);
        return redirect()->back()->with('success_message', 'Submitted, Proof of Payment awaiting confirmation');

    }

    public function process_deposit2(Request $request)
    {
        $id = $request->payment_proof_id;
        if ($request->hasFile('payment_proof')) {
            $fileNameWithExt = $request->file('payment_proof')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('payment_proof')->getClientOriginalExtension();
            // file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //store the image
            $path = $request->file('payment_proof')->storeAs('public/payment-proof/', $fileNameToStore);
        }else {
            $fileNameToStore = ' Noimage';
        }

        $payment_image = Deposit::findOrfail($id);
        if($fileNameToStore){
            $payment_image->update(['payment_proof' => $fileNameToStore]);
        }
        return redirect()->back()->with('success_message', 'Submitted, Proof of Payment awaiting confirmation');

    }

}
