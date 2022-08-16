<?php
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth', 'verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('dashboard', 'Admin\AdminController@dashboard')->name('dashboard');
    Route::get('/user_verify/{user}', 'Admin\AdminController@verify_user')->name('verify_user');
    Route::get('/suspend_user/{user}', 'Admin\AdminController@suspendUser')->name('suspend_user');
    Route::get('all-users', 'Admin\AdminController@listUsers')->name('users');
    Route::get('user-details/{id}', 'Admin\AdminController@show')->name('show-user');
    Route::post('fund/account/{id}', 'Admin\AdminController@fund_account')->name('fund_account');
    Route::post('send/bonus/{id}', 'Admin\AdminController@bonus')->name('bonus');
    Route::post('user/defund/{id}', 'Admin\AdminController@defund_acct')->name('defund_acct');
    Route::post('defund/profit/{id}', 'Admin\AdminController@defund_profit')->name('defund_profit');

    Route::resource('packages', "Admin\PackagesController");

    Route::get('withdrawal', 'Admin\AdminWithdrawal@withdrawal')->name('withdrawal');
    Route::get('/approve/{withdraw}', 'Admin\AdminWithdrawal@approve_withdraw')->name('approve_withdraw');
    Route::get('/reject/{id}', 'Admin\AdminWithdrawal@reject_withdraw')->name('reject_withdraw');
    Route::get('withdraw-details/{id}', 'Admin\AdminWithdrawal@show_withdraw')->name('show_user_withdraw');
    Route::get('/withdrawal/{id}', 'Admin\AdminWithdrawal@withdraw_single')->name('single_withdraw.view');
    Route::post('/withdrawal/update-hash/{id}', 'Admin\AdminWithdrawal@update_hash')->name('update_hash.store');
    Route::post('withdrawal/send-bonus/{id}', 'Admin\AdminWithdrawal@update_acct')->name('update_acct.store');
    Route::delete('withdrawal/{id}/delete', 'Admin\AdminWithdrawal@delete_withdrawal')->name('delete_withdrawal');
    Route::get('user-withdraw/details/{id}', 'Admin\AdminWithdrawal@user_withdraw')->name('user_withdraw.show');


 //    Deposit Route
    Route::get('user-deposit/details/{id}', 'Admin\AdminDeposit@show_user_deposit')->name('user_deposit');
    Route::get('/approve/deposit/{deposit}', 'Admin\AdminDeposit@approve_deposit')->name('approve_deposit');
    Route::get('/deposits', 'Admin\AdminDeposit@all_deposits')->name('deposit');
    Route::get('withdraw-details/{id}', 'Admin\AdminDeposit@show_deposit')->name('show-deposit');
    Route::get('/reject/deposit/{deposit_reject}', 'Admin\AdminDeposit@reject_deposit')->name('reject_deposit');
    Route::get('/deposit/transaction={id}', 'Admin\AdminDeposit@deposit_view_single')->name('single_deposit.view');
    Route::delete('deposit/{id}/delete', 'Admin\AdminDeposit@delete_deposit')->name('delete_deposit');

//  Message Route
    Route::get('user/message/{id}', 'Admin\MessagesController@index')->name('user_message')->where('id', '[0-9]+');
    Route::get('user/message/create/{id}', 'Admin\MessagesController@create')->name('create');
    Route::post('user/message/store', 'Admin\MessagesController@store')->name('msg_store');
    Route::get('user/message/details/{id}', 'Admin\MessagesController@show')->name('msg_show');
    Route::delete('user/message/delete/{id}', 'Admin\MessagesController@destroy')->name('delete_msg');

//  Settings Route
    Route::get('setting', "Admin\SettingsController@create")->name('setting.create');
    Route::post('setting/store', "Admin\SettingsController@store")->name('setting.store');

//    Message route
    Route::get('user/message/{id}', 'Admin\MessagesController@index')->name('user_message')->where('id', '[0-9]+');
    Route::get('user/message/create/{id}', 'Admin\MessagesController@create')->name('msg_create');
    Route::post('user/message/store', 'Admin\MessagesController@store')->name('msg_store');
    Route::get('user/message/details/{id}', 'Admin\MessagesController@show')->name('msg_show');
    Route::delete('user/message/delete/{id}', 'Admin\MessagesController@destroy')->name('delete_msg');


    //password Route
    // Route::get('change-password', 'Admin\SettingsController@password');
    Route::post('change-password', 'Admin\SettingsController@password')->name('change.password');
});
