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
                            <th scope="col">@lang('Id')</th>
                            <th scope="col">@lang('Name')</th>
                            <th scope="col">@lang('Opening Time')</th>
                            <th scope="col">@lang('Closing Time')</th>
                            <th scope="col">@lang('Longitude')</th>
                            <th scope="col">@lang('Latitude')</th>

                        </tr>
                        </thead>
                        <tbody>
                            @forelse($buildings as $building)
                            <tr>
                                <td data-label="@lang('ID')">{{ $building->id }}</td>
                                <td data-label="@lang('Name')">{{ $building->name }}</td>
                                <td data-label="@lang('Opening Time')">{{ $building->opening_time }}</td>
                                <td data-label="@lang('Closing Time')">{{ $building->closing_time }}</td>
                                <td data-label="@lang('Longitude')">{{ $building->longitude }}</td>
                                <td data-label="@lang('Latitude')">{{ $building->latitude }}</td>

                                <td data-label="@lang('Action')">
                                    <a href="{{ route('admin.building.delete', $building->id) }}" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Delete">
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
            {{-- <div class="card-footer py-4">
                {{ $buildings->links('backend.partials.paginate') }}
            </div> --}}
        </div>
    </div>
</div>
<a class="btn btn-sm btn--primary box--shadow1 text--small" href="{{ route('admin.building.create') }}"><i
            class="fa fa-fw fa-plus"></i>@lang('Add New')</a>
</x-slot>
</x-layouts.app>

{{-- @push('breadcrumb-plugins')
    
@endpush --}}