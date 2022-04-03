<x-layouts.app>

    <x-slot name="title">
        {{ $page_title }}
    </x-slot>


    <x-slot name="slot">

        <div class="container">
            <a class="btn btn-outline-secondary" href="{{ route('admin.dashboard') }}">Go back</a>
           
            <a class="btn btn-secondary btn-sm" href="{{ route('admin.building.create') }}">Add New</a>

            <div class="table-responsive--sm  table-responsive">
                <table class="table table-striped table-bordered ">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Opening Time</th>
                            <th scope="col">Closing Time</th>
                            <th scope="col">Longitude</th>
                            <th scope="col">Latitude</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($buildings as $building)
                            <tr>
                                <td>{{ $building->id }}</td>
                                <td>{{ $building->name }}</td>
                                <td>{{ $building->opening_time }}</td>
                                <td>{{ $building->closing_time }}</td>
                                <td>{{ $building->longitude }}</td>
                                <td>{{ $building->latitude }}</td>

                                <td>
                                    <a href="{{ route('admin.building.delete', $building->id) }}">
                                        <i class="las la-user text--shadow"></i>Delete
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

{{-- @push('breadcrumb-plugins')
    
@endpush --}}
