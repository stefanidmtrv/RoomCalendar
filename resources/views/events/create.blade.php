<x-layouts.app>


    <x-slot name="title">
        Add an event
    </x-slot>

    <x-slot name="slot">
        <div class="card">

            <div class="card-body">
                <form method='POST' action="{{ route('events.store') }}">
                    @csrf

                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-clock" viewBox="0 0 16 16">
                            <path
                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg>
                        <strong>Date:</strong> {{ $date }}
                        <p>
                            &emsp; <strong>Time:</strong>
                            {{ $slot1 }} - {{ $slot2 }}
                        </p>
                    </div>

                    <div class="form-group mb-4">
                        <p>Add a title: </p>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control"></p>
                    </div>

                    <div class="form-group mb-4">
                        <p>Add a description: </p>
                        <input type="text" name="description" value="{{ old('description') }}" class="form-control">
                        </p>
                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-success" value="Submit">Submit</button>
                        <a class="btn btn-secondary" href="{{ route('rooms.index') }}">Cancel</a>
                    </div>



                    <input type="hidden" name="start_date_time" value="{{ $date . $slot1 }}" />
                    <input type="hidden" name="end_date_time" value="{{ $date . $slot2 }}" />


                </form>
            </div>
        </div>

    </x-slot>
</x-layouts.app>
