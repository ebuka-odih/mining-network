<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ReferralController extends Controller
{
    public function index()
    {
//        $refs = User::whereReferrerId(2)->get();
        $refs = User::where('referred_by', '!=', 'null')->get();
        return view('admin2.referral', compact('refs'));
    }

}
