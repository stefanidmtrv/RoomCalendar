<x-layouts.app>

    <x-slot name="title">
        Rooms
    </x-slot>



    <x-slot name="slot">

        <a class="btn btn-outline-secondary" href="{{ route('home') }}">Go Back</a>
        <a href="{{ route('displays.create') }} " type="button" class="btn btn-success">Add a new device</a>

        <div class="d-grid gap-2 col-6 mx-auto">
            @foreach ($rooms as $room)
                <a href="{{ route('rooms.show', ['room' => $room]) }} " type="button" class="btn btn-primary">Room
                    {{ $room->id }}</a>
            @endforeach
        </div>

    </x-slot>

</x-layouts.app>
