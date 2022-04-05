<x-layouts.app>

    <x-slot name="title">
        Welcome
    </x-slot>

    <x-slot name="slot">

        <div class="d-flex flex-wrap">
            @forelse($rooms as $room)
                <div class="p-2 bd-highlight">
                    <a href="availability/{{ $room->id }}" type="button" class="btn btn-secondary btn-lg">Room
                        {{ $room->id }}</a>
                </div>
            @empty
                No rooms available
            @endforelse
        </div>

    </x-slot>

</x-layouts.app>
