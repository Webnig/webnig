<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistrationSuccess extends Mailable
{
    use Queueable, SerializesModels;

    public $usr;

    /**
     * Create a new message instance.
     */
    public function __construct($user)
    {
        $this->usr = $user;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('newsletter')
            ->subject('Testing the email');
    }
}
