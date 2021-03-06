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

    <div class="position-relative">
            <div class=" p-3 mb-5 bg-body rounded">
            @if ($isAvailable == false)
            <h1 style="font-size:50px"> 
                <p style="color:rgb(87, 86, 86);"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#F24D4D" class="bi bi-circle-fill" viewBox="0 0 16 16">
                        <circle cx="8" cy="8" r="8"/>
                      </svg>
                    Currently 
                    Unavailable </p> 
            </h1>
            
            @if($isExisting)
           
                <div class="shadow p-3 mb-5 bg-body rounded position-absolute top-0 end-0">
                    <h2 style="color:rgb(87, 86, 86);">Next meeting: {{$eventExist}}</h2>
                    {{$eventInfo->name}}
                </div>
            

            @endif
        
            @else
            
            <h1 style="font-size:50px"> 
                <p style="color:rgb(87, 86, 86);"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-circle-fill" viewBox="0 0 16 16">
                        <circle cx="8" cy="8" r="8"/>
                      </svg>
                    Available </p> 
            </h1>
            
                 <a class="btn btn-success btn-lg shadow p-3 mb-2" href="{{ route('events.create',
                    ['slot1'=> $lastHourNoDate, 'slot2' => $nextHourNoDate, 
                    'date' => $currentDate, 'roomid' => $room->id]) }}">Book now</a>
                
            @if($isExisting)
                
                    <div class="shadow p-3 mb-5 bg-body rounded position-absolute top-0 end-0">
                        <h2 style="color:rgb(87, 86, 86);">Next meeting: {{$eventExist}}</h2>
                        <b>{{$eventInfo->name}}</b>
                    </div>
                 
                @endif
            @endif
            <br>
            <a class="btn btn-outline-secondary shadow p-3 mb-2" href="{{ route('rooms.show', 
                    ['room' => $room->id]) }}">Timetable</a>
            
            </div>
    </div>

    </x-slot>
    @push('script-head')
        <script>
            setTimeout(function(){
                 location.reload(); 
                },  6*10000);
        </script>
    @endpush
</x-layouts.app>

