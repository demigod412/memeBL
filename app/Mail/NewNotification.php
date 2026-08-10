<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewNotification extends Mailable
{
    use Queueable, SerializesModels;
    
    public $url, $attachment, $body, $subject, $recipient, $salutation;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($body, $subject, $recipient, $url = null, $attachment = null, $salutation = null)
    {
        $this->url = $url;
        $this->attachment = $attachment;
        $this->body = $body;
        $this->subject = $subject;
        $this->recipient = $recipient;
        $this->salutation = $salutation;
    }
    
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.NewNotification', [
            'url' => $this->url,
            'attachment' => $this->attachment,
            'body' => $this->body,
            'recipient' => $this->recipient,
            'salutation' => $this->salutation,
            'subject' => $this->subject,
        ])
        ->subject($this->subject);
    }
}
