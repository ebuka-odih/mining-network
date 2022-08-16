<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    //
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        if ($this->status == 1){
            return "<span class='label label-warning text text-uppercase'>Pending</span>";
        }elseif ($this->status > 1){
            return "<span class='label label-success text text-uppercase'>Successful</span>";
        }else{
            return "<span class='label label-danger text text-uppercase'>Canceled</span>";
        }
    }


    public function admin_status()
    {
        if ($this->status == 1){
            return "<span class='badge badge-warning text text-uppercase'>Pending</span>";
        }elseif ($this->status > 1){
            return "<span class='badge badge-success text text-uppercase'>Successful</span>";
        }else{
            return "<span class='badge badge-danger text text-uppercase'>Canceled</span>";
        }
    }

    public function wallet_type()
    {
        if ($this->wallet_type == 'acct_wallet'){
            return "Main Account";
        }
        return "Bonus Account";
    }
    public function admin_wallet_type()
    {
        if ($this->wallet_type == 'acct_wallet'){
            return "Main Wallet |"." $".$this->user->acct_wallet;
        }
        return "Bonus Wallet |"." $".$this->user->bonus_wallet;
    }

}
