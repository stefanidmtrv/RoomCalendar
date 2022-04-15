<x-layouts.app>

    <x-slot name="title">
        {{ $page_title }}
    </x-slot>


    <x-slot name="slot">

        <div class="container">
            <a class="btn btn-outline-secondary btn-sm" href="{{ route('admin.dashboard') }}">Go back</a>

            <a class="btn btn-secondary btn-sm" href="{{ route('admin.room.create') }}">Add New</a>
            <div class="table-responsive--sm  table-responsive">
                            <table class="table table-striped table-bordered ">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Floor ID</th>
                                        <th scope="col">Building</th>
                                        <th scope="col">Table capacity</th>
                                        <th scope="col">Computer capacity</th>
                                        <th scope="col">Number of projectors</th>
                                        <th scope="col">Delete</th>
                                        <th scope="col">Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($rooms as $room)
                                        <tr>
                                            <td>{{ $room->id }}</td>
                                            <td>{{ $room->floor_id }}</td>
                                            <td>{{ $room->floor->building->name }}</td>
                                            <td>{{ $room->table_capacity }}</td>
                                            <td>{{ $room->computer_capacity }}</td>
                                            <td>{{ $room->number_of_projectors }}</td>

                                            
                                            <td>
                                                <a href="{{ route('admin.room.edit', $room->id) }}">
                                                    Edit
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-danger" href="{{ route('admin.room.delete', $room->id) }}">
                                                    Delete
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
            