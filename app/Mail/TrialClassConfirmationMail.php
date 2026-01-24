<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TrialClassConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;
    public array $data;

    /**
     * Create a new message instance.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }
    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Konfirmasi Trial Class - Alhazen Academy')
            ->view('emails.trial-confirmation')
            ->with($this->data);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
