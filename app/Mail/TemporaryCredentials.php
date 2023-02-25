<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TemporaryCredentials extends Mailable
{
    use Queueable, SerializesModels;

    public $username;
    public $rand_password;
    public $givenName;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username, $rand_password, $givenName)
    {
        $this->username = $username;
        $this->rand_password = $rand_password;
        $this->givenName = $givenName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.temporary_credentials')
        ->subject('Temporary Password and Username for your Account');
    }
}
