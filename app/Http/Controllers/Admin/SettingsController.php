<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Settings;
use App\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;


class SettingsController extends Controller
{
//
//    public function index()
//    {
//        $wallets = Settings::all();
//        return view('admin2.add-wallet', compact('wallets'));
//    }

    public function create()
    {
        return view('admin.settings');
    }

    public function store(Request $request){
        setting($request->except('_token'))->save();
        return redirect()->back()->with('success', 'Settings updated successfully');
    }

    public function qr_code(Request $request)
    {
        $request->validate([
                'btc_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
        );
        if( $image = $request->file('btc_image')){
            $input['btc_image'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/qrcode/images');
            $image->move($destinationPath, $input['btc_image']);
            $article = new Settings();
            $article->btc_image = $input['image'];
            $article->save();
//            setting($request->except('_token'))->save();
        }
        return redirect()->back();

    }

    public function password(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        return redirect()->back()->with('message', "Password Changed Successfully");
    }






}
