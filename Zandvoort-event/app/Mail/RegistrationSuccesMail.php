<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

// Local mail server via Mailtrap. See .ENV file for setting information
class RegistrationSuccesMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
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
        // set-up mail for sending, using make-up from view -> emails 
        $subject = 'Registratie Gelukt!';
        return $this->view('emails.registration-succes-mail')->subject($subject);
    }
}
