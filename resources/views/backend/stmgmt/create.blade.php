<x-layouts.app>

    <x-slot name="title">
        {{ $page_title }}
    </x-slot>

    <x-slot name="slot">
        <a class="btn btn-outline-secondary btn-sm" href="{{ route('admin.dashboard') }}">Go back</a>

        <x-create-card>
            <div class="container">
                <form action="{{ route('admin.stmgmt.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Student/Staff number<span class="text-danger">*</span></label>
                        <input type="number" class="form-control" placeholder="Student/Staff number" name="stnum"
                            value="{{ old('stnum') }}" />
                    </div>

                    <center>
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </center>
                </form>
            </div>
        </x-create-card>

    </x-slot>

</x-layouts.app>
