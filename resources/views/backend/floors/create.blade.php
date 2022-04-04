<x-layouts.app>

    <x-slot name="title">
        {{ $page_title }}
    </x-slot>


    <x-slot name="slot">

        <a class="btn btn-outline-secondary btn-sm" href="{{ route('admin.dashboard') }}">Go back</a>

        <x-create-card>
            <div class="container">
                <form action="{{ route('admin.floor.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">

                        <label class="form-label">Building<span class="text-danger">*</span></label>
                        <select class="form-control" name="building_id">

                            <option>Select...</option>
                            @foreach ($buildings as $building)
                                <option value="{{ $building->id }}">
                                    {{ $building->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">@lang('Number') <span
                                class="text-danger">*</span></label>
                        <input type="number" class="form-control " placeholder="Number" name="number"
                            value="{{ old('number') }}" />
                    </div>
                    <center>
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </center>
                </form>
            </div>

        </x-create-card>
    </x-slot>
</x-layouts.app>
