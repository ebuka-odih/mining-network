<?php

namespace App\Mail;

use App\Deposit;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DepositMail extends Mailable
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
        $last_name  =  $this->data['user']->last_name;;
        $name       =  $this->data['investment']->name;
        $amount     =  $this->data['deposit']->amount;

        return $this->from('support@mining-networks.com')
            ->subject('Mining Farm')
            ->markdown('emails.approve_deposit')
          ->with(['data' => $data, 'last_name' => $last_name, 'name' => $name, 'amount' => $amount]);
    }
}
