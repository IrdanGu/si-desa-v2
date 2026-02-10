<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PostMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

     public $title;
     public $name;
    public function __construct($title, $name)
    {
        $this->title = $title;
        $this->name = $name;
    }

    public function build()
    {
        return $this->subject('Postingan Baru Daengweb.id')->view('emails.posts');
    }
}
