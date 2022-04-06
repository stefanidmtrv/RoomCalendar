<x-layouts.app>

    <x-slot name="title">
        {{ $page_title }}
    </x-slot>


    <x-slot name="slot">

        <a class="btn btn-outline-secondary btn-sm" href="{{ route('admin.dashboard') }}">Go back</a>

        <x-create-card>
            <div class="container">
                
                <form action="{{ route('admin.event.update', $event) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Room ID<span class="text-danger">*</span></label>
                        <select class="form-control" name="room_id">
                            <option>Select...</option>
                            @foreach ($rooms as $room)
                                <option value="{{ $room->id }}">
                                    {{ $room->id }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Student/Staff number<span > (optional) </span></label>
                        <input type="number" class="form-control" placeholder="Student/Staff number" name="user_number"
                            value="{{ old('user_number') }}" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Event name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Name" name="name"
                            value="{{ old('name') }}" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description<span class="text-danger">*</span></label>
                        <input type="text" class="form-control " placeholder="Description" name="description"
                            value="{{ old('description') }}" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Start date and time<span class="text-danger">*</span></label>
                        <input type="datetime-local" step="1" class="form-control " placeholder="Start date and time"
                            name="start_date_time" value="{{ old('start_date_time') }}" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">End date and time<span class="text-danger">*</span></label>
                        <input type="datetime-local" step="1" class="form-control " placeholder="End date and time"
                            name="end_date_time" value="{{ old('end_date_time') }}" />
                    </div>
                    <center>
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </center>
                </form>
            </div>
        </x-create-card>

    </x-slot>

</x-layouts.app>