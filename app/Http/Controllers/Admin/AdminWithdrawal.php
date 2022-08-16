<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Welcome;
use App\Mail\WithdrawMail;
use App\User;
use App\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminWithdrawal extends Controller
{

    public function user_withdraw($id)
    {
        $user_details = User::findOrFail($id);
        $user_withdraw = User::with('withdraws')->findOrFail($id);
        return view('admin.user_withdrawal', compact('user_withdraw', 'user_details'));
    }

    public function withdrawal()
    {
        $withdrawal = Withdraw::all();
        return view('admin.withdrawal', compact('withdrawal'));
    }


    public function approve_withdraw($withdraw){
        $dep = Withdraw::findOrFail($withdraw);
        $user = User::findOrFail($dep->user_id);
        if ($dep->wallet_type == "acct_wallet"){
            $new_wallet = $user->acct_wallet - $dep->amount;
            $user->acct_wallet = $new_wallet;
            $data = ['user' => $user, 'withdraw' => $dep];
            Mail::to($dep->user->email)->send( new WithdrawMail($data));
            $user->save();
            $dep->status = 2;
            $dep->save();
        }elseif($dep->wallet_type == "bonus_wallet"){
            $new_wallet = $user->bonus_wallet - $dep->amount;
            $user->bonus_wallet = $new_wallet;
            $data = ['user' => $user, 'withdraw' => $dep];
            Mail::to($dep->user->email)->send( new WithdrawMail($data));
            $user->save();
            $dep->status = 2;
            $dep->save();
        }
        return redirect()->back();
    }

    public function reject_withdraw($id){
        $dep = Withdraw::findOrFail($id);
        $dep->status = 'canceled';
        $dep->save();
        return redirect()->back();
    }

    public function show_withdraw($id)
    {
        $withdraw = Withdraw::findOrFail($id);
        return view('admin.withdraw-details', compact('withdraw'));
    }

    public function users_withdraw()
    {
        $users_withdrawals = Withdraw::all();
        return view('admin2.withdrawal', compact('users_withdrawals'));
    }

    public function withdraw_single($id)
    {
        $withdraw = Withdraw::findOrFail($id);
        $user = User::findOrFail($withdraw->user_id);
        return view('admin.withdraw-details', compact('withdraw', 'user'));
    }

    public function delete_withdrawal($id)
    {
        $withdrawal = Withdraw::findOrFail($id);
        $withdrawal->delete();
        return redirect()->back();
    }
}
