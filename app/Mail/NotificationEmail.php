<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificationEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function build()
    {
        $address = $_ENV["MAIL_FROM_ADDRESS"];
        $subject = 'This is a demo!';
        $name = 'Jane Doe';

        return $this->view('emails.test')
                    ->from($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject)
                    ->with([ 'test_message' => $this->data['message'] ]);
    }
}
