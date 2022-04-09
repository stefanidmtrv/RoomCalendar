@component('mail::message')
# Room Booked
Dear {{$studentNum}},

You booked room {{$roomNum}} on {{$date}} from {{$start_time}} until {{$end_time}}.

Thank you,

Swansea University

@component('mail::button', ['url' =>URL::temporarySignedRoute(
    'user.event.delete', now()->addMinutes(30), ['id' => $event_id])])
    Delete event
@endcomponent


@endcomponent