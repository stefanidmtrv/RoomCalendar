<x-layouts.app>

    <x-slot name="title">
        Dashboard
    </x-slot>

    <x-slot name="slot">

        <a class="btn btn-outline-secondary" href="{{ route('home') }}">Go Back</a>
        {{-- <a href="{{ route('displays.create') }} " type="button" class="btn btn-success">Add a new device</a> --}}
        <a href="{{ route('admin.stmgmt') }}" type="button" class="btn btn-success">Student Num Management</a>
        <a href="{{ route('admin.building') }}" type="button" class="btn btn-success">Building management</a>
        <a href="{{ route('admin.floor') }}" type="button" class="btn btn-success">Floor management</a>
        <a href="{{ route('admin.room') }}" type="button" class="btn btn-success">Room management</a>
        <div class="d-grid gap-2 col-6 mx-auto">
            {{-- @foreach ($rooms as $room)
                <a href="{{ route('rooms.show', ['room' => $room]) }} " type="button" class="btn btn-primary">Room
                    {{ $room->id }}</a>
            @endforeach --}}
        </div>

    </x-slot>

</x-layouts.app>
