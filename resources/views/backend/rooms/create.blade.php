<x-layouts.app>

    <x-slot name="title">
        {{ $page_title }}
    </x-slot>


    <x-slot name="slot">

        <a class="btn btn-outline-secondary btn-sm" href="{{ route('admin.dashboard') }}">Go back</a>

        <x-create-card>
            <div class="container">
                <form action="{{ route('admin.room.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Floor ID<span class="text-danger">*</span></label>
                        <select class="form-control" name="floor_id">
                            <option>Select...</option>
                            @foreach ($floors as $floor)
                                <option value="{{ $floor->id }}">
                                    {{ $floor->id }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Table capacity<span class="text-danger">*</span></label>
                        <input type="number" class="form-control" placeholder="Table capacity" name="table_capacity"
                            value="{{ old('table_capacity') }}" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Computer capacity<span class="text-danger">*</span></label>
                        <input type="number" class="form-control " placeholder="Computer capacity"
                            name="computer_capacity" value="{{ old('computer_capacity') }}" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Number of projectors<span class="text-danger">*</span></label>
                        <input type="number" class="form-control " placeholder="Number of projectors"
                            name="number_of_projectors" value="{{ old('number_of_projectors') }}" />
                    </div>
                    <center>
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </center>
                </form>
            </div>
        </x-create-card>

    </x-slot>

</x-layouts.app>
