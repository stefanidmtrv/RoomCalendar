<x-layouts.app>

    <x-slot name="title">
        {{$page_title}}
    </x-slot>


    <x-slot name="slot">
    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <form action="{{ route('admin.building.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="payment-method-item">
                            <div class="payment-method-header d-flex flex-wrap">
                                <div class="content">
                                    <div class="row mt-4 mb-none-15">
                                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-15">
                                            <div class="input-group">
                                                <label class="w-100 font-weight-bold">@lang('Name') <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control " placeholder="@lang('Name')" name="name"
                                                       value="{{ old('name') }}"/>
                                                <label class="w-100 font-weight-bold">@lang('Opening Time') <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control " placeholder="@lang('Opening Time')" name="opening_time"
                                                       value="{{ old('opening_time') }}"/>
                                                <label class="w-100 font-weight-bold">@lang('Closing Time') <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control " placeholder="@lang('Closing Time')" name="closing_time"
                                                       value="{{ old('closing_time') }}"/>
                                                <label class="w-100 font-weight-bold">@lang('Latitude') <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control " placeholder="@lang('Latitude')" name="latitude"
                                                       value="{{ old('latitude') }}"/>
                                                <label class="w-100 font-weight-bold">@lang('Longitude') <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control " placeholder="@lang('Longitude')" name="longitude"
                                                       value="{{ old('longitude') }}"/>
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