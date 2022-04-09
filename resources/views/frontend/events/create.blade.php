<x-layouts.app>


    <x-slot name="title">
        {{ $page_title }}
    </x-slot>

    <x-slot name="slot">
        <x-create-card>
            <div class="container">

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

                    <div class="mb-3">
                        <label class="form-label">Event name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Name" name="name"
                            value="{{ old('name') }}" />
                    </div>

                    <input type="hidden" name="roomid" value="{{ $roomid }}">

                    <div class="mb-3">
                        <label class="form-label">Description<span class="text-danger">*</span></label>
                        <input type="text" class="form-control " placeholder="Description" name="description"
                            value="{{ old('description') }}" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Student/Staff number<span class="text-danger">*</span></label>
                        <input type="number" class="form-control" placeholder="Student/Staff number" name="user_number"
                            value="{{ old('user_number') }}" />
                    </div>
                    <input type="hidden" name="start_date_time" value="{{ $date . $slot1 }}" />
                    <input type="hidden" name="end_date_time" value="{{ $date . $slot2 }}" />

                    <center>
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    
                        <a class="btn btn-secondary" href="#" onclick="history.go(-1)">Cancel</a>
                    </center>

                </form>
            </div>
        </x-create-card>

    </x-slot>
</x-layouts.app>
