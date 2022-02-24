<x-layouts.app>

    <x-slot name="title">
        {{$page_title}}
    </x-slot>


    <x-slot name="slot">

<div class="row">
    <div class="col-lg-12">
        <div class="card b-radius--10 ">
            <div class="card-body p-0">
                <div class="table-responsive--sm  table-responsive">
                    <table class="table table--light style--two">
                        <thead>
                        <tr>
                            <th scope="col">@lang('ID')</th>
                            <th scope="col">@lang('Floor ID')</th>
                            <th scope="col">@lang('Building')</th>
                            <th scope="col">@lang('Table capacity')</th>
                            <th scope="col">@lang('Computer capacity')</th>
                            <th scope="col">@lang('Number of projectors')</th>
                            

                        </tr>
                        </thead>
                        <tbody>
                            @forelse($rooms as $room)
                            <tr>
                                <td data-label="@lang('ID')">{{ $room->id }}</td>
                                <td data-label="@lang('Floor ID')">{{ $room->floor_id }}</td>
                                <td data-label="@lang('Building')">{{ $room->floor->building->name }}</td>
                                <td data-label="@lang('Table capacity')">{{ $room->table_capacity }}</td>
                                <td data-label="@lang('Computer capacity')">{{ $room->computer_capacity }}</td>
                                <td data-label="@lang('Number of projectors')">{{ $room->number_of_projectors }}</td>

                                <td data-label="@lang('Action')">
                                    <a href="{{ route('admin.room.delete', $room->id) }}" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Delete">
                                        <i class="las la-user text--shadow"></i>Delete
                                    </a>
                                </td>
                                <td data-label="@lang('Action')">
                                    <a href="{{ route('rooms.show', $room) }}" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Delete">
                                        <i class="las la-user text--shadow"></i>Edit
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
            {{-- <div class="card-footer py-4">
                {{ $rooms->links('backend.partials.paginate') }}
            </div> --}}
        </div>
    </div>
</div><a class="btn btn-sm btn--primary box--shadow1 text--small" href="{{ route('admin.room.create') }}"><i
            class="fa fa-fw fa-plus"></i>@lang('Add New')</a>
</x-slot>
</x-layouts.app>

{{-- @push('breadcrumb-plugins')
    
@endpush --}}