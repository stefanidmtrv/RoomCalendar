<x-layouts.app>

    <x-slot name="title">
        {{$page_title}}
    </x-slot>


    <x-slot name="slot">

    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <form action="{{ route('admin.floor.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="payment-method-item">
                            <div class="payment-method-header d-flex flex-wrap">
                                <div class="content">
                                    <div class="row mt-4 mb-none-15">
                                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-15">
                                            <div class="input-group">
                                                <label class="w-100 font-weight-bold">@lang('Building') <span
                                                        class="text-danger">*</span></label>
                                                <select type="number" class="form-control "
                                                    placeholder="@lang('Building ID')" name="building_id">

                                                    <option>Select...</option>
                                                    @foreach ($buildings as $building)
                                                        <option value="{{ $building->id }}">
                                                            {{ $building->name }}
                                                        </option>
                                                        @endforeach
                                                </select>

                                                

                                                <label class="w-100 font-weight-bold">@lang('Number') <span
                                                        class="text-danger">*</span></label>
                                                <input type="number" class="form-control " placeholder="@lang('Number')"
                                                    name="number" value="{{ old('number') }}" />
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