<x-layouts.app>

    <x-slot name="title">
        {{$page_title}}
    </x-slot>


    <x-slot name="slot">
    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <form action="{{ route('admin.event.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="payment-method-item">
                            <div class="payment-method-header d-flex flex-wrap">
                                <div class="content">
                                    <div class="row mt-4 mb-none-15">
                                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-15">
                                            <div class="input-group">
                                                <label class="w-100 font-weight-bold">@lang('Room ID') <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control " placeholder="@lang('Room ID')" name="room_id"
                                                       value="{{ old('room_id') }}"/>
                                                <label class="w-100 font-weight-bold">@lang('Student/Staff number') <span
                                                        class="text-danger"></span></label>
                                                <input type="text" class="form-control " placeholder="@lang('Student/Staff number')" name="user_number"
                                                       value="{{ old('user_number') }}"/>
                                                <label class="w-100 font-weight-bold">@lang('Name') <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control " placeholder="@lang('Name')" name="name"
                                                       value="{{ old('name') }}"/>
                                                <label class="w-100 font-weight-bold">@lang('Description') <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control " placeholder="@lang('Description')" name="description"
                                                       value="{{ old('description') }}"/>
                                                <label class="w-100 font-weight-bold">@lang('Start date time') <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control " placeholder="@lang('Start date time')" name="start_date_time"
                                                       value="{{ old('start_date_time') }}"/>
                                                <label class="w-100 font-weight-bold">@lang('End date time') <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control " placeholder="@lang('End date time')" name="end_date_time"
                                                       value="{{ old('end_date_time') }}"/>
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