<?php

namespace App\Http\Controllers\Admin;

use App\Deposit;
use App\Http\Controllers\Controller;
use App\Mail\Welcome;
use App\Mail\FundMail;
use App\Mail\BonusMail;
use App\User;
use App\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function dashboard()
    {
        $total_withdraw = Withdraw::select('amount')->sum('amount');
//        $total_plan = InvestmentPlan::select('id')->sum('id');
        $total_deposit = Deposit::select('amount')->sum('amount');
        $users_count = User::where('user_role', '=', 'client')->count();
        $users = User::where('user_role', '=', 0)->paginate(10);
        return view('admin.index', compact('users', 'total_withdraw', 'total_deposit', 'users_count'));

    }

    public function suspendUser($id){
        if (auth()->user()->user_role == 'admin'){
            $user = User::findOrFail($id);
            $user->status = 0;
            $user->save();
        }
        return redirect()->back();
    }

    public function verify_user($id){
        if(auth()->user()->user_role == 1){
            $user = User::findOrFail($id);
            $user->status = 1;
            $data = ['user' => $user];
            Mail::to($user->email)->send(new Welcome($data));
            $user->save();
        }
        return redirect()->back()->with('verified', $user->last_name. " is now verified");
    }


    public function listUsers(){
        $users = User::where('user_role', '!=', 1)->latest()->get();
        return view('admin.users', compact('users'));
    }

    public function show($id){
        $user_details = User::findOrFail($id);
        return view('admin.user_details', compact('user_details'));
    }


    public function delete_user($id){
        $delete_user = User::findOrFail($id);
        $delete_user->delete();
        return redirect()->back();
    }

    public function fund_account(Request $request, $id)
    {
        $add_amt = $request->input('amount');
        $user = User::findOrFail($id);
        $user->acct_wallet += $add_amt;
        $data = ['add_amt' => $add_amt, 'user' => $user];
        Mail::to($user->email)->send(new FundMail($data));
        $user->save();
        return redirect()->back()->with('fund_success', 'Fund Sent successfully');
    }
    public function defund_acct(Request $request, $id)
    {
        $add_bonus = $request->input('defund');
        $user = User::findOrFail($id);
        $user->acct_wallet -= $add_bonus;
        $user->save();
//        $user->update(['acct_wallet' => $request->input('acct_wallet')]);
        return redirect()->back()->with('defund', 'Defund successfully');
    }

    public function bonus(Request $request, $id)
    {
        $add_bonus = $request->input('bonus');
        $user = User::findOrFail($id);
        $user->bonus_wallet += $add_bonus;
        $data = ['user' => $user, 'add_bonus' => $add_bonus];
        Mail::to($user->email)->send(new BonusMail($data));
        $user->save();
//        $user->update(['acct_wallet' => $request->input('acct_wallet')]);
        return redirect()->back()->with('bonus_message', 'Bonus Sent successfully');
    }

    public function defund_profit(Request $request, $id)
    {
        $add_bonus = $request->input('defund_profit');
        $user = User::findOrFail($id);
        $user->bonus_wallet -= $add_bonus;
        $user->save();
        return redirect()->back()->with('defund_profit', 'Defund successfully');
    }
    

}
