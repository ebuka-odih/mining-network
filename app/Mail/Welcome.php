<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Welcome extends Mailable
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
        $last_name  =  $this->data['user']->last_name;
        return $this->from(['noreply@mining-networks.com'])->subject("Mining Farm")
            ->with(['data' => $data, 'last_name' => $last_name])
            ->markdown('emails.welcomemail');
    }
}
