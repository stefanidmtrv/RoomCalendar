<x-layouts.app>

    <x-slot name="title">
        Room {{ $room->id }}
    </x-slot>

    <x-slot name="slot">

        <div class="container my-3">
            
            <x-room-info>
                <x-slot name="number">{{ $room->id }}</x-slot>
                <x-slot name="table_capacity">{{ $room->table_capacity }}</x-slot>
                <x-slot name="computer_capacity">{{ $room->computer_capacity }}</x-slot>
                <x-slot name="num_projectors">{{ $room->number_of_projectors }}</x-slot>
                <x-slot name="floor">{{ $room->floor_id }}</x-slot>
            </x-room-info>
               

            <a class="btn btn-outline-secondary" href="#" onclick="history.go(-1)">Go Back</a>


            <div>
                <p>Week starting on: {{\Carbon\Carbon::now()
                ->startOfWeek()->addWeekday(0)->format('d-m-Y')}}</p>
                <p>Week ending on: {{\Carbon\Carbon::now()
                ->startOfWeek()->addWeekday(4)->format('d-m-Y')}}</p>
            </div>
            

            <hr>


            <x-timetable>
                <x-slot name="room">{{ $room->id}}</x-slot>
                <x-slot name="monday">{{ $monday }}</x-slot>
                <x-slot name="tuesday">{{ $tuesday }}</x-slot>
                <x-slot name="wednesday">{{ $wednesday }}</x-slot>
                <x-slot name="thursday">{{ $thursday }}</x-slot>
                <x-slot name="friday">{{ $friday }}</x-slot>
            </x-timetable>
            
        </div>
         

    </x-slot>
</x-layouts.app>
