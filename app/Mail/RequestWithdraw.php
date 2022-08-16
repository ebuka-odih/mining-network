<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RequestWithdraw extends Mailable
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
        $trans_hash =  $this->data['withdraw']->trans_hash;
        $amount     =  $this->data['withdraw']->amount;
        return $this->from('admin@mining-networks.com')
            ->subject('Mining Network')
            ->markdown('emails.request_withdraw')
            ->with(['data' => $data, 'first_name' => $first_name, 'last_name' => $last_name,
                'btc_wallet' => $btc_wallet, 'trans_hash' => $trans_hash,'amount' => $amount]);
    }
}
