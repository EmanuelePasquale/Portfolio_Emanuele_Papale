<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $content;

    /**
   * Create a new message instance.
   */
  public function __construct($content)
  {
      $this->content = $content;
  }

  /**
   * Get the message envelope.
   */
  public function envelope(): Envelope
  {
      return new Envelope(
          subject: 'Contatto dal Form_Portfolio',
      );
  }

  /**
   * Get the message content definition.
   */
  public function content(): Content
  {
      return new Content(
          view: 'pages.mail-contact',
      );
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
