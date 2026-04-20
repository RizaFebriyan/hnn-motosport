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
        $attachments = [];

        // Cek jika ada file yang diunggah
        if (isset($this->data['foto']) && is_array($this->data['foto'])) {
            foreach ($this->data['foto'] as $file) {
                $attachments[] = Attachment::fromPath($file->getRealPath())
                    ->as($file->getClientOriginalName())
                    ->withMime($file->getMimeType());
            }
        }

        return $attachments;
    }
}
