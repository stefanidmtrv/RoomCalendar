<x-layouts.app>

    <x-slot name="title">
        Device Initialization
    </x-slot>

    <x-slot name="slot">

        <div class="card-body">

            <form method='POST' action="{{ route('rooms.pin') }}">
                @csrf
                <div class="form-group mb-4">
                    <p>PIN: </p>
                    <input type="text" name="pin" class="form-control"></p>
                </div>

                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-success" value="Submit">Submit</button>
                </div>
            </form>

        </div>

    </x-slot>

</x-layouts.app>