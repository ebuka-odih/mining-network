<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
   protected $guarded = [];

    public function total_return()
    {

        return $this->daily_interest * $this->term_days;
    }


    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }


}
