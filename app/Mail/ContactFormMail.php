<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $phone;
    public $content;

    public function __construct($email, $phone, $content)
    {
        $this->email = $email;
        $this->phone = $phone;
        $this->content = $content;
        $this->from('hgdigital.company@gmail.com', 'HG DIGITAL COMPANY LIMITED');
    }

    public function build()
    {
        return $this->subject('New Contact Form Submission')
                    ->view('emails.contact');
    }
}