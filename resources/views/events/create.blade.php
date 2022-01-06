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

                    {{-- <div class="form-group mb-4">
                        <p>Start:</p>
                        <input id="start_date_time" type="datetime-local" name="start_date_time" class="form-control">
                    </div>

                    <div class="form-group mb-4">
                        <p>End:</p>
                        <input id="end_date_time" type="datetime-local" name="end_date_time" class="form-control">
                    </div> --}}

                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-success" value="Submit">Submit</button>

                        {{-- <a href="{{ route('posts.index') }}">Cancel</a> --}}
                    </div>
                </form>
            </div>
        </div>

    </x-slot>
</x-layouts.app>
