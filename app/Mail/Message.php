<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Message extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData, $email)
    {
        $this->mailData = $mailData;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)->subject('Message')->view('mail.message');
    }
}
