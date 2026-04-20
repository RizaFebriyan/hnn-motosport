<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PenawaranJualMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Penawaran Jual Unit Baru - ' . $this->data['nama'],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.penawaran_jual',
        );
    }

    public function attachments(): array
    {
        if (isset($this->data['foto'])) {
            return [
                Attachment::fromPath($this->data['foto']->getRealPath())
                    ->as($this->data['foto']->getClientOriginalName())
                    ->withMime($this->data['foto']->getMimeType()),
            ];
        }
        return [];
    }
}
