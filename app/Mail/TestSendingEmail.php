<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestSendingEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $persons;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($persons)
    {
        $this->persons = $persons;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            // from: new Address('aaa@gmail.com', 'cara fajar'),
            // replyTo: [
            //     new Address('bbb@gmail.com', 'cara fajar 2'),
            // ],
            subject: 'Test Sending Email',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.test-mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [
            Attachment::fromPath(public_path('pdf/test-file.pdf')),
        ];
    }
}
