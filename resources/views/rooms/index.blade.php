<x-layouts.app>

    <x-slot name="title">
        Rooms
    </x-slot>



    <x-slot name="slot">

        <a class="btn btn-outline-secondary" href="{{ route('dashboard') }}">Go Back</a>
        
        <ul>

            @foreach ($rooms as $room)
                <div class='container my-3'>
                    <a href="{{ route('rooms.show', ['room' => $room]) }}">Room {{$room->id}}</a>
                </div>

            @endforeach

        </ul>


    </x-slot>

</x-layouts.app>
