<?php

namespace App;

use Carbon\Carbon;

//use App\User;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    protected $guarded = [];
    protected $appends = ['end_date', 'total_earned', 'earning', 'trans'];



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function investment_plan()
    {
        return $this->belongsTo(Packages::class, 'package_id');
    }
    public function getEndDateAttribute()
    {
        $date = Carbon::parse($this->approved_date);
        return $date->addDays($this->investment_plan->term_days - 1);
//        return $date + $this->investment_plan->term_days;
    }

    public function getEarningAttribute()
    {
        $expected_percent = $this->investment_plan->daily_interest  * $this->amount;
        $profit_percent =  number_format((float)$expected_percent / 100, 2, '.', '');

        $days = 0;

        $d_approved = Carbon::parse($this->approved_date);
        $d_ended = Carbon::parse($this->end_date);

        $current_date = Carbon::now();

        if($d_approved->diffInDays($current_date) < $this->investment_plan->term_days){
            $days = $d_approved->diffInDays($current_date);
        }else {
            $days =  $this->investment_plan->term_days;
        }

        $earned = 0;
        for ($i = 0; $i <= $days; $i++){
            $earned += $profit_percent;
        }
        return $earned;
    }

    public function getTotalEarnedAttribute(){
        return  $this->earning + $this->amount;
    }

    public function TotalEarned()
    {
        $total_profit = $this->earning;
        return $total_profit;
    }

    public function status()
    {
        if ($this->status == 0){
            return "<span class='label label-warning text text-uppercase'>Pending</span>";
        }elseif ($this->status == 1){
            return "<span class='label label-success text text-uppercase'>Processed</span>";
        }else{
            return "<span class='label label-warning text text-uppercase'>Canceled</span>";
        }
    }

    public function admin_status()
    {
        if ($this->status == 0){
            return "<span class='badge badge-warning text text-uppercase'>Pending</span>";
        }elseif ($this->status == 1){
            return "<span class='badge badge-success text text-uppercase'>Processed</span>";
        }else{
            return "<span class='badge badge-warning text text-uppercase'>Canceled</span>";
        }
    }

    public function expected_profit()
    {
        $expected_profit = $this->investment_plan->total_return() * $this->amount;
        $profit =  number_format((float)$expected_profit / 100, 2, '.', '');
        return $profit;
    }

    public function ending_date()
    {
        $date = Carbon::parse($this->approved_date);
        return $date->addDays($this->investment_plan->term_days - 1);
//        return $date + $this->investment_plan->term_days;
    }


}
