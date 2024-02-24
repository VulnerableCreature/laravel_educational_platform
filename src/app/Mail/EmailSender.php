<?php

namespace App\Mail;

use App\Models\Course;
use App\Models\Material;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailSender extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    protected User $user;
    protected Course $course;
    protected Material $material;

    public function __construct(User $user, Course $course, Material $material)
    {
        $this->user = $user;
        $this->course = $course;
        $this->material = $material;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Educational online platform',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.template',
            with: [
                'user' => $this->user,
                'course' => $this->course,
                'material' => $this->material,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        if (!is_null($this->material->file_path)) {
            return [
                Attachment::fromStorageDisk('public', $this->material->file_path),
            ];
        }

        return [];
    }
}
