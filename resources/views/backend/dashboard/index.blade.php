<x-layouts.app>

    <x-slot name="title">
        Dashboard
    </x-slot>

    <x-slot name="slot">

        <a class="btn btn-outline-secondary btn-sm" href="{{ route('home') }}">Go Back</a>

        <div class="d-flex flex-column bd-highlight mb-3">
            <div class="p-2">
                <a href="{{ route('admin.stmgmt') }}" type="button" class="btn btn-secondary btn-lg">Student/Staff
                    Number
                    Management</a>
            </div>
            <div  class="p-2 bd-highlight">
                <a href="{{ route('admin.building') }}" dusk="idk" type="button"  class="btn btn-secondary btn-lg">Building Management</a>
            </div>
            <div class="p-2 bd-highlight">
                <a href="{{ route('admin.floor') }}" type="button" class="btn btn-secondary btn-lg">Floor
                    Management</a>
            </div>
            <div class="p-2 bd-highlight">
                <a href="{{ route('admin.room') }}" type="button" class="btn btn-secondary btn-lg">Room
                    Management</a>
            </div>
            <div class="p-2 bd-highlight">
                <a href="{{ route('admin.event') }}" type="button" class="btn btn-secondary btn-lg">Event
                    Management</a>
            </div>
        </div>


        </div>
        </div>
    </x-slot>

</x-layouts.app>
