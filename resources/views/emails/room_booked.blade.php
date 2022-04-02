@component('mail::message')
# Room Booked
Dear {{$studentNum}},

You booked room {{$roomNum}} on {{$date}} from {{$start_time}} until {{$end_time}}.

Thank you,

Swansea Uni

@emailCancellation
<a href="{{ route('user.event.delete', $event_id) }}">
Cancel event
</a>
@endemailCancellation

@endcomponent