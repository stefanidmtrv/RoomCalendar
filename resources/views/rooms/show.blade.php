<x-layouts.app>

    <x-slot name="title">
        {{ $room->id }}
    </x-slot>

    <x-slot name="slot">

        <div class="container my-3"> 
            <a class="btn btn-outline-secondary" href="{{ route('rooms.index') }}">Go Back</a> 
            <br>

            <strong>Table capacity:</strong> {{ $room->table_capacity }}
            <hr>

            <strong>Computer capacity:</strong> {{ $room->computer_capacity }}
            <hr>

            <strong>Number of projectors:</strong> {{ $room->number_of_projectors }}
            <hr>
            
            
            <strong>Floor: </strong> {{$room->floor_id}}
            <hr>
            <strong>Events: </strong>
                @foreach ($room->events as $event)
                    <figure>
                        <blockquote class="blockquote">
                            <p>
                                <li> {{ $event->name }}</li>
                            </p>
                        </blockquote>
                    </figure>
                    @endforeach

            </div>
            
    </x-slot>
</x-layouts.app>
