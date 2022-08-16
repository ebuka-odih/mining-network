<?php

namespace App\Http\Controllers;

use App\Mail\AdminWithdrawAlert;
use App\Mail\RequestWithdraw;
use App\User;
use App\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class WithdrawController extends Controller
{
    public function withdraw()
    {
        return view('dashboard.withdraw2');
    }

    public function withdrawal()
    {
        $withdrawal = Withdraw::whereUserId(auth()->id())->get();
        return view('dashboard.withdrawal-history', compact('withdrawal'));
    }

    public function store(Request $request)
    {
        $withdraw = $this->getData($request);
        $withdraw['code_hash'] = (string) Str::uuid();
        $withdraw['user_id'] = auth()->id();

        if ($request->wallet_type == 'acct_wallet'){
            if (auth()->user()->acct_wallet < $withdraw['amount']){
                return redirect()->back()->with('declined_message', 'You do not have upto that amount to withdraw from your main balance');
            }
            $withdraw = Withdraw::create($withdraw);
            $user = User::findOrFail($withdraw->user_id);
            $data = ['withdraw' => $withdraw, 'user' => $user];
            Mail::to($user->email)->send( new RequestWithdraw($data));

//            $admin = User::select('email')->where('user_role', '=', 1)->first();
            Mail::to("support@mining-networks.com")->send( new AdminWithdrawAlert($data));
            return redirect()->back()->with('success_message', 'Withdrawal Request Sent Successfully');

        }else if($request->wallet_type == "bonus_wallet"){
            if (auth()->user()->bonus_wallet < $withdraw['amount']){
                return redirect()->back()->with('declined', 'You do not have upto that amount to withdraw from your bonus balance');
            }
            $withdraw = Withdraw::create($withdraw);
            $user = User::findOrFail($withdraw->user_id);
            $data = ['withdraw' => $withdraw, 'user' => $user];
            Mail::to($user->email)->send( new RequestWithdraw($data));
//            $admin = User::select('email')->where('user_role', '=', 1)->first();
            Mail::to("support@mining-networks.com")->send( new AdminWithdrawAlert($data));
            return redirect()->back()->with('success_message', 'Withdrawal Request Sent Successfully');
        }else{
            return redirect()->back()->with('reject', "Request Failed");
        }
    }

    protected function getData(Request $request){
        $rules = [
            'amount' => 'required',
            'status' => 'nullable',
            'code_hash' => 'nullable',
            'users_id' => 'nullable',
            'wallet_type' => 'nullable',
            'account_type' => 'nullable',
            'approved_date' => 'nullable',
        ];
        return $request->validate($rules);
    }
}
