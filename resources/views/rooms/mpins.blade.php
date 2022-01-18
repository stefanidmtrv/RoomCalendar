<x-layouts.app>

    <x-slot name="title">
        Manage Pins
    </x-slot>



    <x-slot name="slot">

        <a class="btn btn-outline-secondary" href="{{ route('rooms.index') }}">Go Back</a>
        {{-- <a href="{{ route('displays.create') }} " type="button" class="btn btn-success">Add a new device</a> --}}
        <a href="{{ route('rooms.pins') }}" type="button" class="btn btn-success">Manage PIN codes</a>
        
        
        
        <form method='POST' action="{{ route('pin.store') }}">
            @csrf
            <div class="form-group mb-4">
                <p>Add pin: </p>
                <input type="text" name="pin" class="form-control" required>
                </p>
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-success" value="Submit">Submit</button>
            </div>
        </form>


        <div class="d-grid gap-2 col-6 mx-auto">
            @if ($pins->count() > 0)
                @foreach ($pins as $pin)
                    <a href="" type="button" class="btn btn-primary">PIN: 
                        {{ $pin->pin }}</a>
                @endforeach
            @else
                <p><b>There no records!</b></p>
            @endif
        </div>

    </x-slot>

</x-layouts.app>
