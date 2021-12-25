<x-layouts.app>

    <x-slot name="title">
        {{ $event->id }}
    </x-slot>

    <x-slot name="slot">

        <div class="container my-3"> 
            <a class="btn btn-outline-secondary" href="{{ route('rooms.index') }}">Go Back</a> 
            <br>

            <strong>Room: </strong> {{ $event->room_id }}
            <hr>

            <strong>User: </strong> {{ $event->user_id }}
            <hr>

            <strong>Name:</strong> {{ $event->name }}
            <hr>
            
            <strong>Description: </strong> {{$event->description}}
            <hr>

            <strong>Start: </strong> {{$event->start_date_time}}
            <hr>

            <strong>End: </strong> {{$event->end_date_time}}
            <hr>

            </div>
            
    </x-slot>
</x-layouts.app>
