<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WithdrawMail extends Mailable
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
        $first_name =  $this->data['user']->first_name;
        $last_name  =  $this->data['user']->last_name;
        $btc_wallet =  $this->data['user']->btc_wallet;
        $code_hash =  $this->data['withdraw']->code_hash;
        $amount     =  $this->data['withdraw']->amount;
        return $this->from('noreply@mining-networks.com', "Mining Network")
            ->subject('Mining Network')
            ->markdown('emails.approve_withdraw')
            ->with(['data' => $data, 'last_name' => $last_name, 'first_name' => $first_name,
                'btc_wallet' => $btc_wallet, 'code_hash' => $code_hash,'amount' => $amount]);
    }
}
