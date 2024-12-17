<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AppointmentConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $appointment;


    /**
     * Create a new message instance.
     */
    public function __construct($appointment)
    {
        $this->appointment = $appointment;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Appointment Confirmation Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.appointment_confirmation',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        // Path to the file in the public storage directory
        $pdfPath = public_path('storage/appointments/appointment_form.pdf');

        // Check if the file exists
        if (!file_exists($pdfPath)) {
            throw new \Exception("The file does not exist at $pdfPath");
        }

        return [
            \Illuminate\Mail\Mailables\Attachment::fromPath($pdfPath)
                ->as('appointment_form.pdf') // Optional: Name the attachment
                ->withMime('application/pdf'), // Set MIME type as PDF
        ];
    }
}
