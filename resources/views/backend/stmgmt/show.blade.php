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
                            <th scope="col">@lang('Student Number')</th>
                            <th scope="col">@lang('Action')</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($stNums as $stnum)
                            <tr>
                                <td data-label="@lang('ID')">{{ $stnum->id }}</td>
                                <td data-label="@lang('Student Number')">{{ $stnum->stnum }}</td>
                                <td data-label="@lang('Action')">
                                    <a href="{{ route('admin.stmgmt.delete', $stnum->id) }}" class="icon-btn" data-toggle="tooltip" title="" data-original-title="Delete">
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
                {{ $stNums->links('backend.partials.paginate') }}
            </div> --}}
        </div>
    </div>
</div>
<a class="btn btn-sm btn--primary box--shadow1 text--small" href="{{ route('admin.stmgmt.create') }}"><i
            class="fa fa-fw fa-plus"></i>@lang('Add New')</a>
    </x-slot>
</x-layouts.app>

{{-- 
@push('breadcrumb-plugins')
    
@endpush --}}