<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $text;
    public $date;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $text, $date)
    {
        $this->name = $name;
        $this->email = $email;
        $this->text = $text;
        $this->date = $date;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.contact')->with('title', '');
    }
}
