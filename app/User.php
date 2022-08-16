<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
//        'name', 'email', 'password',
//    ];
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function btc_value($usd_price){
        try{
            $url = "https://bitpay.com/api/rates";

            $json = file_get_contents($url);
            $data = json_decode($json, TRUE);

            $rate = $data[4]["rate"];   //$data[1] is outdated now, they have updated their json order. This new number 2 now fetches USD price.
            # Let cost of elephant be 10$
            $bitcoin_price = round( $usd_price / $rate , 5 );
            return $bitcoin_price;
        }catch( Exception $e) {
            echo 'Error: ' .$e->getMessage();
        }
    }


    public function getProfileImageAttribute($value) {
        if(!$this->attributes['profile_image']) {
            $colors = ['E91E63', '9C27B0', '673AB7', '3F51B5', '0D47A1', '01579B', '00BCD4', '009688', '33691E', '1B5E20', '33691E', '827717', 'E65100',  'E65100', '3E2723', 'F44336', '212121'];
            $background = $colors[$this->id%count($colors)];
            return "https://ui-avatars.com/api/?size=256&background=".$background."&color=fff&name=".urlencode($this->last_name." ".$this->first_name);
        }
        return '/storage/profile_images/' . $this->attributes['profile_image'];
    }


    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_id', 'id');
    }

    public function referrals()
    {
        return $this->hasMany(User::class, 'referrer_id', 'id');
    }

    public function getReferralLinkAttribute()
    {
        return $this->referral_link = route('register', ['ref' => $this->username, 'id'=> $this->id]);
    }

    public function withdraws()
    {
        return $this->hasMany(Withdraw::class, 'user_id');
    }

    public function admin_status()
    {
        if ($this->status > 0){
            return "<i class='mdi mdi-star-circle member-star text-success' title='verified user'></i>";
        }else{
            return "<i class='mdi mdi-star-circle member-star text-danger' title='unverified user'></i>";
        }
    }

    public function status()
    {
        if ($this->status < 2){
            return "<span class='badge badge-pill badge-warning'>Unverified</span>";
        }else{
            return "<span class='badge badge-pill badge-primary'>Verified</span>";
        }
    }

    public function deposits()
    {
        return $this->hasMany(Deposit::class, 'user_id');
    }

    public function notifyUser(){
        return $this->hasMany('App\Messages', 'user_id');
    }

    public function all_referrals()
    {
        $refs = User::whereReferredBy($this->id)->get();
        return $refs;
    }

    public function referredBy()
    {
        return $this->belongsTo(User::class, 'referred_by', 'id');
    }


    public function unread_msg(){
        $unread_msg = Messages::whereUserId($this->id)->where('read', 0)->count();
        return $unread_msg;
    }






}




