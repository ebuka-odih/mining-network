<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FundMail extends Mailable
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
        $name =  $this->data['user']->name;
        $add_amt =  $this->data['add_amt'];
        return $this->from('noreply@mining-networks.com', 'Mining Network')->subject('Mining Network')
            ->with(['data' => $data, 'name' => $name, 'add_amt' => $add_amt])->
        markdown('emails.fundmail');
    }
}
