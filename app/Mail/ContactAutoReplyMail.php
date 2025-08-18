<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactAutoReplyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // Holds the form data

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Thank you for contacting us')
                    ->view('emails.contact_auto_reply')
                    ->with([
                        'first_name' => $this->data['first_name'],
                        'last_name'  => $this->data['last_name'],
                        'subject'    => $this->data['subject'],
                    ]);
    }
}
