<?php

namespace App\Mail;

use App\Models\contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class notifyContactOwner extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public contact $contact)
    {

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Salty Waves - New Consultation Request Received!',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contactToOwner',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
