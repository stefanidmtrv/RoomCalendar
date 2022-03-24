@component('mail::message')
# Room Booked    
Dear {{$studentNum}},

You booked room {{$roomNum}}.

Thank you,
Swansea Uni

@component('mail::button', ['url' => 'google.com'])
Google
@endcomponent



@endcomponent
