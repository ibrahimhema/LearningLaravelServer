<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReplayEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $arr;
    public function __construct($arr)
    {
        //
        $this->arr=$arr;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $arrvariable=$this->arr;
        return $this->view('admin.mails.replay-message',compact('arrvariable'));
    }
}
