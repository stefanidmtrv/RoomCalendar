@component('mail::message')
# Room Booked
Dear {{$studentNum}},

You booked an event in room number {{$roomNum}}.

Event details:

<b>Name:</b> {{$event->name}}

<b>Description:</b> {{$event->description}}

<b>Date:</b> {{$date}}

<b>Time:</b> {{$start_time}} - {{$end_time}}



Thank you,

Swansea University

@component('mail::button', ['url' => URL::temporarySignedRoute(
    'user.event.delete', now()->addMinutes(30), ['id' => $event_id])])
    Delete event
@endcomponent


@endcomponent