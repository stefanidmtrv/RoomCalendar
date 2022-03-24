<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RoomBooked extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $studentNum;
    public $roomNum;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $studentNum, int $roomNum)
    {
        $this->studentNum = $studentNum;
        $this->roomNum = $roomNum;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Room Booked')->markdown('emails.room_booked');
    }
}
