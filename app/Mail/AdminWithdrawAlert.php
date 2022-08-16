<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminWithdrawAlert extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct($data)
    {
       $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = $this->data['user'];
        $first_name =  $this->data['user']->first_name;;
        $last_name  =  $this->data['user']->last_name;;
        $btc_wallet =  $this->data['user']->btc_wallet;;
        $amount     =  $this->data['withdraw']->amount;
        return $this->subject('Withdrawal Request From Mining Network')
            ->markdown('emails.admin_withdraw_request')
            ->with(['data' => $data, 'last_name' => $last_name, 'first_name' => $first_name,
                'btc_wallet' => $btc_wallet, 'amount' => $amount]);
    }
}
