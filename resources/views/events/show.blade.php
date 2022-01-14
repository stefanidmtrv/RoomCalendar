<x-layouts.app>

    <x-slot name="title">
        Event: {{ $event->name }}
    </x-slot>

    <x-slot name="slot">

        <div class="container my-3"> 
            <a class="btn btn-outline-secondary" href="#" onclick="history.go(-1)">Go Back</a> 
            <br>

            <strong>Room: </strong> {{ $event->room_id }}
            <hr>

            <strong>User: </strong> {{ $event->user->name}}
            <hr>

            <strong>Name:</strong> {{ $event->name }}
            <hr>
            
            <strong>Description: </strong> {{$event->description}}
            <hr>

            <strong>Start: </strong> {{$event->start_date_time->format('Y-m-d H:i:s')}}
            <hr>

            <strong>End: </strong> {{$event->end_date_time->format('Y-m-d H:i:s')}}
            <hr>
            
            @auth
                @if (auth()->user()->hasRole('admin'))
                            <form method='POST' action="{{ route('events.destroy', ['event' => $event]) }}">
                                @csrf

                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm">Delete event</button>

                            </form>
                            
                @endif    
            @endauth

            </div>

            
            
    </x-slot>
</x-layouts.app>
