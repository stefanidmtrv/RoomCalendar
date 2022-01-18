<x-layouts.app>

    <x-slot name="title">
      
    </x-slot>

    <x-slot name="slot">

        {{-- @guest
        <a href= "{{ route('rooms.show', ['room' => 5]) }}">
            <img src="https://live.staticflickr.com/4792/40723617802_6e8c554975_b.jpg" class="img-fluid mx-auto d-block">
        </a>
        @endguest

        @auth
            @if (auth()->user()->hasRole('admin'))
                <a href= "{{ route('rooms.index') }}">
                    <img src="https://live.staticflickr.com/4792/40723617802_6e8c554975_b.jpg" class="img-fluid mx-auto d-block">
                </a>
            @else
                <a href= "{{ route('rooms.show', ['room' => 5]) }}">
                    <img src="https://live.staticflickr.com/4792/40723617802_6e8c554975_b.jpg" class="img-fluid mx-auto d-block">
                </a>
            @endif
        @endauth --}}

    </x-slot>
</x-layouts.app>
