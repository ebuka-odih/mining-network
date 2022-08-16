<?php

namespace App\Http\Controllers\Admin;

use App\Deposit;
use App\Http\Controllers\Controller;
use App\Mail\DepositMail;
use App\Packages;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminDeposit extends Controller
{
    public function all_deposits()
    {
        $deposits = Deposit::all();
        return view('admin.deposit', compact('deposits'));
    }

    public function show_user_deposit($id)
    {
        $user_details = User::findOrFail($id);
        $user_deposit = User::with('deposits')->findOrFail($id);
        return view('admin.user_deposits', compact('user_deposit', 'user_details'));
    }

    public function approve_deposit($deposit){
//        $user = User::where;
        $dep = Deposit::findOrFail($deposit);
        $user = User::findOrFail($dep->user_id);
        $investment_plan = Packages::findOrFail($dep->package_id);
        $new_wallet = $user->acct_wallet + $dep->amount;
        $user->acct_wallet = $new_wallet;
        $dep->approved_date = Carbon::now();
        $dep->approved_date->isoFormat('MMMM Do YYYY, h:mm:ss a');
        $dep->status = 1;
        $data = ['user' => $user, 'investment' => $investment_plan, 'deposit' => $dep];
        Mail::to($dep->user->email)->send( new DepositMail($data));
        $user->save();
        $dep->save();
        return redirect()->back();
    }

    public function show_deposit($id){
        $show_deposit = Deposit::findOrFail($id);
        return view('admin.deposit', compact('show_deposit'));
    }

    public function users_deposit()
    {
        $deposits = Deposit::orderBy('created_at', 'desc')->get();
        return view('admin.deposit', compact('deposits'));
    }

    public function reject_deposit($deposit_reject){
//        $user = User::where;
        $dep = Deposit::findOrFail($deposit_reject);
        $dep->status = 'pending';
        $dep->save();
        return redirect()->back();
    }

    public function deposit_view_single($id){
        $deposit = Deposit::findOrFail($id);
        $investment_plan = Packages::findOrFail($deposit->package_id);
        $expected_profit = $investment_plan->total_return()  * $deposit->amount;
        $profit =  number_format((float)$expected_profit / 100, 2, '.', '');
        return view('admin.deposit_details', compact('deposit', 'investment_plan', 'profit'));
    }


    public function delete_deposit($id)
    {
        $withdrawal = Deposit::findOrFail($id);
        $withdrawal->delete();
        return redirect()->back();
    }



}
