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
                            <th scope="col">@lang('Room ID')</th>
                            <th scope="col">@lang('Student/Staff number')</th>
                            <th scope="col">@lang('Name')</th>
                            <th scope="col">@lang('Description')</th>
                            <th scope="col">@lang('Start date time')</th>
                            <th scope="col">@lang('End date time')</th>

                        </tr>
                        </thead>
                        <tbody>
                            @forelse($events as $event)
                            <tr>
                                <td data-label="@lang('ID')">{{ $event->id }}</td>
                                <td data-label="@lang('Room ID')">{{ $event->room_id }}</td>
                                <td data-label="@lang('Stedent/Staff number')">{{ $event->user_number}}</td>
                                <td data-label="@lang('Name')">{{ $event->name }}</td>
                                <td data-label="@lang('Description')">{{ $event->description }}</td>
                                <td data-label="@lang('Start date time')">{{ $event->start_date_time }}</td>
                                <td data-label="@lang('End date time')">{{ $event->start_date_time }}</td>

                                <td data-label="@lang('Action')">
                                    <a href="{{ route('admin.event.delete', $event->id) }}" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Delete">
                                        <i class="las la-user text--shadow"></i>Delete
                                    </a>
                                </td>
                                <td data-label="@lang('Action')">
                                    <a href="{{ route('events.show', $event) }}" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Delete">
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
</div><a class="btn btn-sm btn--primary box--shadow1 text--small" href="{{ route('admin.event.create') }}"><i
            class="fa fa-fw fa-plus"></i>@lang('Add New')</a>
</x-slot>
</x-layouts.app>

{{-- @push('breadcrumb-plugins')
    
@endpush --}}