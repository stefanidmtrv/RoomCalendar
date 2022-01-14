<x-layouts.app>

    <x-slot name="title">
        Homepage
    </x-slot>

    <x-slot name="slot">
        @auth
            @if (auth()->user()->hasRole('admin'))
                <a href="{{ route('rooms.index') }}">rooms</a>
            @endif
        @endauth

    </x-slot>
</x-layouts.app>
