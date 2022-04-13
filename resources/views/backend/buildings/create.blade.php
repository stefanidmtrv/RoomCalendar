<x-layouts.app>

    <x-slot name="title">
        {{ $page_title }}
    </x-slot>


    <x-slot name="slot">

        <a class="btn btn-outline-secondary btn-sm" href="{{ route('admin.building') }}">Go back</a>
        
        <x-create-card>
            <div class="container">
                
                <form action="{{ route('admin.building.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control " placeholder="Name" name="name"
                                value="{{ old('name') }}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Opening Time<span class="text-danger">*</span></label>
                            <input type="time" step="1" class="form-control " placeholder="Opening Time"
                                name="opening_time" value="{{ old('opening_time') }}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Closing Time<span class="text-danger">*</span></label>
                            <input type="time" step="1" class="form-control " placeholder="Closing Time"
                                name="closing_time" value="{{ old('closing_time') }}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Latitude<span class="text-danger">*</span></label>
                            <input type="number" class="form-control " placeholder="Latitude" name="latitude"
                                value="{{ old('latitude') }}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Longitude<span class="text-danger">*</span></label>
                            <input type="number" class="form-control " placeholder="Longitude" name="longitude"
                                value="{{ old('longitude') }}" />
                        </div>
                        <center>
                            <button type="submit" class="btn btn-secondary">Submit</button>
                        </center>
                    </div>
                </form>

        </x-create-card>
    </x-slot>

</x-layouts.app>
