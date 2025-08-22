<?php
// app/Mail/PrayerAutoReplyMail.php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PrayerAutoReplyMail extends Mailable
{
    use SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Thank You for Your Prayer Request',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.prayer-request-auto-reply',
        );
    }
}