<x-layouts.app>

    <x-slot name="title">
        {{$page_title}}
    </x-slot>


    <x-slot name="slot">

    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <form action="{{ route('admin.room.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="payment-method-item">
                            <div class="payment-method-header d-flex flex-wrap">
                                <div class="content">
                                    <div class="row mt-4 mb-none-15">
                                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-15">
                                            <div class="input-group">
                                                <label class="w-100 font-weight-bold">@lang('Floor ID') <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control " placeholder="@lang('Floor ID')" name="floor_id"
                                                       value="{{ old('floor_id') }}"/>
                                                <label class="w-100 font-weight-bold">@lang('Table capacity') <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control " placeholder="@lang('Table capacity')" name="table_capacity"
                                                       value="{{ old('table_capacity') }}"/>
                                                <label class="w-100 font-weight-bold">@lang('Computer capacity') <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control " placeholder="@lang('Computer capacity')" name="computer_capacity"
                                                       value="{{ old('computer_capacity') }}"/>
                                                <label class="w-100 font-weight-bold">@lang('Number of projectors') <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control " placeholder="@lang('Number of projectors')" name="number_of_projectors"
                                                       value="{{ old('number_of_projectors') }}"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn--primary btn-block">@lang('Add New')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-slot>
</x-layouts.app>