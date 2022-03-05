<x-layouts.app>

    <x-slot name="title">
        Welcome
    </x-slot>

    <x-slot name="slot">
        <div style="text-align: center; margin-top: 10%;">
            @forelse($rooms as $room)
        
            <a href="availability/{{$room->id}}" type="button" class="btn btn-success">Room:<br>{{ $room->id }}</a>
            @empty
                No rooms avaliale
            @endforelse
        </div>
    </x-slot>

</x-layouts.app>