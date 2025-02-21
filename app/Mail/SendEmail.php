<?php

namespace App\Mail;

use App\Models\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data, $title, $contact, $icon;

    /**
     * Create a new message instance.
     */
    public function __construct(array $data)
    {
        $settings = Setting::first();

        $this->data = $data;
        $this->icon = asset($settings->icon);
        $this->title = $settings->title;
        $this->contact = $settings->contact;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Hasil Tes Bakat - ' . $this->title
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.report',
            with: [
                'data' => $this->data,
                'icon' => $this->icon,
                'title' => $this->title,
                'contact' => $this->contact
            ]
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}
