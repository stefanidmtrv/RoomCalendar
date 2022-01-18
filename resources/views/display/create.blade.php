<x-layouts.app>


    <x-slot name="title">
        Register a device
    </x-slot>

    <x-slot name="slot">
        <div class="card">

            <div class="card-body">
                <form method='POST' action="{{ route('displays.store') }}">
                    @csrf
                    
                    <select class="form-select mb-4" aria-label="Default select example" name="room_id">
                        <option>Select a room...</option>
                        @foreach ($rooms as $room)
                            <option value="{{ $room->id }}">
                                {{ $room->id }}
                            </option>

                        @endforeach
                    </select>

                    {{-- <select class="form-select mb-4" aria-label="Default select example" name="pin">
                        <option>Select a pin...</option>
                        @foreach ($pins as $pin)
                            <option value="{{ $pin->id }}">
                                {{ $pin->pin }}
                            </option>

                        @endforeach
                    </select> --}}


                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-success" value="Submit">Submit</button>

                        {{-- <a href="{{ route('posts.index') }}">Cancel</a> --}}
                    </div>
                </form>
            </div>
        </div>

    </x-slot>
</x-layouts.app>
