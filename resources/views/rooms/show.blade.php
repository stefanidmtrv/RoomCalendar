<x-layouts.app>

    <x-slot name="title">
        Room {{ $room->id }}
    </x-slot>

    <x-slot name="slot">

        <div class="container my-3">
            <x-room-info>
                <x-slot name="number">{{ $room->id }}</x-slot>
                <x-slot name="table_capacity">{{ $room->table_capacity }}</x-slot>
                <x-slot name="computer_capacity">{{ $room->computer_capacity }}</x-slot>
                <x-slot name="num_projectors">{{ $room->number_of_projectors }}</x-slot>
                <x-slot name="floor">{{ $room->floor_id }}</x-slot>
            </x-room-info>

            
                    <a class="btn btn-outline-secondary"  href="#" onclick="history.go(-1)">Go Back</a>
              

            <div>
                <p>Week starting on: {{ $monday }}</p>
                <p>Week ending on: {{ $friday }}</p>
            </div>


            <hr>


            <x-timetable>
                <x-slot name="room">{{ $room->id }}</x-slot>
                <x-slot name="monday">{{ $monday }}</x-slot>
                <x-slot name="tuesday">{{ $tuesday }}</x-slot>
                <x-slot name="wednesday">{{ $wednesday }}</x-slot>
                <x-slot name="thursday">{{ $thursday }}</x-slot>
                <x-slot name="friday">{{ $friday }}</x-slot>
                <x-slot name="monday2">{{ $monday2 }}</x-slot>
                <x-slot name="tuesday2">{{ $tuesday2 }}</x-slot>
                <x-slot name="wednesday2">{{ $wednesday2 }}</x-slot>
                <x-slot name="thursday2">{{ $thursday2 }}</x-slot>
                <x-slot name="friday2">{{ $friday2 }}</x-slot>
            </x-timetable>

            <div class="col-md-12 text-center">
                @auth
                    @if (auth()->user()->hasRole('admin'))
                        <form method='POST' action="{{ route('rooms.destroy', ['room' => $room]) }}">
                            @csrf

                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm">Delete room</button>

                        </form>
            <strong>Events: </strong>
                        @foreach ($room->events as $event)
                            <figure>
                                <blockquote class="blockquote">
                                    <p>
                                        <li> <a href="{{ route('events.show', ['event' => $event]) }}">{{ $event->name }}</a>
                                        </li>
                                    </p>
                                </blockquote>
                            </figure>
                        @endforeach
                    @endif
                @endauth

            </div>
            
            

    </x-slot>
</x-layouts.app>
