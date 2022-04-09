<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Event;
use Carbon\Carbon;


class RoomBooked extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $studentNum;
    public $event;
    public $roomNum;
    public $start_time;
    public $end_time;
    public $date;
    public $event_id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Event $event)
    {
        $this->event = $event;
        $this->event_id = $event->id;
        $this->studentNum = $event->user_number;
        $this->roomNum = $event->room_id;
        $this->date = Carbon::parse($event->start_date_time)->format('jS F');
        $this->start_time = Carbon::parse($event->start_date_time)->format('H:i');
        $this->end_time = Carbon::parse($event->end_date_time)->format('H:i');
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
