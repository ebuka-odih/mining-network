<?php

namespace App\Http\Controllers;

use App\Packages;
use Illuminate\Http\Request;

class FrontController extends Controller
{
   public function home()
   {
       $packages = Packages::all();
       return view('front.home', compact('packages'));
   }

   public function about()
   {

       return view('front.about');
   }

   public function affiliate()
   {
       return view('front.affiliate');
   }

   public function plan()
   {
       $packages = Packages::all();
       return view('front.investment-plan', compact('packages'));
   }
   public function faq()
   {
       return view('front.faq');
   }public function contact()
   {
       return view('front.contact');
   }

   public function get_started()
   {
       return view('front.get-started');
   }

}
