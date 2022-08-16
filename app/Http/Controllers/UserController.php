<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\Messages;
use App\Rules\MatchOldPassword;
use App\User;
use App\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function all_referrals()
    {
//        $refs = User::whereReferredBy($this->id);
        return view('dashboard.referrals');
    }

    public function overview()
    {
        $my_plans = Deposit::whereUserId(auth()->id())->where('status', '=', 1)->get();
        $total_earned =  0;
        foreach ($my_plans as $item){
            $total_earned += $item->earning;
        }

        $total = Deposit::whereUserId(auth()->id())->select('amount')->sum('amount');
        $approved_cash = Deposit::whereUserId(auth()->id())->select('amount')->where('status', '=', 1)->sum('amount');
        $pending_cash = Deposit::whereUserId(auth()->id())->select('amount')->where('status', '=', 0)->sum('amount');

        $total_withdraw = Withdraw::whereUserId(auth()->id())->select('amount')->sum('amount');
        $withdraw_approved_cash = Withdraw::whereUserId(auth()->id())->select('amount')->where('status', '>', 1)->sum('amount');
        $withdraw_pending_cash = Withdraw::whereUserId(auth()->id())->select('amount')->where('status', '=', 1)->sum('amount');

        $last_withdraw = optional(Withdraw::whereUserId(auth()->id())->select('amount')->where('status', '=', 'approved')->latest()->first())->amount;
        return view('dashboard.overview', compact('total_earned', 'total', 'approved_cash', 'pending_cash', 'total_withdraw', 'withdraw_approved_cash', 'withdraw_pending_cash', 'last_withdraw'));
    }
    public function dashboard()
    {
        $my_plans = Deposit::whereUserId(auth()->id())->where('status', '=', 1)->get();
        $total_earned =  0;
        foreach ($my_plans as $item){
            $total_earned += $item->earning;
        }
        return view('dashboard.dashboard2', compact('total_earned'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('dashboard.profile', compact('user'));
    }

    public function setting_update(Request $request)
    {

        $user = User::findOrFail(auth()->id());
        $data = $this->getData($request);
        $user->update($data);
        return redirect()->back()->with('success', 'Profile Updated Successful');
    }


    protected function getData(Request $request){
        $rules = [
            'first_name' => 'nullable',
            'last_name' => 'nullable',
            'email' => 'nullable|email',
            'btc_wallet' => 'nullable',
            'country' => 'nullable',
            'state' => 'nullable',
            'city' => 'nullable',
            'address' => 'nullable',
            'phone' => 'nullable',
            'postal_code' => 'nullable',
            'date_of_birth' => 'nullable',
        ];
        return $request->validate($rules);
    }

    public function password_store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        return redirect()->back()->with('changed_successfully', "Password Changed Successfully");
    }

    public function kyc_store(Request $request)
    {
        $request->validate([
                'id_type' => 'required',
                'id_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
        );
        if ($image = $request->file('id_image')) {
            $input['id_image'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/id_image/images');
            $image->move($destinationPath, $input['id_image']);
            $article = User::findOrFail(auth()->id());
            $article->id_type = $request->get('id_type');
            $article->id_image = $input['id_image'];
            $article->save();
            return redirect()->back()->with('success_upload', 'ID submitted successfully');
        } else {
            return redirect()->back()->with('failed', "ID upload failed");
        }
    }

    public function messages()
    {
        $all_messages = Messages::whereUserId(auth()->id())->latest()->count();

        $unread_msg = Messages::whereUserId(auth()->id())->where('read', 0)->count();
        $read_msg = Messages::whereUserId(auth()->id())->where('read', 1)->count();
        $messages = Messages::whereUserId(auth()->id())->where('read', 1)->get();
        return view('dashboard.messages', compact('all_messages', 'unread_msg', 'messages', "read_msg"));
    }
    public function uread_messages()
    {
        $all_messages = Messages::whereUserId(auth()->id())->latest()->count();

        $unread_msg = Messages::whereUserId(auth()->id())->where('read', 0)->count();
        $read_msg = Messages::whereUserId(auth()->id())->where('read', 1)->count();
        $messages = Messages::whereUserId(auth()->id())->where('read', 0)->get();
        return view('dashboard.unread-msg', compact('all_messages', 'unread_msg', 'messages', "read_msg"));
    }

    public function show_messages($id)
    {
        $msg_details = Messages::findOrFail($id);
        $all_messages = Messages::whereUserId(auth()->id())->latest()->count();

        $unread_msg = Messages::whereUserId(auth()->id())->where('read', 0)->count();
        $read_msg = Messages::whereUserId(auth()->id())->where('read', 1)->count();
        if(!$msg_details->read){
            $msg_details->read = 1;
            $msg_details->save();
        }
        return view('dashboard.message-details', compact('msg_details', 'all_messages', 'unread_msg', 'read_msg'));
    }


    }
