<x-layouts.app>

    <x-slot name="title">
        {{ $page_title }}
    </x-slot>


    <x-slot name="slot">

        <div class="container">
            <a class="btn btn-outline-secondary" href="{{ route('admin.dashboard') }}">Go back</a>

            <a class="btn btn-secondary btn-sm" href="{{ route('admin.event.create') }}">Add New</a>
            <div class="table-responsive--sm  table-responsive">
                <table class="table table-striped table-bordered ">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Room ID</th>
                            <th scope="col">Student/Staff number</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Start date time</th>
                            <th scope="col">End date time</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Edit</th>


                        </tr>
                    </thead>
                    <tbody>
                        @forelse($events as $event)
                            <tr>
                                <td>{{ $event->id }}</td>
                                <td>{{ $event->room_id }}</td>
                                <td>{{ $event->user_number }}</td>
                                <td>{{ $event->name }}</td>
                                <td>{{ $event->description }}</td>
                                <td>{{ $event->start_date_time }}</td>
                                <td>{{ $event->end_date_time }}</td>

                                <td>
                                    <a href="{{ route('admin.building.delete', $event->id) }}">
                                        Delete
                                    </a>
                                </td>
                                <td>
                                    <a href="#">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-muted text-center" colspan="100%">{{ $empty_message }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </x-slot>
</x-layouts.app>
