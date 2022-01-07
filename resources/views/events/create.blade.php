<x-layouts.app>


    <x-slot name="title">
        Add an event
    </x-slot>

    <x-slot name="slot">
        <div class="card">

            <div class="card-body">
                <form method='POST' action="{{ route('events.store') }}">
                    @csrf
                    
                    <div class="form-group mb-4">
                        <p>Name: </p>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control"></p>
                    </div>

                    <div class="form-group mb-4">
                        <p>Description: </p>
                        <input type="text" name="description" value="{{ old('description') }}" class="form-control"></p>
                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-success" value="Submit">Submit</button>
                        <a class="btn btn-secondary" href="{{ route('rooms.index') }}">Cancel</a> 
                    </div>

                    <input type="hidden" name="start_date_time" value="{{ $slot1 }}" />
                    <input type="hidden" name="end_date_time" value="{{ $slot2 }}" />
                    
                </form>
            </div>
        </div>

    </x-slot>
</x-layouts.app>
