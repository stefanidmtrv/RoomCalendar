<x-layouts.app>

    <x-slot name="title">
        {{ $page_title }}
    </x-slot>


    <x-slot name="slot">

        <div class="container">
            <a class="btn btn-outline-secondary btn-sm" href="{{ route('admin.dashboard') }}">Go back</a>

            <a class="btn btn-secondary btn-sm" href="{{ route('admin.stmgmt.create') }}">Add New</a>
            <div class="table-responsive--sm  table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Student/Staff Number</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($stNums as $stnum)
                            <tr>
                                <td>{{ $stnum->id }}</td>
                                <td>{{ $stnum->stnum }}</td>
                                
                                <td>
                                    <a href="{{ route('admin.stmgmt.edit', $stnum->id) }}">
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    <a class="text-danger" href="{{ route('admin.stmgmt.delete', $stnum->id) }}">
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
