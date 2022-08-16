<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontController@home')->name('homepage');
Route::get('about', 'FrontController@about')->name('about');
Route::get('affiliate', 'FrontController@affiliate')->name('affiliate');
Route::get('investment-plan', 'FrontController@plan')->name('plan');
Route::get('faq', 'FrontController@faq')->name('faq');
Route::get('contact', 'FrontController@contact')->name('contact');
Route::get('get-started', 'FrontController@get_started')->name('get_started');
Route::view('terms-and-conditions', 'front.terms')->name('terms');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function(){
    Route::get('dashboard', 'UserController@dashboard')->name('dashboard');
    Route::get('overview', 'UserController@overview')->name('overview');
    Route::get('messages-details/{id}', 'UserController@show_messages')->name('show_messages');
    Route::get('messages', 'UserController@messages')->name('messages');
    Route::get('unread-messages', 'UserController@uread_messages')->name('uread_messages');
    Route::get('profile', 'UserController@profile')->name('profile');
    Route::post('setting/update', 'UserController@setting_update')->name('personal_info_store');
    Route::post('change-password', 'UserController@password_store')->name('change.password');
    Route::post('kyc/store', 'UserController@kyc_store')->name('kyc_store');
    Route::get('referral', "UserController@all_referrals")->name('all_referrals');


//        Deposit Route
    Route::get('deposit-history', 'DepositController@deposit_history')->name('deposit_history');
    Route::get('deposit-plan', 'DepositController@deposit_plan')->name('deposit_plan');
    Route::post('deposit/fund/','DepositController@make_deposit')->name('deposit.store');
    Route::get('transaction/XAIR3{id}x$532xz', 'DepositController@transaction')->name('transaction');
    Route::post('transaction/hash-proof/', 'DepositController@process_deposit')->name('payment_proof');
    Route::post('transaction/proof', 'DepositController@process_deposit2')->name('payment_proof2');

//    Withdrawal Route
    Route::get('withdraw', 'WithdrawController@withdraw')->name('withdraw');
    Route::get('withdraw-history', 'WithdrawController@withdrawal')->name('withdrawal');
    Route::post('withdraw-fund/store', 'WithdrawController@store')->name('user_withdraw');


});

include('admin.php');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
