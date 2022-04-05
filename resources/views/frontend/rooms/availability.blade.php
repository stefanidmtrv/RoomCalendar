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
                <x-slot name="floor">{{ $room->floor->number }}</x-slot>
                <x-slot name="building">{{ $room->floor->building->name }}</x-slot>
            </x-room-info>
            <hr>

            <p style="text-align:right;">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock"
                    viewBox="0 0 16 16">
                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                </svg>

                <strong>{{ \Carbon\Carbon::now()->format('H:i')}}</strong>
                <br>
                <strong>{{ \Carbon\Carbon::now()->format('l, jS F')}}</strong>
            </div>
            </p>

            
            @if ($isAvailable == false)
                <h1> Unavailable </h1>
                @if(\App\Models\Event::where('room_id', $room->id)->where('start_date_time',
                        \Carbon\Carbon::now()->ceilHour(1)->format('Y-m-d H:i:s'))->exists())
            <div>
                <p> Next meeting: {{\Carbon\Carbon::now()->ceilHour(1)->format('H:i:s')}}
                </p>
            </div>
            
                @endif
            @else
            <h1 style="font-size:50px"> 
                <p style="color:rgb(87, 86, 86);"> Available </p> 
            </h1>

                <br>

            <a class="btn btn-success btn-lg" href="{{ route('events.create',
            ['slot1'=> $lastHourNoDate, 'slot2' => $nextHourNoDate, 'date' => $currentDate, 'roomid' => $room->id]) }}">Book now</a>
            
                @if(\App\Models\Event::where('room_id', $room->id)->where('start_date_time',
                \Carbon\Carbon::now()->ceilHour(1)->format('Y-m-d H:i:s'))->exists())
                
                <div>
                    <h5 style="text-align:right;">Next meeting: {{\Carbon\Carbon::now()->ceilHour(1)->format('H:i')}}</h5>
                    
                </div>

                @endif
            @endif

            <br>
            <br>
            <a class="btn btn-outline-secondary" href="{{ route('rooms.show', 
            ['room' => $room->id]) }}">Timetable</a>
        </div>

    </x-slot>
</x-layouts.app>
