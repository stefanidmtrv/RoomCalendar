<x-layouts.app>

    <x-slot name="title">
        {{$page_title}}
    </x-slot>


    <x-slot name="slot">

        <div class="container">
            <a class="btn btn-outline-secondary btn-sm" href="{{ route('admin.dashboard') }}">Go back</a>

            <a class="btn btn-secondary btn-sm" href="{{ route('admin.floor.create') }}">Add New</a>
            <div class="table-responsive--sm  table-responsive">
                <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Building</th>
                            <th scope="col">Number</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($floors as $floor)
                            <tr>
                                <td>{{ $floor->id }}</td>
                                <td>{{ $floor->building->name }}</td>
                                <td>{{ $floor->number }}</td>

                                <td>
                                    <a href="{{ route('admin.floor.delete', $floor->id) }}">
                                        Delete
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.floor.edit', $floor->id) }}">
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
