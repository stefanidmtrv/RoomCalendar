<x-layouts.app>

    <x-slot name="title">
        Rooms
    </x-slot>



    <x-slot name="slot">
        
        <ul>

            @foreach ($rooms as $room)
                <div class='container my-3'>
                    <a href="{{ route('rooms.show', ['room' => $room]) }}">Room {{$room->id}}</a>
                </div>
                @if (Auth::check())
                @if (auth()->user()->hasRole('admin'))
                            <form method='POST' action="{{ route('rooms.destroy', ['room' => $room]) }}">
                                @csrf

                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm">Delete room</button>

                            </form>
                            
                @endif    
            @endif
            @endforeach

        </ul>


    </x-slot>

</x-layouts.app>
